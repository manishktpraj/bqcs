
<?php $__env->startSection('content'); ?>
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

            // print_r($value);die;
        ?>
    <div class="section full">  
        <div class="wide-block pt-2 pb-2">
            <h5 class="fw700 tx-14" style="margin-bottom:5px">Booking ID: <?php echo e($value->ca_id); ?> | <?php echo e($serData); ?></h5>
            <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13"><?php echo e(isset($value->customerAddress)?$value->customerAddress->customer_address:''); ?></span></div>
            <div class="flex-class"><span class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13"><?php echo e(date("d M",strtotime($value->ca_date))); ?>, <?php echo e(date("D",strtotime($value->ca_date))); ?> <?php echo e($value->ca_time); ?>-<?php echo e($value->ca_end_time); ?></span></div>
            <div class="mt-2">
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#ModalComment" class="btn btn-success btn-sm me-1">View</a>
                <?php if($value->ca_report_submit==1)
                {?>
               <!-- <a href="<?php echo e(route('createPDF',$value->ca_id)); ?>" class="btn btn-secondary btn-sm me-1">Report</a>-->
               <a href="<?php echo e(route('reportselector',[$value->ca_id,1])); ?>" class="btn btn-secondary btn-sm me-1">Report</a>
      <a href="<?php echo e(route('job-question-new',$value->ca_id)); ?>" class="btn btn-secondary btn-sm me-1">Edit Inspection</a>
               <?php  }else{ ?>
                <a href="<?php echo e(route('job-question-new',$value->ca_id)); ?>" class="btn btn-secondary btn-sm me-1">Start Inspection</a>
               <?php } ?>
                 
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
<h5 class="modal-title">Booking (Id: 456)</h5>
<a href="#" id="ModalCommentdismiss" data-bs-dismiss="modal">Close</a>
</div>
<div class="modal-body">
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>113 Stoneham Road, Attadale WA</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- * Modal Form -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/job.blade.php ENDPATH**/ ?>