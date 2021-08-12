
<?php $__env->startSection('content'); ?>
<div class="content-body">
<div class="container pd-x-0">
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
<div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item"><a href="#">Questions</a></li>
<li class="breadcrumb-item active" aria-current="page">Add New Questions</li>
</ol>
</nav>
<h4 class="mg-b-0 tx-spacing--1">Add New Questions</h4>
</div>
<div class="d-none d-md-block">
 </div>
</div>
<div class="row row-xs">
<div class="col-lg-12">
<div class="card mg-b-15">
<div class="card-header d-flex align-items-center justify-content-between">
<h6 class="mg-b-0" style="font-size: 1rem;font-weight: 600;">Add New Questions</h6>
</div>
<form method="post" action="<?php echo e(route('questionproccess')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="hidden" name="question_id" value="<?php echo isset($rowCategoryData->question_id)?$rowCategoryData->question_id:'0'?>">
<input type="hidden" name="service_id" value="<?php echo isset($service_id)?$service_id:'0'?>">

<div class="card-body">
<div class="form-group">
<label>Question Name / Title: <span style="color:red">*</span></label>
<input type="text" class="form-control" name="question_name" required="" value="<?php echo isset($rowCategoryData->question_name)?$rowCategoryData->question_name:''?>">
<span class="tx-color-03" style="font-size: 11px;">This name is appears on your site</span>
</div>
<div class="form-group">
<label>Question Type:</label>
<select class="form-control select2" multiple="multiple" name="question_type" id="que_type" >
<option value="0">Select Question Type</option>
<option value="1">Text</option>
<option value="2">Image</option>
<option value="3">Textarea</option>
<option value="4">Dropdown</option>
</select>
</div> 
<div class="form-group" id="option">
<label>Option:</label>
<textarea class="form-control" rows="2" name="question_option"><?php echo isset($rowCategoryData->question_name)?$rowCategoryData->question_name:''; ?></textarea>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Csadmin.Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Question/addNewQuestion.blade.php ENDPATH**/ ?>