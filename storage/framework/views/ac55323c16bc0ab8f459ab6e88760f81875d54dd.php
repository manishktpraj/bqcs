
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Services</a></li>
<li class="breadcrumb-item active" aria-current="page">Add New Services</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Add New Services</h4>
</div>
<div class="d-none d-md-block">
    
</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card mg-b-15">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Add New Services</h6>
</div>
<form method="post" action="<?php echo e(route('serviceproccess')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="hidden" name="tc_id" value="<?php echo isset($rowCategoryData->tc_id)?$rowCategoryData->tc_id:'0'?>">
<div class="card-body">
<div class="form-group">
<label>Service Name / Title: <span style="color:red">*</span></label>
<input type="text" class="form-control" name="role_name" required="" value="<?php echo isset($rowCategoryData->role_name)?$rowCategoryData->role_name:''?>">
<span class="tx-color-03" style="font-size: 11px;">This name is appears on your site</span>
</div>
<div class="form-group">
<label>Parent Service:</label>
<select class="custom-select" name="role_parent">
<option value="0">Select Parent Service</option>
<?php echo $strEntryHtml;?>
}?>
</select>
<span class="tx-color-03" style="font-size: 11px;line-height: 20px;">Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.</span>
</div>
</div>
<div class="card-footer" style="padding: 0.75rem 1rem;">
<button type="submit" class="btn btn-lg btn-success btn-block">Save</button>
</div>
</form>
</div>
</div>

 




</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Services/addNewService.blade.php ENDPATH**/ ?>