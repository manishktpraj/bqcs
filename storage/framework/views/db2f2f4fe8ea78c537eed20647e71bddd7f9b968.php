
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Services</a></li>
<li class="breadcrumb-item active" aria-current="page">Manage Services</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Services</h4>
</div>
<div class="d-none d-md-block">
<a href="<?php echo e(route('add-new-service')); ?>" class="btn btn-sm pd-x-15 btn-primary btn-uppercase  mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i>Add New Service</a>

</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card mg-b-15">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Services Listings</h6>
</div>
<!-- <div class="card-body">
<?php echo $__env->make('Csadmin.bulkaction', ['status' => 'FILTER_ROLE'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div> -->
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
  
<tr>
<th scope="col" style="width:400px;">Name</th>
<th scope="col" style="text-align:center; width:100px">Action</th>
</tr>
</thead>
<tbody>
<?php echo $strEntryHtml1;?>

<!-- <?php foreach($resroleData as $role){?>
<tr>
<td><?php //echo $role->role_name;?></td>
<td><div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<a href="<?php echo e(route('permission',$role->role_id )); ?>" class="btn btn-info btn-icon mg-r-5" title="Questions" style="padding:0px 5px;"><i class="fas fa-copy" style="font-size:11px;"></i></a>
<a href="<?php echo e(route('add-new-service',$role->role_id )); ?>" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<a href="<?php echo e(route('servicesDelete',$role->role_id )); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
</nav>
</div></td>
</tr>
<?php } ?>  -->
    </tbody>





</div>
</div>
</div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Services/services.blade.php ENDPATH**/ ?>