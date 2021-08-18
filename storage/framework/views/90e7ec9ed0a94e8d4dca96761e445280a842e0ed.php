  <!-------------------- Silver Package ------------------->
  <?php if($question->question_id==11){
          $quest_data= $resQuestionData->where('qa_question_id',11)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                            <li>
                                <a href="#">
                                <div class="imgbox">
                                    <img src="<?php echo $img_name->qa_value;?>"  id="qa_image<?php echo $i;?>">
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
                    <input type="text" class="form-control" id="composition_disabled" name="qa_value[<?php echo $question->question_id?>][1][]" value="<?php echo isset($qusAns)?$qusAns->qa_value:''?>" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'disabled="disabled"':''?>>

                    
                </div>
            </div>
            <div class="wqtype-type">
                          <label class="container-checkbox"> 
                              <input onclick="checkstatus($(this))" type="checkbox" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              Can't Determine
                              <span class="checkmark"></span>
                          </label>
                      </div>
        </div>
        <?php }?>
        <?php if($question->question_id==13){
              $quest_data= $resQuestionData->where('qa_question_id',13)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',14)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',15)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',16)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',17)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
             
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
 <a href="#">
     <div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>">
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
        <?php if($question->question_id==18){
              $quest_data= $resQuestionData->where('qa_question_id',18)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',19)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
              $quest_data= $resQuestionData->where('qa_question_id',20)->where('qa_tech_id','=',$technicianId)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',20)->where('qa_tech_id','=',$technicianId)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',20)->where('qa_tech_id','=',$technicianId)->where('qa_type',"3__");



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
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='Present')?'selected="selected"':''?> value="Present">Present</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='Not Present')?'selected="selected"':''?> value="Not Present">Not Present</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
                        <?php foreach($quest_data3 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3__][]" value="<?php echo $img_name->qa_value;?>">        
                           
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div> 
        </div>      
        <?php }?>
        <?php if($question->question_id==21){
              $quest_data= $resQuestionData->where('qa_question_id',21)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>
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
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==22){
            
            $quest_data= $resQuestionData->where('qa_question_id',22)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
            
            
            ?>
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
              $quest_data= $resQuestionData->where('qa_question_id',23)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='Yes')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='No')?'checked="checked"':''?>>
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
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                                
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==24){
            $quest_data= $resQuestionData->where('qa_question_id',24)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='Yes')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='No')?'checked="checked"':''?>>
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
                                <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?></ul>
                            </div>
                        </div>
                    </div>                             
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>


<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/silver.blade.php ENDPATH**/ ?>