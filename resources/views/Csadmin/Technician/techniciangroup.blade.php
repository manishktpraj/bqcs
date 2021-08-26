@extends('Csadmin.Layout.app')
@section ('content')
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
@csrf
<input type="hidden" name="group_id" value="<?php echo isset($resTechId->group_id)?$resTechId->group_id:'0'?>">
<div class="card-body">
<div class="form-group">
<label>Group Name / Title: <span style="color:red">*</span></label>
<input type="text" class="form-control" name="group_name" required="" value="<?php echo isset($resTechId->group_name)?$resTechId->group_name:''?>">
<span class="tx-color-03" style="font-size: 11px;">This name is appears on your site</span>
</div>
<div class="form-group">
<select class="form-control select2 " name="ca_service_parent[]" id="test" multiple="multiple" >
<?php foreach($resfacultyData as $value){?>
<option value="<?php  echo $value->faculty_id;?>"><?php echo $value->faculty_first_name." ".$value->faculty_last_name; ?></option>
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
@include('Csadmin.bulkaction', ['status' => 'FILTER_GROUP'])
</div>
<div class="table-responsive">
<table class="table mg-b-0">
<thead>
<tr>
<th style="width:5%;text-align:center;width:10px;"><input type="checkbox" id="selectAll" style="vertical-align: middle;"></th>
<th scope="col" style="width:400px;">Group Name</th>
 <th scope="col" style="text-align:center; width:100px">Action</th>
</tr>
</thead>
<tbody>
<?php foreach($resTech as $rowTech)
{ ?>
<tr>
<td><input type="checkbox"></td>
<td><?php echo $rowTech->group_name; ?></td>
  
<td>
<div class="d-flex align-self-center justify-content-center">
<nav class="nav nav-icon-only">
<a href="{{route('technician-group',$rowTech->group_id )}}" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
<a href="{{route('techniciangroupDelete',$rowTech->group_id )}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
</nav>
</div>

</td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection
