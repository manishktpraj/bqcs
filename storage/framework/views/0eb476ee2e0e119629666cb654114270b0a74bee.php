<?php if($question->question_id==102){
              $quest_data= $resQuestionData->where('qa_question_id',102)->where('qa_type',3);
              ?>
        
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
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



        <?php if($question->question_id==103){
              $quest_data= $resQuestionData->where('qa_question_id',103)->where('qa_type',3);
              ?>
        
        <div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
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















<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/termite_standard.blade.php ENDPATH**/ ?>