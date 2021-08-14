
<?php $__env->startSection('content'); ?>
<?php
$ser = array();
foreach($services as $valuee){
    $ser[] = $valuee->role_name;
}
$serData = implode(" + ",$ser);

?>
<div id="appCapsule">
    <div class="section full mt-1">
        <div class="section-title">
            <div>
                <h5 class="fw700 tx-14" style="margin-bottom:5px"><?php echo e($serData); ?></h5>
                <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13"><?php echo e($rowAppointmentsData->customerAddress->customer_address); ?></span></div>
                <div class="flex-class"><span  class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13"><?php echo e(date("d M",strtotime($rowAppointmentsData->ca_date))); ?>, <?php echo e(date("D",strtotime($rowAppointmentsData->ca_date))); ?> <?php echo e($rowAppointmentsData->ca_time); ?>-<?php echo e($rowAppointmentsData->ca_end_time); ?></span></div>
            </div>
        </div>
        <form method="post" id="questionForm" action="<?php echo e(route('questionsSubmitRequest')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="qa_ca_id" value="<?php echo e($rowAppointmentsData->ca_id); ?>">
        <?php 
        $i=1;
        foreach($resQuestionDataa as $question)
        {
            $qusAns = DB::table('cs_ques_ans')
                    ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id]])
                    ->first();
            //print_r($qusAns);die;
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

        <!-------------------- Silver Package ------------------->
        <?php if($question->question_id==11){
          $quest_data= $resQuestionData->where('qa_question_id',11)->where('qa_type',3);
        ?>
        
            <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                            <li><a href="#">
                                <div class="imgbox">
                                    <img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>">

                              <!--- 3 for image --->
                                <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
                                </div>
                            </a>
                        </li>
                        <?php } ?>                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==12){
            ?>
            <!-----1--->
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5">Year</label>
                    <input type="text" class="form-control" name="qa_value[<?php echo $question->question_id?>][1][]" value="<?php echo isset($qusAns)?$qusAns->qa_value:''?>">
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==13){
              $quest_data= $resQuestionData->where('qa_question_id',13)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                     <!--- 3 for image --->
                                   <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li><a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>">

                           <!--- 3 for image --->
                           <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
                             
                        </div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==14){
              $quest_data= $resQuestionData->where('qa_question_id',14)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php 
                        foreach($quest_data as $img_name){?>
                        <li>
                        <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
     
                        <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==15){
              $quest_data= $resQuestionData->where('qa_question_id',15)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                          <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
                           <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>">
                            </div>
                        </a>
                         </li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==16){
              $quest_data= $resQuestionData->where('qa_question_id',16)->where('qa_type',3);
              ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                        <li>
                        <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
                            <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>">
                        </div></a></li>
                        <?php } ?> </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==17){
              $quest_data= $resQuestionData->where('qa_question_id',17)->where('qa_type',3);
             
             ?>
        <div class="wide-block pt-2 pb-2">
        <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name)
                        {
                            ?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">    
 <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
<?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==18){
              $quest_data= $resQuestionData->where('qa_question_id',18)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==19){
              $quest_data= $resQuestionData->where('qa_question_id',19)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==20){
              $quest_data= $resQuestionData->where('qa_question_id',20)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',20)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',20)->where('qa_type',"3__");



              $qusAns2 = DB::table('cs_ques_ans')
                    ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
                    ->first();
                    $qusAns3 = DB::table('cs_ques_ans')
                    ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
                    ->first();
             ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Deformed</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1001';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1001';?>',this,<?php echo $i.'1001';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1001';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1001';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1001';?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">            
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Cracked </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1002';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1002';?>',this,<?php echo $i.'1002';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1002';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1002';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1002';?>">
                        <?php foreach($quest_data2 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3_][]" value="<?php echo $img_name->qa_value;?>">        
    
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Sagging </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data3 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3__][]" value="<?php echo $img_name->qa_value;?>">        
                           
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>                               
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==21){
              $quest_data= $resQuestionData->where('qa_question_id',21)->where('qa_type',3);
              ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                        <ul>
                            <li>
                                <div class="wqtype-type">
                                <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                                <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                            </li>         
                        </ul>
                    </div>
                    <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                        <div class="col-12">
                            <div class="imgboxlist">
                                <ul id="showImage<?php echo $i;?>">
                                <?php foreach($quest_data as $img_name){?>
                                    
                                <li>
                                <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">            
                                <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                                <?php } ?>   </ul>
                            </div>
                        </div>
                    </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==22){?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <textarea rows="5" class="form-control" name="qa_value[<?php echo $question->question_id?>][1][]"><?php echo isset($qusAns)?$qusAns->qa_value:''?></textarea>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        
                        
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?> </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==23){
              $quest_data= $resQuestionData->where('qa_question_id',23)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                                
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
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                        <ul>
                            <li>
                                <div class="wqtype-type">
                                <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                                <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                            </li>         
                        </ul>
                    </div>
                    <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                        <div class="col-12">
                            <div class="imgboxlist">
                                <ul id="showImage<?php echo $i;?>">
                                <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                                <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                                --></ul>
                            </div>
                        </div>
                    </div>                             
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
                <!-------------------- Silver Package ------------------->



                <!-------------------- Gold Package ------------------->

                <?php if($question->question_id==42){?>
        
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==43){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5">Year</label>
                    <input type="text" class="form-control" name="qa_value[<?php echo $question->question_id?>][1][]" value="<?php echo isset($qusAns)?$qusAns->qa_value:''?>">
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==44){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==45){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==54){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==57){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==58){?>
        <div class="wide-block pt-2 pb-2">
        <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==61){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==65){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==67){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Deformed</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1001';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1001';?>',this,<?php echo $i.'1001';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1001';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1001';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1001';?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Cracked </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1002';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1002';?>',this,<?php echo $i.'1002';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1002';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1002';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1002';?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Sagging </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">N/A</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                               
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==68){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==69){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <textarea rows="5" class="form-control" name="qa_value[<?php echo $question->question_id?>][1][]"><?php echo isset($qusAns)?$qusAns->qa_value:''?></textarea>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==70){?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                                
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==71){?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                             
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==72){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==73){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
               
        </div>
        <?php }?>

        <?php if($question->question_id==74){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Pier type</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Timber</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Brick</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Cement</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Steel</option>

                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1001';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1001';?>',this,<?php echo $i.'1001';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1001';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1001';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1001';?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Ventilation</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1002';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1002';?>',this,<?php echo $i.'1002';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1002';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1002';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1002';?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Drainage</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                    <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>   
                    </li>         
                </ul>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Damp:</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1004';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1004';?>',this,<?php echo $i.'1004';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1004';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.'1004';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.'1004';?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>
       
       
        </div>
        <?php }?>


















        <?php if($question->question_id==75){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Not adequate</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==76){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==77){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==78){?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'selected="selected"':''?> value="1">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='2')?'selected="selected"':''?> value="2">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='3')?'selected="selected"':''?> value="3">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i;?>">
                        <!-- <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png" id="qa_image<?php echo $i;?>"></div></a></li>
                        <li><a href="#"><div class="imgbox"><img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png"></div></a></li>
                         --></ul>
                    </div>
                </div>
            </div>                              
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==79){?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                           
                </ul>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==80){?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                           
                </ul>
            </div>
        </div>
        <?php }?>








                <!-------------------- Gold Package ------------------->


        <div class="spacer"></div>
        <?php } ?>
        </form>
    </div>
