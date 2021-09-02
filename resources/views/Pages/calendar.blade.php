
@extends('Layout.app')
@section ('content')
<!-- App Capsule -->
<div id="appCapsule" class="app-calendar">
<div class="calendar-wrapper">
<div class="calendar-sidebar">
<div class="calendar-sidebar-header">
<i data-feather="search"></i>
<div class="search-form">
<input type="search" class="form-control" placeholder="Search calendar">
</div>
<a href="" class="btn btn-sm btn-primary btn-icon calendar-add">
<div data-toggle="tooltip" title="Create New Event"><i data-feather="plus"></i></div>
</a><!-- calendar-add -->
</div><!-- calendar-sidebar-header -->
<div id="calendarSidebarBody" class="calendar-sidebar-body">
<div class="calendar-inline">
<div id="calendarInline"></div>
</div><!-- calendar-inline -->
</div><!-- calendar-sidebar-body -->
</div><!-- calendar-sidebar -->
<div class="calendar-content">
<div id="calendar" class="calendar-content-body"></div>
</div><!-- calendar-content -->
</div><!-- calendar-wrapper -->
</div>


<script>
    var curYear = moment().format('YYYY');
var curMonth = moment().format('MM');

// Calendar Event Source
var calendarEvents = {
  id: 1,
  backgroundColor: '#d9e8ff',
  borderColor: '#0168fa',
  events: [
    <?php
        foreach($resAppointmentsData as $value)
        {
           
            $services = DB::table('cs_services')
                        ->whereIn('role_id',explode(",",$value->ca_service))
                        ->get();
            $ser = array();
            foreach($services as $valuee){
                $ser[] = $valuee->role_name;
            }
            $serData = implode(" + ",$ser);

            // print_r($value);die;
        ?>
         {
      id: '1',
      start: '{{ date("Y-m-d h:i:s",strtotime($value->ca_date.' '. date("h:i:s",strtotime($value->ca_time))))  }}', 
      end:  '{{ date("Y-m-d h:i:s",strtotime($value->ca_end_date.' '. date("h:i:s",strtotime($value->ca_end_time))))  }}',
      title: 'Booking ID: {{ $value->ca_id}} | {{$serData}}',
      description: '{{ isset($value->customerAddress)?$value->customerAddress->customer_address:''}}',
      url:'{{ SITE_URL.'job-question/'.$value->ca_id}}'
    }
    <?php } ?> 
  ]
};

// Birthday Events Source
var birthdayEvents = {
  id: 2,
  backgroundColor: '#c3edd5',
  borderColor: '#10b759',
  events: []
};


var holidayEvents = {
  id: 3,
  backgroundColor: '#fcbfdc',
  borderColor: '#f10075',
  events: []
};

var discoveredEvents = {
  id: 4,
  backgroundColor: '#bff2f2',
  borderColor: '#00cccc',
  events: []
};

var meetupEvents = {
  id: 5,
  backgroundColor: '#dedafe',
  borderColor: '#5b47fb',
  events: []
};


var otherEvents = {
  id: 6,
  backgroundColor: '#ffdec4',
  borderColor: '#fd7e14',
  events: []
};
    </script>
@endsection
<!-- * App Capsule -->