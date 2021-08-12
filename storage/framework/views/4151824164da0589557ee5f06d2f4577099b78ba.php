
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Appointment</a></li>
<li class="breadcrumb-item active" aria-current="page">Manage Appointment</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Appointment</h4>
</div>
<div class="d-none d-md-block">
<a href="#modaladdapponiment" data-toggle="modal" class="btn btn-sm pd-x-15 btn-primary btn-uppercase  mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i>Add New Appointment</h4></a>
</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Appointments Lists</h6>
<div class="d-flex tx-18">
<a href="" class="link-03 lh-0"><i class="icon ion-md-refresh"></i></a>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-6">
<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="_token" value="2z6Fb2q0nUFEkoVGo2olEJCkwBwXyCpWxAzvWzEr"><div class="d-sm-flex justify-content-start mg-b-0">
<div class="form-group mg-b-0">
<input type="hidden" id="bulkvalue" name="bulkvalue" value="">
<select class="custom-select" name="bulkaction" id="bulkactionSelect">
<option value="">Bulk Action</option> 
<option value="1">Delete</option>
<option value="2">Active</option>
<option value="3">Inactive</option>
</select>
</div>
<div class="mg-sm-l-10">
<button type="submit" id="bulkaction-button" class="btn btn-primary pd-x-20">Apply</button>
</div>
</div>
</form>
</div>
<div class="col-lg-6">
<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="_token" value="2z6Fb2q0nUFEkoVGo2olEJCkwBwXyCpWxAzvWzEr"><div class="d-sm-flex justify-content-end mg-b-0">
<div class="form-group mg-b-0">
<input type="text" class="form-control wd-150" placeholder="" name="filter_keyword" value="">
</div>
<div class="mg-sm-l-10">
<button type="submit" class="btn btn-primary "><i class="fas fa-search"></i></button>
</div>
</div>
</form>
</div>
</div> 
</div>
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
<th scope="col" style="width:50px;">ID</th>
<th scope="col" style="width:100px;">Date</th>
<th scope="col">Customer Details</th>
<th scope="col">Technician</th>
<th scope="col">Services</th>
<th scope="col">Price</th>
<th scope="col">Status</th>
<th scope="col" style="text-align:center">Action</th>
</tr>
</thead>
<tbody>
<?php if(count($resAppointentData)>0){ 
    $count = 1;
    foreach($resAppointentData as $value){
    ?>
<tr>
<td><?php echo $count++?></td>
<td><?php echo date("d M Y",strtotime($value->created_at))?></td>
<td>
<div class="media align-items-center mg-b-0">
<div class="avatar"><img src="http://192.168.1.38/coachingzon/public/img/500.png" class="rounded" alt="" style="border:1px solid #ddd;"></div>
<div class="media-body pd-l-10">
<h6 class="mg-b-3" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width: 200px;"><a href=""><?php echo $value->customer->customer_fname?> <?php echo $value->customer->customer_lname?></a></h6>
<span class="d-block tx-13 tx-color-03" style="display:none">Willetton@#6 Barricade Court, Willetton WA</span>
</div>
</div> 
</td>
<td><span class="tx-13"><?php echo $value->technician->faculty_first_name?> <?php echo $value->technician->faculty_last_name?></span></td>
<td><span class="tx-13">Flea Pest Control Treatment</span></td>
<td><span class="tx-13">$250 GST</span></td>
<td>
<a href="#"><span class="badge badge-success">Active</span></a>
</td>
<td style="width:105px;">
<div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<a href="#" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
</nav>
</div>
</td>
</tr>    
<?php }}else{?>
    <tr><td colspan="8" class="text-center">No Record Fount</td></tr>
<?php }?>
</tbody>
</table>
</div>
<div class="card-footer d-flex align-items-center justify-content-between" style="align-items: center;">
<span class="text-muted">Showing 1 to 3 of 3 entries</span>
<ul class="pagination pagination-filled mg-b-0"></ul>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Appointment/index.blade.php ENDPATH**/ ?>