</div>
<div class="appBottomMenu">
    <a href="javascript:;" class="btn btn-success btn-lg btn-block" onclick="return checkValidation($(this))" style="margin:10px;background: #333 !important;border-color: #333 !important;">Submit</a>
</div>
<script>var token = '<?php echo csrf_token(); ?>';</script>
<script>
    var base_url='<?php echo SITE_URL?>';
function checkValidation(obj)
{
    $('#questionForm').submit();
}
function imageOpen(obj,id)
{
    $("#fileChoose"+id).click();
}
function showPreviewsd(t, input, i) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
             //$('#'+t).attr('src',e.target.result);
             $('#imageDivHidden'+i).show();
             $('#showImage'+i).append('<li><a href="#"><div class="imgbox"><img src="'+e.target.result+'" ></div></a></li>');
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function showPreview(t, input, i,id) 
{
    if (input.files && input.files[0]) 
    {
        var form_data = new FormData();
        form_data.append('qa_image_',input.files[0]);
        form_data.append('_token',token);
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageDivHidden'+i).show();
                $('#showImage'+i).append('<li><a href="#"><div class="imgbox"><img src="'+e.target.result+'"></div></a></li>');
            };
            reader.readAsDataURL(input.files[0]);
            $.ajax({
                url: base_url+'uploadfiles/', // point to server-side PHP script 
                dataType: 'text',  
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                var jsondata = JSON.parse(php_script_response);
                if(jsondata.message=='ok')
                {

                    if(id==20)
                    {   

                         if(t=='qa_image111002')
                        {
                            $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3_][]" value="'+jsondata.url+'">');

                        }else if(t=='qa_image11')
                        {
                            $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3__][]" value="'+jsondata.url+'">');

                        }else{
                            $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3][]" value="'+jsondata.url+'">');
                   
                        }

                    }else{
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3][]" value="'+jsondata.url+'">');

                    }
                }else{
                    $('#image-error').removeClass('hide');
                }
                }
            });     
        
    }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/jobque.blade.php ENDPATH**/ ?>