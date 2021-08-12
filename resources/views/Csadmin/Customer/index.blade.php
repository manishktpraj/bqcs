@extends('Csadmin.Layout.app')
@section ('content')
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Customers</a></li>
<li class="breadcrumb-item active" aria-current="page">Manage Customers</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Manage Customers</h4>
</div>
<div class="d-none d-md-block">
<a href="#modaladdcustomers" data-toggle="modal" class="btn btn-sm pd-x-15 btn-primary btn-uppercase  mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i>Add New Customers</h4></a>
</div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Customers Lists</h6>
<div class="d-flex tx-18">
<a href="" class="link-03 lh-0"><i class="icon ion-md-refresh"></i></a>
</div>
</div>
<div class="card-body">
@include('Csadmin.bulkaction', ['status' => 'FILTER_CUSTOMER'])

</div>
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
<th scope="col" style="text-align:center;width:10px;"><input type="checkbox" id="selectAll"></th>
<th scope="col" style="width:50px; text-align:center">S.No.</th>
<th scope="col" style="width:102px;">Date</th>
<th scope="col">Customer Details</th>
<th scope="col">Phone/Mobile</th>
<th scope="col">Email Id</th>
<th scope="col" style="text-align:center">Appointments</th>
<th scope="col" style="text-align:center">Action</th>
</tr>
</thead>
<tbody>
   <?php 
   $i=1;
   if(count($customerdata)>0){
    
   foreach($customerdata as $customers){?>
   
<tr>
<th scope="row" style="text-align:center"><input type="checkbox" id="selectAll" class="clsSelectSingle" name="customer_id[]" value="<?php echo $customers->customer_id ?>"></th>
<td style="text-align:center"><?php echo $i++;?></td>
<td><?php echo date("d M Y",strtotime($customers->created_at));?></td>
<td>
<div class="media align-items-center mg-b-0">
<div class="avatar"><img src="http://192.168.1.38/coachingzon/public/img/500.png" class="rounded" alt="" style="border:1px solid #ddd;"></div>
<div class="media-body pd-l-10">
<h6 class="mg-b-3" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width: 200px;"><a href=""><?php echo $customers->customer_fname." ".$customers->customer_lname;?></a></h6>
<span class="d-block tx-13 tx-color-03">Willetton@#6 Barricade Court, Willetton WA</span>
</div>
</div> 
</td>
<td><span class="tx-13"><?php echo $customers->customer_mobile;?></span></td>
<td><span class="tx-13"><?php echo $customers->customer_email;?></span></td>
<td style="text-align:center"><a href="#" class="badge badge-success" style="width:30px">1</a></td>
<td style="width:105px;">
<div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<a href="#" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<a href="{{route('customerDelete',$customers->customer_id )}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
</nav>
</div>
</td>
</tr> 
<?php }} ?>   
</tbody>
</table>
</div>
<div class="card-footer d-flex align-items-center justify-content-between" style="align-items: center;">
<span class="text-muted"><?php echo 'Showing '.$customerdata->firstItem().' to '.$customerdata->lastItem().' of '.$customerdata->total().' entries';?></span>
<ul class="pagination pagination-filled mg-b-0">{{ $customerdata->links() }}</ul>
</div>
</div>
</div>
</div>

</div>
</div>


@include('Csadmin.customermodal')


@endsection