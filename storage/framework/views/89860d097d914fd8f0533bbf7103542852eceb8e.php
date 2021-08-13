
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Technicians</a></li>
<li class="breadcrumb-item active" aria-current="page">Technician Group</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Technician Group</h4>
</div>
<div class="d-none d-md-block"></div>
</div>
<div class="row row-xs">
<div class="col-lg-4">
<div class="card mg-b-15">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Add Technician Group</h6>
</div>
<form method="post" action="" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="hidden" name="group_id" value="<?php echo isset($rowCategoryData->group_id)?$rowCategoryData->group_id:'0'?>">
<div class="card-body">
<div class="form-group">
<label>Group Name / Title: <span style="color:red">*</span></label>
<input type="text" class="form-control" name="group_name" required="" value="<?php echo isset($rowCategoryData->group_name)?$rowCategoryData->group_name:''?>">
<span class="tx-color-03" style="font-size: 11px;">This name is appears on your site</span>
</div>
<div class="form-group">
<select class="form-control select2" name="ca_service_parent[]" id="test" multiple="multiple" style="width: 100%;" onchange="getServiceChild(this.value)">
<?php foreach($resTech as $value){?>
<option value="<?php $value->faculty_id;?>"><?php echo $value->faculty_first_name." ".$value->faculty_last_name; ?></option>
<?php }?>
</select>
</div>
</div>
<div class="card-footer" style="padding: 0.75rem 1rem;">
<button type="submit" class="btn btn-lg btn-success btn-block">Save</button>
</div>
</form>
</div>
</div>
<div class="col-lg-8">
<div class="card mg-b-15">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Technician Group Listings</h6>
</div>
<div class="card-body">
<?php echo $__env->make('Csadmin.bulkaction', ['status' => 'FILTER_GROUP'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
<th style="width:5%;text-align:center;width:10px;"><input type="checkbox" id="selectAll" style="vertical-align: middle;"></th>
<th scope="col" style="width:400px;">Group Name</th>
<th scope="col">Status</th>
<th scope="col" style="text-align:center">Count</th>
<th scope="col" style="text-align:center; width:100px">Action</th>
</tr>
</thead>
<tbody>


</tbody>
</table>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Technician/techniciangroup.blade.php ENDPATH**/ ?>