
<?php if($question->question_id==46){
          $quest_data= $resQuestionData->where('qa_question_id',46)->where('qa_type',3);
        ?>
        
            <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image" multiple="multiple" id="fileChoose<?php echo $i."1";?>" hidden onchange="showPreview('qa_image<?php echo $i.'1';?>',this,<?php echo $i.'1';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i."1";?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i."1";?>">
                        <?php foreach($quest_data as $img_name){?>
                            <li><a href="#">
                                <div class="imgbox">
                                    <img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i."1";?>">

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
        <?php if($question->question_id==47){
        $quest_data= $resQuestionData->where('qa_question_id',47)->where('qa_type',3);
     
            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5">Year</label>
                    <input type="text" class="form-control" id="composition_disabled" name="qa_value[<?php echo $question->question_id?>][1][]" value="<?php echo isset($qusAns)?$qusAns->qa_value:''?>">
                
                    
                    </div>
            </div>
            <div class="wqtype-type">
                          <label class="container-checkbox"> 
                              <input onclick="checkstatus($(this))" type="checkbox" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=="0")?'checked="checked"':''?>>
                              Can't Determine
                              <span class="checkmark"></span>
                          </label>
                      </div>
        </div>
        <?php }?>
        <?php if($question->question_id==48){
        $quest_data= $resQuestionData->where('qa_question_id',48)->where('qa_type',3);
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==49){
        $quest_data= $resQuestionData->where('qa_question_id',49)->where('qa_type',3);
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==50){
              $quest_data= $resQuestionData->where('qa_question_id',50)->where('qa_type',3);

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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                          <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">
                           <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>">
                            </div>
                        </a>
                         </li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==51){
              $quest_data= $resQuestionData->where('qa_question_id',51)->where('qa_type',3);
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
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
        <?php if($question->question_id==52){
              $quest_data= $resQuestionData->where('qa_question_id',52)->where('qa_type',3);
             
             ?>
        <div class="wide-block pt-2 pb-2">
        <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name)
                        {
                            ?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">    
 <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
<?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==53){
              $quest_data= $resQuestionData->where('qa_question_id',53)->where('qa_type',3);
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==55){
              $quest_data= $resQuestionData->where('qa_question_id',55)->where('qa_type',3);
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==56){
              $quest_data= $resQuestionData->where('qa_question_id',56)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',56)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',56)->where('qa_type',"3__");



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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i.'1001';?>" hidden onchange="showPreview('qa_image<?php echo $i.$i.'1001';?>',this,<?php echo $i.$i.'1001';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i.'1001';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i.'2001';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i.'2001';?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">            
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i.'2002';?>" hidden onchange="showPreview('qa_image<?php echo $i.$i.'2002';?>',this,<?php echo $i.$i.'2002';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i.'2002';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i.'2002';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i.'2002';?>">
                        <?php foreach($quest_data2 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3_][]" value="<?php echo $img_name->qa_value;?>">        
    
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data3 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3__][]" value="<?php echo $img_name->qa_value;?>">        
                           
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div> 
        </div>      
        <?php }?>
        <?php if($question->question_id==59){
              $quest_data= $resQuestionData->where('qa_question_id',59)->where('qa_type',3);
              ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>

                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
                    <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                        <div class="col-12">
                            <div class="imgboxlist">
                                <ul id="showImage<?php echo $i.$i;?>">
                                <?php foreach($quest_data as $img_name){?>
                                    
                                <li>
                                <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">            
                                <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                                <?php } ?>  
								</ul>
                            </div>
                        </div>
                    </div>                              
                   
            </div>
        <?php }?>
        <?php if($question->question_id==60){
            
            $quest_data= $resQuestionData->where('qa_question_id',60)->where('qa_type',3);
            
            
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
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        
                        
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?> </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==62){
              $quest_data= $resQuestionData->where('qa_question_id',62)->where('qa_type',3);
              ?>
         <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                                
                    </li>         
                </ul>
            </div>
        </div>
        <?php }?>
        <?php if($question->question_id==63){
            $quest_data= $resQuestionData->where('qa_question_id',63)->where('qa_type',3);

            ?>
         <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                    <div class="wqtype">
                        <ul>
                            <li>
                                <div class="wqtype-type">
                                <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                                <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                            </li>         
                        </ul>
                    </div>
                    <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                        <div class="col-12">
                            <div class="imgboxlist">
                                <ul id="showImage<?php echo $i.$i;?>">
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






        <?php if($question->question_id==64){
        $quest_data= $resQuestionData->where('qa_question_id',64)->where('qa_type',3);

            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
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
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
                    
            </div>
       
        <?php }?>

        <?php if($question->question_id==66){
        $quest_data= $resQuestionData->where('qa_question_id',66)->where('qa_type',3);

            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
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
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
            </div>
               
       
        <?php }?>


        <?php if($question->question_id==83){
        $quest_data= $resQuestionData->where('qa_question_id',83)->where('qa_type',"5");
        $quest_data2= $resQuestionData->where('qa_question_id',83)->where('qa_type',"5_");
        $quest_data3= $resQuestionData->where('qa_question_id',83)->where('qa_type',"5__");
        $quest_data4= $resQuestionData->where('qa_question_id',83)->where('qa_type',"5___");



        $qusAns2 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
              ->first();
              $qusAns3 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
              ->first();
              $qusAns4 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
              ->first();

            //  print_r($qusAns2);

//              print_r($qusAns3);


       ?>
   <div class="wide-block pt-2 pb-2">
      <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Pier type</label>
              <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
              <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Timber')?'selected="selected"':''?> value="Timber">Timber</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Brick')?'selected="selected"':''?> value="Brick">Brick</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Cement')?'selected="selected"':''?> value="Cement">Cement</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Steel')?'selected="selected"':''?> value="Steel">Steel</option>
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
                   <input type="hidden" name="qa_value[<?php echo $question->question_id?>][5][]" value="<?php echo $img_name->qa_value;?>">            
                   <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                  <?php } ?>   </ul>
              </div>
          </div>
      </div>
       <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Ventilation</label>
              <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
              <option value="">Select</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns2) && $qusAns2->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>

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
                   <input type="hidden" name="qa_value[<?php echo $question->question_id?>][5_][]" value="<?php echo $img_name->qa_value;?>">        

                   <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                  <?php } ?>   </ul>
              </div>
          </div>
      </div>
       <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Drainage</label>
              <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
              <option value="">Select</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
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
                   <input type="hidden" name="qa_value[<?php echo $question->question_id?>][5__][]" value="<?php echo $img_name->qa_value;?>">        
                     
                   <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                  <?php } ?>   </ul>
              </div>
          </div>
      </div> 
     
  
      <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Damp:</label>
              <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1___][]">
              <option value="">Select</option>
                        <option <?php echo (isset($qusAns4) && $qusAns4->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns4) && $qusAns4->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
                        <option <?php echo (isset($qusAns3) && $qusAns3->qa_value=='N/A')?'selected="selected"':''?> value="N/A">N/A</option>

                    </select>
          </div>
      </div>
      <div class="wqtype">
          <ul>
              <li>
                  <div class="wqtype-type">
                  <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.'1003';?>" hidden onchange="showPreview('qa_image<?php echo $i.'1003';?>',this,<?php echo $i.'1003';?>,<?php echo $question->question_id?>)">
                  <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.'1003';?>)"></ion-icon>Add Pic</a></div>                                 
              </li>         
          </ul>
      </div>
      <div class="row" id="imageDivHidden<?php echo $i.'1003';?>" style="display:none'">
          <div class="col-12">
              <div class="imgboxlist">
                  <ul id="showImage<?php echo $i.'1003';?>">
                  <?php foreach($quest_data4 as $img_name){?>
                   <li>
                   <input type="hidden" name="qa_value[<?php echo $question->question_id?>][5___][]" value="<?php echo $img_name->qa_value;?>">        

                   <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                  <?php } ?>   </ul>
              </div>
          </div>
      </div>
      </div>  
             
        <?php }?>


        <?php if($question->question_id==84){
        $quest_data= $resQuestionData->where('qa_question_id',84)->where('qa_type',3);

            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Adequate')?'selected="selected"':''?> value="Adequate">Adequate</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Not adequate')?'selected="selected"':''?> value="Not adequate">Not adequate</option>
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
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">        

                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i;?>"></div></a></li>
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
        </div>
        <?php }?>
        <?php if($question->question_id==85){
        $quest_data= $resQuestionData->where('qa_question_id',85)->where('qa_type',3);
        ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
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
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
                
        </div>
        <?php }?>
        <?php if($question->question_id==86){
        $quest_data= $resQuestionData->where('qa_question_id',86)->where('qa_type',3);

            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
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
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
        </div>
        <?php }?>
        <?php if($question->question_id==87){
        $quest_data= $resQuestionData->where('qa_question_id',87)->where('qa_type',3);

            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
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
                        <?php } ?></ul>
                    </div>
                </div>
            </div>                              
        </div>
        <?php }?>
        <?php if($question->question_id==88){
        $quest_data= $resQuestionData->where('qa_question_id',88)->where('qa_type',3);
            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                           
                </ul>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==89){
        $quest_data= $resQuestionData->where('qa_question_id',88)->where('qa_type',3);
        ?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Spray 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="0" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Batt
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="1" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                           
                </ul>
            </div>
        </div>
        <?php }?>

