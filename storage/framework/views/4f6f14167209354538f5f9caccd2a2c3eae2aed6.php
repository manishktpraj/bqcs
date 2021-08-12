
<?php $__env->startSection('content'); ?>
<div id="appCapsule">
<div class="section full mt-1">
<div class="section-title">
<div>
<h5 class="fw700 tx-14" style="margin-bottom:5px">Job ID: 3939 | Silver Package + Standard Termite</h5>
<div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13">22 Farnley Street, Mount Lawley WA</span></div>
<div class="flex-class"><span  class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13">12 Aug, Thu 11:00-15:00PM</span></div>

</div>
</div>
<?php 
$i=1;
foreach($resQuestionData as $question){?>
<div class="lisbox">
<ul>


<li>
<a href="#">
<span class="snumber"><?php echo $i++;?></span>
<span class="sname"><?php echo $question->question_name;?></span>
<ion-icon name="chevron-down-outline" class="ml-auto tx-18"></ion-icon>
</a>
</li>
<div class="wide-block pt-2 pb-2">
<div class="form-group boxed">
<div class="input-wrapper">
<label class="form-label">Select</label>
<select class="form-control form-select">
<option value="0">Select</option>
<option value="1">Present</option>
<option value="2">Not Present</option>
<option value="3">N/A</option>
</select>
</div>
</div>
<div class="wqtype">
<ul>
<li>
<div class="wqtype-type">
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
<label class="form-check-label" for="inlineCheckbox1"></label>
</div>
Yes 
</div>                                 
</li>
<li>
<div class="wqtype-type">
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
<label class="form-check-label" for="inlineCheckbox1"></label>
</div>
No 
</div>                                 
</li>
<li>
<div class="wqtype-type">
<a href="#">
<ion-icon name="camera-outline" class="tx-24"></ion-icon>
Add Pic 
</a>
</div>                                 
</li>
<li>
<div class="wqtype-type">
<a href="#">
<ion-icon name="create-outline" class="tx-24"></ion-icon>
Add Comment
</a>
</div>                                 
</li>
</ul>
</div>
<div class="form-group boxed mb-1">
                        <div class="input-wrapper">
                            <label class="form-label" for="address5">Comment</label>
                            <textarea id="address5" rows="2" class="form-control"></textarea>
                            <i class="clear-input">
                                <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                            </i>
                        </div>
                    </div>
<div class="row">
<div class="col-12">
<div class="imgboxlist">
<ul>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="spacer"></div>
</ul>
</div>
<?php } ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/jobque.blade.php ENDPATH**/ ?>