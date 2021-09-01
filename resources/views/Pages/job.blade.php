@extends('Layout.app')
@section ('content')
<div class="extraHeader p-0">
<ul class="nav nav-tabs lined" role="tablist">
<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Ongoing" role="tab">Ongoing Bookings</a></li>
<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Completed" role="tab">Completed Bookings</a></li>
</ul>
</div>
<div id="appCapsule" class="extra-header-active">
<div class="tab-content">
    <div class="tab-pane fade show active" id="Ongoing" role="tabpanel">
    <?php if(count($resAppointmentsData)>0){ 
        foreach($resAppointmentsData as $value)
        {
            if($value->ca_report_submit<=0)
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
    <div class="section full">  
        <div class="wide-block pt-2 pb-2">
        <div class="flex-class" style="margin-bottom:5px"><span  class="fw700 tx-14">{{ date("d M",strtotime($value->ca_date))}}, {{ date("D",strtotime($value->ca_date))}} {{$value->ca_time}}-{{$value->ca_end_time}}</span></div>
            <div class=" tx-13" style="margin-bottom:5px">Booking ID: {{ $value->ca_id}} | {{$serData}}</div>
            <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13">{{ isset($value->customerAddress)?$value->customerAddress->customer_address:''}}</span></div>
            
            <div class="mt-2">

                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#ModalComment" class="btn btn-success btn-sm me-1">View</a>
                <?php if($value->ca_report_submit==1)
                {?>
                <!-- <a href="{{route('createPDF',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Report</a>-->
                <a href="{{route('reportselector',[$value->ca_id,1])}}" class="btn btn-secondary btn-sm me-1">Report</a>
                <a href="{{route('job-question-new',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Edit Inspection</a>
               <?php  }else{ ?>
                <a href="{{route('job-question-new',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Start Inspection</a>
               <?php } ?>
                 
            </div>
        </div>
    </div>
    <?php }}}else{?>
        <div class="section full">
        No Project Found
</div>
    <?php }?>
    </div>
    <div class="tab-pane fade" id="Completed" role="tabpanel">
<div class="section full">
<?php if(count($resAppointmentsData)>0){ 
        foreach($resAppointmentsData as $value)
        {
            if($value->ca_report_submit==1)
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
    <div class="section full">  
        <div class="wide-block pt-2 pb-2">
        <div class="flex-class" style="margin-bottom:5px"><span  class="fw700 tx-14">{{ date("d M",strtotime($value->ca_date))}}, {{ date("D",strtotime($value->ca_date))}} {{$value->ca_time}}-{{$value->ca_end_time}}</span></div>
            <div class=" tx-13" style="margin-bottom:5px">Booking ID: {{ $value->ca_id}} | {{$serData}}</div>
            <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13">{{ isset($value->customerAddress)?$value->customerAddress->customer_address:''}}</span></div>
            
            <div class="mt-2">
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#ModalComment" class="btn btn-success btn-sm me-1" >View</a>
                <?php if($value->ca_report_submit==1)
                {?>
                <!-- <a href="{{route('createPDF',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Report</a>-->
                <a href="{{route('reportselector',[$value->ca_id,1])}}" class="btn btn-secondary btn-sm me-1">Report</a>
                <a href="{{route('job-question-new',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Edit Inspection</a>
               <?php  }else{ ?>
                <a href="{{route('job-question-new',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Start Inspection</a>
               <?php } ?>
                 
            </div>
        </div>
    </div>
    <?php }}}else{?>
        <p>No Bookings Found</p>
    <?php }?>
</div>
</div>
    </div>
</div>
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalComment" data-bs-backdrop="static" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Booking (Id: 456)</h5>
<a href="#" id="ModalCommentdismiss" data-bs-dismiss="modal">Close</a>
</div>
<div class="modal-body">
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>113 Stoneham Road, Attadale WA</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="calendar"></ion-icon></span><span>01 Sep, Wed 12:00-13:00PM</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="clipboard"></ion-icon></span><span>Dead Rat Removal + Baiting</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="cash"></ion-icon></span><span>250+GST = $275</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span>Brendan Cox</span></li>
</ul>
</div>
<h4 class="mt-2">Customer Details</h4>
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span>Isabella Carr</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="call"></ion-icon></span><span>0435022913</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="mail"></ion-icon></span><span>bella.claire1997@gmail.com</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>113 Stoneham Road, Attadale WA</span></li>
</ul>
</div>
<h4 class="mt-2">Job Notes</h4>
<div style="background:#ffc107 !important;padding:4px !important; font-weight:700;display:inline-block">No Notes</div>
<h4 class="mt-2">Job History</h4>
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>113 Stoneham Road, Attadale WA</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="calendar"></ion-icon></span><span>01 Sep, Wed 12:00-13:00PM</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="clipboard"></ion-icon></span><span>Dead Rat Removal + Baiting</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="cash"></ion-icon></span><span>250+GST = $275</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span>Brendan Cox</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- * Modal Form -->
@endsection


<script id="source" language="javascript" type="text/javascript">
function popup(){
$(function() 
{
    
  $.ajax({                    
  url: 'content/get.php',     
  type: 'post', // performing a POST request
  data : {
    data1 : 'value' // will be accessible in $_POST['data1']
  },
  dataType: 'json',                   
  success: function(data)         
  {
    // etc...
  } 

});
});
}

</script>

