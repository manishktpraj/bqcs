<?php if($question->question_id==42){
                $quest_data= $resQuestionData->where('qa_question_id',42)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
                                ?>
        
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==43){
        $quest_data= $resQuestionData->where('qa_question_id',43)->where('qa_tech_id','=',$technicianId)->where('qa_type',"1__")->first();
     
            ?>
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5">Year</label>
                    <input type="text" class="form-control" id="composition_disabled" name="qa_value[<?php echo $question->question_id?>][1][]" value="<?php echo isset($qusAns)?$qusAns->qa_value:''?>" <?php echo (isset($quest_data) && $quest_data['qa_value']=="Can't Determine")?' style="background:#f5f5f5" readonly="readonly"':''?>> 
                
                    
                    </div>
            </div>
            <div class="wqtype-type">
                          <label class="container-checkbox"> 
                          <input onclick="checkstatus($(this))" type="checkbox" name="qa_value[<?php echo $question->question_id?>][1__][]" value="Can't Determine" <?php echo (isset($quest_data) && $quest_data['qa_value']=="Can't Determine")?'checked="checked"':''?>  >
                              Can't Determine
                              <span class="checkmark"></span>
                          </label>
                      </div>
        </div>
        <?php }?>
        <?php if($question->question_id==44){
        $quest_data= $resQuestionData->where('qa_question_id',44)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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

        <?php if($question->question_id==45){
        $quest_data= $resQuestionData->where('qa_question_id',45)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==54){
        $quest_data= $resQuestionData->where('qa_question_id',54)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==57){
        $quest_data= $resQuestionData->where('qa_question_id',57)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==58){
        $quest_data= $resQuestionData->where('qa_question_id',58)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
        ?>
        <div class="wide-block pt-2 pb-2">
        <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                        <input type="file" name="qa_image_[]" multiple="multiple" id="fileChoose<?php echo $i;?>" hidden onchange="showPreview('qa_image<?php echo $i;?>',this,<?php echo $i;?>,<?php echo $question->question_id?>)">
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==61){
        $quest_data= $resQuestionData->where('qa_question_id',61)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==65){
        $quest_data= $resQuestionData->where('qa_question_id',65)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;"  onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==67){
         $quest_data= $resQuestionData->where('qa_question_id',67)->where('qa_tech_id','=',$technicianId)->where('qa_type',"4");
         $quest_data2= $resQuestionData->where('qa_question_id',67)->where('qa_tech_id','=',$technicianId)->where('qa_type',"4_");
         $quest_data3= $resQuestionData->where('qa_question_id',67)->where('qa_tech_id','=',$technicianId)->where('qa_type',"4__");



         $qusAns2 = DB::table('cs_ques_ans')->where('qa_tech_id','=',$technicianId)
               ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
               ->first();
               $qusAns3 = DB::table('cs_ques_ans')->where('qa_tech_id','=',$technicianId)
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
                   <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i.'1001';?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
               </li>         
           </ul>
       </div>
       <div class="row" id="imageDivHidden<?php echo $i.'1001';?>" style="display:none'">
           <div class="col-12">
               <div class="imgboxlist">
                   <ul id="showImage<?php echo $i.'1001';?>">
                   <?php foreach($quest_data as $img_name){?>
                    <li>
                    <input type="hidden" name="qa_value[<?php echo $question->question_id?>][4][]" value="<?php echo $img_name->qa_value;?>">            
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
                   <a href="javascript:;"  onclick="imageOpen($(this),<?php echo $i.'1002';?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
               </li>         
           </ul>
       </div>
       <div class="row" id="imageDivHidden<?php echo $i.'1002';?>" style="display:none'">
           <div class="col-12">
               <div class="imgboxlist">
                   <ul id="showImage<?php echo $i.'1002';?>">
                   <?php foreach($quest_data2 as $img_name){?>
                    <li>
                    <input type="hidden" name="qa_value[<?php echo $question->question_id?>][4_][]" value="<?php echo $img_name->qa_value;?>">        

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
                   <a href="javascript:;"  onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
               </li>         
           </ul>
       </div>
       <div class="row" id="imageDivHidden<?php echo $i;?>" style="display:none'">
           <div class="col-12">
               <div class="imgboxlist">
                   <ul id="showImage<?php echo $i;?>">
                   <?php foreach($quest_data3 as $img_name){?>
                    <li>
                    <input type="hidden" name="qa_value[<?php echo $question->question_id?>][4__][]" value="<?php echo $img_name->qa_value;?>">        
                      
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
        <?php if($question->question_id==68){
        $quest_data= $resQuestionData->where('qa_question_id',68)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
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
        </div>
        <?php }?>
        <?php if($question->question_id==69){
        $quest_data= $resQuestionData->where('qa_question_id',69)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==70){
        $quest_data= $resQuestionData->where('qa_question_id',70)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
//print_r($qusAns);

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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==71){
        $quest_data= $resQuestionData->where('qa_question_id',71)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==72){
        $quest_data= $resQuestionData->where('qa_question_id',72)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;"onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        </div>
        <?php }?>

        <?php if($question->question_id==73){
        $quest_data= $resQuestionData->where('qa_question_id',73)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;"  onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
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
               
        </div>
        <?php }?>


        <?php if($question->question_id==74){
        $quest_data= $resQuestionData->where('qa_question_id',74)->where('qa_tech_id','=',$technicianId)->where('qa_type',"5");
        $quest_data2= $resQuestionData->where('qa_question_id',74)->where('qa_tech_id','=',$technicianId)->where('qa_type',"5_");
        $quest_data3= $resQuestionData->where('qa_question_id',74)->where('qa_tech_id','=',$technicianId)->where('qa_type',"5__");
        $quest_data4= $resQuestionData->where('qa_question_id',74)->where('qa_tech_id','=',$technicianId)->where('qa_type',"5___");



        $qusAns2 = DB::table('cs_ques_ans')->where('qa_tech_id','=',$technicianId)
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1_']])
              ->first();
              $qusAns3 = DB::table('cs_ques_ans')->where('qa_tech_id','=',$technicianId)
              ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_question_id','=', $question->question_id],['qa_type','=','1__']])
              ->first();
              $qusAns4 = DB::table('cs_ques_ans')->where('qa_tech_id','=',$technicianId)
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
                  <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i.'1001';?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
                  <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i.'1002';?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
                  <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
                  <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i.'1003';?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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


        <?php if($question->question_id==75){
        $quest_data= $resQuestionData->where('qa_question_id',75)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" onclick="imageOpen($(this),<?php echo $i;?>)"></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==76){
        $quest_data= $resQuestionData->where('qa_question_id',76)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                        <a href="javascript:;"  onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24"></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==77){
        $quest_data= $resQuestionData->where('qa_question_id',77)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==78){
        $quest_data= $resQuestionData->where('qa_question_id',78)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);

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
                        <a href="javascript:;" onclick="imageOpen($(this),<?php echo $i;?>)"><ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic</a></div>                                 
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
        <?php if($question->question_id==79){
        $quest_data= $resQuestionData->where('qa_question_id',79)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
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
                           
                </ul>
            </div>
        </div>
        <?php }?>

        <?php if($question->question_id==80){
        $quest_data= $resQuestionData->where('qa_question_id',80)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
        ?>
        <div class="wide-block pt-2 pb-2">
            <div class="wqtype">
                <ul>
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Spray 
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Spray" <?php echo (isset($qusAns) && $qusAns->qa_value=='Spray')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                    <li>
                        <div class="wqtype-type">
                            <label class="container-radio">Batt
                                <input type="radio" name="qa_value[<?php echo $question->question_id?>][1][]" value="Batt" <?php echo (isset($qusAns) && $qusAns->qa_value=='Batt')?'checked="checked"':''?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li> 
                           
                </ul>
            </div>
        </div>
        <?php }?>

<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/gold.blade.php ENDPATH**/ ?>