@extends('Layout.app')
@section ('content')
<div id="appCapsule">
    <?php if(count($resAppointmentsData)>0){ 
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
        ?>
    <div class="section full">  
        <div class="wide-block pt-2 pb-2">
            <h5 class="fw700 tx-14" style="margin-bottom:5px">Booking ID: {{ $value->ca_id}} | {{$serData}}</h5>
            <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13">{{ $value->customerAddress->customer_address}}</span></div>
            <div class="flex-class"><span  class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13">{{ date("d M",strtotime($value->ca_date))}}, {{ date("D",strtotime($value->ca_date))}} {{$value->ca_time}}-{{$value->ca_end_time}}</span></div>
            <div class="mt-2">
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#ModalComment" class="btn btn-success btn-sm me-1">View</a>
                <a href="{{route('job-question-new',$value->ca_id)}}" class="btn btn-secondary btn-sm me-1">Start Inspection</a>
            </div>
        </div>
    </div>
    <?php }}else{?>
        <p>No Appointment Assigned</p>
    <?php }?>
</div>
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalComment" data-bs-backdrop="static" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Comment</h5>
<a href="#" id="ModalCommentdismiss" data-bs-dismiss="modal">Close</a>
</div>
<div class="modal-body">
<div class="login-form">
<div class="section mt-4 mb-5">
<form action="javascript:void(0)" method="post" id="commentBox">
<div class="form-group boxed">
<div class="input-wrapper">
<textarea   rows="5" class="form-control" name="comment" id="commentId"></textarea>
<input type="hidden" name="rowId" value="" id="rowId">
<input type="hidden" name="sq_stage_id" value="" id="sq_stage_id">
<input type="hidden" name="sq_question_id" value="" id="sq_question_id">
<i class="clear-input">
<ion-icon name="close-circle"></ion-icon>
</i>
</div>
</div>
<div class="mt-2">
<button type="button" class="btn btn-success  btn-block btn-lg">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- * Modal Form -->
@endsection
