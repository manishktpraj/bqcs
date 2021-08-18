
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Services</a></li>
<li class="breadcrumb-item active" aria-current="page">Manage Question</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Question</h4>
</div>
<div class="d-none d-md-block">
<a href="<?php echo e(route('add-new-question',$faculty_role->role_id)); ?>" class="btn btn-sm pd-x-15 btn-primary btn-uppercase  mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i>Add New Question</a>
</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card">
<!-- <form method="post" action="<?php echo e(route('permissionProccess')); ?>" enctype="multipart/form-data"> -->
<!-- <?php echo csrf_field(); ?> -->
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Manage Question For <?php echo $faculty_role->role_name;?></h6>
<div class="d-flex tx-18">
<!-- <button type="submit" name="submit" class="btn btn-success"> Save</button> -->
</div>
</div>
<input type="hidden" value="<?php echo $intCategoryId; ?>" name="rp_role_id" >
<!-- <input type="hidden" value="<?php echo $intCategoryId; ?>" name="pr_role_id" > -->

<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
     <th style="width:5%;">S No.</th>
     <th>Question</th>
     <!-- <th>Entry</th>
     <th>Delete</th>
     <th>View</th> -->
     <th style="text-align:center;">Action</th>

</tr>
</thead>
<tbody id="sortable1" class="connectedSortable ui-sortable">
  <?php 
  if(count($questionData)>0){
  $i=1;
  foreach($questionData as $question){

       //  $rowPermissionChecked = $rowPermission->where('rp_permission_id', $question->question_id)->first(); 
     ?>
<tr class="clsSingleSelectTr ui-sortable-handle" sliderid="<?php echo e($question->question_id); ?>" sliderorder="<?php echo e($i); ?>">
       <td><?php echo $i++; ?></td>
	  <td><?php echo $question->question_name;?></td>
       <td>
<div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<!-- <a href="<?php echo e(route('childquestion',$question->question_id )); ?>" class="btn btn-info btn-icon mg-r-5" title="View" style="padding:0px 5px;"><i class="fas fa-copy" style="font-size:11px;"></i></a> -->
<a href="<?php echo e(route('add-new-question',[$faculty_role->role_id,$question->question_id] )); ?>" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<!-- <a href="<?php echo e(route('deleteQuestion',[$faculty_role->role_id,$question->question_id])); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a> -->
</nav>
</div>
</td>

<?php  }}else{ ?>

     <tr><td colspan="7" class="text-center">No Record Found</td></tr>
     <?php } ?>
</tbody>
</table>
</div>
<!-- </form> -->
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Question/question.blade.php ENDPATH**/ ?>