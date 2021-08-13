
<?php $__env->startSection('content'); ?>
<?php
$ser = array();
foreach($services as $valuee){
    $ser[] = $valuee->role_name;
}
$serData = implode(" + ",$ser);?>
<div id="appCapsule">
    <div class="section full mt-1">
        <div class="section-title">
            <div>
                <h5 class="fw700 tx-14" style="margin-bottom:5px"><?php echo e($serData); ?></h5>
                <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13"><?php echo e($rowAppointmentsData->customerAddress->customer_address); ?></span></div>
                <div class="flex-class"><span  class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13"><?php echo e(date("d M",strtotime($rowAppointmentsData->ca_date))); ?>, <?php echo e(date("D",strtotime($rowAppointmentsData->ca_date))); ?> <?php echo e($rowAppointmentsData->ca_time); ?>-<?php echo e($rowAppointmentsData->ca_end_time); ?></span></div>
            </div>
        </div>
<?php 
$i=1;
foreach($resQuestionDataa as $question)
{
?>
<div class="lisbox">
<ul>
<li>
<a href="#">
<span class="snumber"><?php echo $i++;?></span>
<span class="sname"><?php echo $question->question_name;?> <?php echo $question->question_id?></span>
<ion-icon name="chevron-down-outline" class="ml-auto tx-18"></ion-icon>
</a>
</li>
</ul>
</div>
<?php if($question->question_id==11){?>
<div class="wide-block pt-2 pb-2">
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
    <div class="row" style="">
        <div class="col-12">
            <div class="imgboxlist">
                <ul>
                <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php if($question->question_id==12){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <label class="form-label" for="address5">Year</label>
            <input type="text" class="form-control">
             
        </div>
    </div>
</div>
<?php }?>
<?php if($question->question_id==13){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==14){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==15){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==16){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==17){?>
<div class="wide-block pt-2 pb-2">
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==18){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==19){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==20){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Deformed</label>
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Cracked </label>
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Sagging </label>
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Present</option>
                <option value="0">Not Present</option>
                <option value="0">N/A</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==21){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <select class="form-control form-select">
                <option value="0">Select</option>
                <option value="0">Adequate</option>
                <option value="0">Not adequate</option>
            </select>
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==22){?>
<div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
            <textarea rows="5" class="form-control"></textarea>
             
        </div>
    </div>
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==23){?>
<div class="wide-block pt-2 pb-2">
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                    <label class="container-radio">Yes 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="wqtype-type">
                    <label class="container-radio">No 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li> 
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>
<?php if($question->question_id==24){?>
<div class="wide-block pt-2 pb-2">
    <div class="wqtype">
        <ul>
            <li>
                <div class="wqtype-type">
                    <label class="container-radio">Yes 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="wqtype-type">
                    <label class="container-radio">No 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li> 
            <li>
                <div class="wqtype-type">
                <a href="#"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
            </li>         
        </ul>
    </div>
</div>
<?php }?>

<div class="spacer"></div>

<?php } ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/jobque.blade.php ENDPATH**/ ?>