
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Products</a></li>
<li class="breadcrumb-item active" aria-current="page">All Products</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Products</h4>
</div>
<div class="d-none d-md-block">
<!--<a href="#" class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="file" class="wd-10 mg-r-5"></i>Export</a>-->
<a href="<?php echo e(route('add-new-product')); ?>" class="btn btn-sm pd-x-15 btn-primary btn-uppercase  mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i>Add New Product</a>
</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Products Lists</h6>
<div class="d-flex tx-18">
<a href="" class="link-03 lh-0"><i class="icon ion-md-refresh"></i></a>
</div>
</div>
<div class="card-body">
<?php echo $__env->make('Csadmin.bulkaction', ['status' => 'FILTER_PRODUCT'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
<th scope="col" style="text-align:center;width:10px;"><input type="checkbox" id="selectAll"></th>
<th scope="col" style="text-align:center;width:50px;">S.No.</th>
<th scope="col">Product Details</th>
<th scope="col">Published By</th>

<th scope="col">Price</th>

<th scope="col" style="text-align:center;">Order</th>
<th scope="col">Status</th>
<th scope="col">Date</th>
<th scope="col" style="text-align:center">Action</th>
</tr>
</thead>
<tbody>
    
<?php 

$i=1;if(count($resPackageData)>0){
foreach($resPackageData as $package){?>    
<tr>
<th scope="row" style="text-align:center"><input type="checkbox" id="selectAll" class="clsSelectSingle" name="product_id[]" value="<?php echo $package->product_id ?>"></th>
<th scope="row" style="text-align:center"><?php echo $i++;?></th>
<td>
<div class="media align-items-center mg-b-0">
<div class="avatar" style="border:1px solid #ddd;"><img src="<?php echo (isset($package->product_image) && $package->product_image!="")?SITE_UPLOAD_URL.SITE_PRODUCT_IMAGE.$package->product_image:SITE_NO_IMAGE_PATH;?>" class="rounded" alt=""></div>
<div class="media-body pd-l-10">
<h6 class="mg-b-3" style=" white-space: nowrap;  overflow: hidden;  text-overflow: ellipsis; width:300px"><a href="#"><?php echo $package->product_title;?></a></h6>
<span class="d-block tx-13 tx-color-03"><?php echo $package->product_category_name;?></span>
</div>
</div>
</td>
<td><?php echo isset($package->ins_name)?$package->ins_name:'Admin';?></td> 
<td><p class="mg-b-3 tx-13 tx-color-03" style="text-decoration: line-through;">₹<?php echo $package->product_mrp;?></p>
<span class="d-block tx-13 ">₹<?php echo $package->product_msp;?></span></td>

<!--<td>₹<?php echo $package->product_msp;?></td>-->
<td style="text-align:center;">0</td>

<td> <?php if($package->product_status==1){?>
    <a href="<?php echo e(route('productStatus',$package->product_id)); ?>" onclick="return confirm('Are you sure?')"><span class="badge badge-success">Active</span></a>
    <?php }else{?>
    <a href="<?php echo e(route('productStatus',$package->product_id)); ?>" onclick="return confirm('Are you sure?')"><span class="badge badge-danger">Inactive</span></a>
    <?php }?></td>
<td><?php echo date("d M Y",strtotime($package->created_at));?></td>
<td>
<div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<a href="<?php echo e(route('add-new-product',$package->product_id )); ?>" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<a href="<?php echo e(route('productDelete',$package->product_id )); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
</nav>
</div>
</td>

</tr>
<?php }}else{ ?>
<tr><td colspan="9" class="text-center">No Record Found</td></tr>
<?php } ?> 
</tbody>
</table>
</div>
<div class="card-footer d-flex align-items-center justify-content-between" style="align-items: center;">
<span class="text-muted"><?php echo 'Showing '.$resPackageData->firstItem().' to '.$resPackageData->lastItem().' of '.$resPackageData->total().' entries';?></span>
<ul class="pagination pagination-filled mg-b-0"><?php echo e($resPackageData->links()); ?></ul>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\coachingzon\resources\views/Csadmin/Csproduct/index.blade.php ENDPATH**/ ?>