<!-------------------shikha------------>



<?php if($question->question_id==90){
        $quest_data= $resQuestionData->where('qa_question_id',90)->where('qa_type',"5");
        $quest_data2= $resQuestionData->where('qa_question_id',90)->where('qa_type',"5_");
        $quest_data3= $resQuestionData->where('qa_question_id',90)->where('qa_type',"5__");
        $quest_data4= $resQuestionData->where('qa_question_id',90)->where('qa_type',"5___");



        $qusAns2 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
              ->first();
              $qusAns3 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
              ->first();
              $qusAns4 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
              ->first();

            //  print_r($qusAns2);

//              print_r($qusAns3);


       ?>
   <div class="wide-block pt-2 pb-2">
      <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Floor</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
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
     </div>     

	 <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Walls</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
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
		</div>
	 <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Ceilings</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
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
     </div> <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Windows</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
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
     </div>
  
      <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Doors</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
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
      </div>
      </div>  
       
   
        <?php }?>



        <?php if($question->question_id==91){
              $quest_data= $resQuestionData->where('qa_question_id',91)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',91)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',91)->where('qa_type',"3__");



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
                <label class="form-label">Paint</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i.'1001';?>" hidden onchange="showPreview('qa_image<?php echo $i.$i.'1001';?>',this,<?php echo $i.$i.'1001';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i.'1001';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i.'2001';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i.'2001';?>">
                        <?php foreach($quest_data as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3][]" value="<?php echo $img_name->qa_value;?>">            
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Cornices</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i.'2002';?>" hidden onchange="showPreview('qa_image<?php echo $i.$i.'2002';?>',this,<?php echo $i.$i.'2002';?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i.'2002';?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i.'2002';?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i.'2002';?>">
                        <?php foreach($quest_data2 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3_][]" value="<?php echo $img_name->qa_value;?>">        
    
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Skirting boards</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i.$i;?>" hidden onchange="showPreview('qa_image<?php echo $i.$i;?>',this,<?php echo $i.$i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i.$i;?>)"></ion-icon>Add Pic</a></div>                                 
                    </li>         
                </ul>
            </div>
            <div class="row" id="imageDivHidden<?php echo $i.$i;?>" style="display:none'">
                <div class="col-12">
                    <div class="imgboxlist">
                        <ul id="showImage<?php echo $i.$i;?>">
                        <?php foreach($quest_data3 as $img_name){?>
                         <li>
                         <input type="hidden" name="qa_value[<?php echo $question->question_id?>][3__][]" value="<?php echo $img_name->qa_value;?>">        
                           
                         <a href="#"><div class="imgbox"><img src="<?php echo $img_name->qa_value;?>" id="qa_image<?php echo $i.$i;?>"></div></a></li>
                        <?php } ?>   </ul>
                    </div>
                </div>
            </div> 
        </div>      
        <?php }?>
        
        <?php if($question->question_id==92){
              $quest_data= $resQuestionData->where('qa_question_id',92)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',92)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',92)->where('qa_type',"3__");



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
                <label class="form-label">Bench tops</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
             </div>
            
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Cupboards</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Sinks</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Taps</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Splashback </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
        </div> 
                 
        <?php }?>




        <?php if($question->question_id==93){
              $quest_data= $resQuestionData->where('qa_question_id',93)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',93)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',93)->where('qa_type',"3__");



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
                <label class="form-label">Tiling </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
             </div>
            
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Shower</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Vanity</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Ventilation </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Bath </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Toilet  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
        </div> 
                 
        <?php }?>


        <?php if($question->question_id==94){
              $quest_data= $resQuestionData->where('qa_question_id',94)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',94)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',94)->where('qa_type',"3__");



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
                <label class="form-label">Taps  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
             </div>
            
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Tubs</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Tiles </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Ventilation </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            
            
        </div> 
                 
        <?php }?>



        <?php if($question->question_id==95){
              $quest_data= $resQuestionData->where('qa_question_id',95)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',95)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',95)->where('qa_type',"3__");



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
                <label class="form-label">External cladding </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
             </div>
            
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Doors and Windows</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Patios attached to house </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>

            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Stand alone timber structures </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Stand alone steel structures </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Chimneys  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>

            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Stairs </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Balconies  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Decks  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Balustrades   </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1__][]">
                        <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
        </div> 
                 
        <?php }?>



        <?php if($question->question_id==96){
              $quest_data= $resQuestionData->where('qa_question_id',96)->where('qa_type',"3");
              $quest_data2= $resQuestionData->where('qa_question_id',96)->where('qa_type',"3_");
              $quest_data3= $resQuestionData->where('qa_question_id',96)->where('qa_type',"3__");



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
                <label class="form-label">Garages </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
             </div>
            
             <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Carports </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Sheds </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>

            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Retaining walls</label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Pathways </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Driveway   </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>

            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Steps  </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Fencing   </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                <label class="form-label">Drainage   </label>
                    <select class="form-control form-select" name="qa_value[<?php echo $question->question_id?>][1_][]">
                    <option value="">Select</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Above average')?'selected="selected"':''?> value="Above average">Above average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Average')?'selected="selected"':''?> value="Average">Average</option>
                        <option <?php echo (isset($qusAns) && $qusAns->qa_value=='Poor')?'selected="selected"':''?> value="Poor">Poor</option>
                    </select>
                </div>
            </div>
             
        </div> 
                 
        <?php }?>


        <?php if($question->question_id==97){
      
        $qusAns2 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
              ->first();
              $qusAns3 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
              ->first();
              $qusAns4 = DB::table('cs_ques_ans')
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
              ->first();

            //  print_r($qusAns2);

//              print_r($qusAns3);


       ?>
   <div class="wide-block pt-2 pb-2">
      <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Taps </label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    </ul>
                    
      </div>
 </div>
  </div>
        <div class="form-group boxed mb-1">
          <div class="input-wrapper">
          <label class="form-label">Drainage to waste drains</label>
          <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Yes 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">No 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                </ul>
            </div>
          </div>
      </div>


      </div>  
       


        <?php }?>



        <?php if($question->question_id==98){
      
      $qusAns2 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
            ->first();
            $qusAns3 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
            ->first();
            $qusAns4 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
            ->first();

          //  print_r($qusAns2);

//              print_r($qusAns3);


     ?>
 <div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Gas heater </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>
                  
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Kitchen cooktops</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
             </ul>
                  
    </div>
		</div>
	</div> </div>  </div>   
      <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Hot Water System</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
              </ul>
          </div>
        </div>
    </div>
   
     
</div>
         
      <?php }?>


      <?php if($question->question_id==99){
      
      $qusAns2 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
            ->first();
            $qusAns3 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
            ->first();
            $qusAns4 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
            ->first();

          //  print_r($qusAns2);

//              print_r($qusAns3);


     ?>
 <div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Bayonets </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  <li>
                  
    </div>
    
      <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Fireplace </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
              </ul>
          </div>
        </div>
    </div>
    </div>  
    </div>
        </div>    
</div>
      <?php }?>


      <?php if($question->question_id==100){
      
      $qusAns2 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
            ->first();
            $qusAns3 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
            ->first();
            $qusAns4 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
            ->first();

          //  print_r($qusAns2);

//              print_r($qusAns3);


     ?>
 <div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Smoke alarms </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  <li>
                  
    </div>
    
      <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">RCD to metrebox </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
              </ul>
          </div>
        </div>
    </div>
    </div>  
    </div>
        </div>    
</div>
      <?php }?>


      
      <?php if($question->question_id==101){
      
      $qusAns2 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
            ->first();
            $qusAns3 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
            ->first();
            $qusAns4 = DB::table('cs_ques_ans')
            ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1___']])
            ->first();

          //  print_r($qusAns2);

//              print_r($qusAns3);


     ?>
 <div class="wide-block pt-2 pb-2">
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Power points</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
      </ul>
          </div>
    </div>
            
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Lights </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>
            </div>
    </div>
          
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Oven </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>
              </div>
    </div>
        
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Dishwasher </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

            </div>
    </div>
          
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Rangehood </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>
    </div>
    </div>

                  
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Hotplate </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

             </div>
    </div>
         
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Airconditioning Unit</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

             </div>
    </div>
         
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Spa bath</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

              </div>
    </div>
        
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Ducted Vaccum</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

             </div>
    </div>
         
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Intercom </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

             </div>
    </div>
         
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Exhaust fans </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

             </div>
    </div>
         
    </div>
    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">3 in 1 fan/light/heater </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

        </div>
    </div>
              
    </div>

    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Automatic garage doors </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

        </div>             
    </div>
       </div>

    <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Automatic gates </label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
                  </ul>

                  
    </div>
    </div>
     </div> 
      <div class="form-group boxed mb-1">
        <div class="input-wrapper">
        <label class="form-label">Alfresco kitchen appliances</label>
        <div class="wqtype">
              <ul>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">Yes 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Yes" <?php echo (isset($qusAns) && $qusAns->qa_value=='0')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="wqtype-type">
                          <label class="container-radio">No 
                              <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="No" <?php echo (isset($qusAns) && $qusAns->qa_value=='1')?'checked="checked"':''?>>
                              <span class="checkmark"></span>
                          </label>
                      </div>
                  </li> 
              </ul>
          </div>
        </div>
    </div>
    </div>  
        <?php }?>
<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/diamond.blade.php ENDPATH**/ ?>