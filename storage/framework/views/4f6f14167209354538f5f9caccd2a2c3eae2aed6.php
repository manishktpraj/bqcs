
<?php $__env->startSection('content'); ?>
<style>
.selectedimagebox
{
 }
.selectedimagebox .remove-img
{
    display:none;
}
.selectedimagebox .tick-img
{
    display:block !important;
}
.tick-img
{
    background:green;
    border-radius:50%;
}
.tick-img {
    position: absolute;
    top: -7px;
    right: -7px;
     z-index: 99999;
    color: green;
    background: #fff;
    border-radius: 50%;
    line-height: 0;
    font-size: 20px;
}
</style>
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
                <h5 class="fw700 tx-14" style="margin-bottom:5px">Booking ID:<?php echo e($rowAppointmentsData->ca_id); ?> | <?php echo e($serData); ?></h5>
                <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13"><?php echo e(isset($rowAppointmentsData->customerAddress)?$rowAppointmentsData->customerAddress->customer_address:''); ?></span></div>
                <div class="flex-class"><span  class="tx-16 mr-5"><ion-icon name="calendar-clear-outline"></ion-icon></span> <span  class="tx-13"><?php echo e(date("d M",strtotime($rowAppointmentsData->ca_date))); ?>, <?php echo e(date("D",strtotime($rowAppointmentsData->ca_date))); ?> <?php echo e($rowAppointmentsData->ca_time); ?>-<?php echo e($rowAppointmentsData->ca_end_time); ?></span></div>
            </div>
        </div>
        <input type="file" name="qa_image" multiple="multiple" id="fileChoose" hidden onchange="showPreviewNew(this)">

        <form method="post" id="questionForm" action="<?php echo e(route('questionsSubmitRequest')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>  
        <input type="hidden" name="qa_ca_id" value="<?php echo e($rowAppointmentsData->ca_id); ?>">
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
                        <span class="sname"><?php echo $question->question_name;?> <?php echo $question->question_id;?></span>
                        <ion-icon name="chevron-down-outline" class="ml-auto tx-18"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>

      

<?php foreach($question->questionmultiple as $data)
{  
    
    $qusAnssss = DB::table('cs_ques_ans')
    ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_tech_id','=', $technicianId],['qa_question_id','=', $data->qm_question_id],['qa_type',$data->qm_slug]])->get(); 
 
     ?>
    
<?php   if($data->qm_type==2)
{
     $quest_data =array();
?>
<div class="wide-block pt-2 pb-2">
<div class="wqtype">
<ul>
<li>
<div class="wqtype-type">
<a href="javascript:;" onclick="imageopennew('<?php echo $data->qm_slug;?>',<?php echo $data->qm_question_id;?>)">
    <ion-icon name="camera-outline" class="tx-24" ></ion-icon>Add Pic
</a>
</div>                                 
</li>         
</ul>
</div>
<div class="row" id="imageDivHidden<?php echo $data->qm_slug;?><?php echo $data->qm_question_id;?>" style="display:none'">
<div class="col-12">
<div class="imgboxlist">
    <ul id="showImage<?php echo $data->qm_slug;?><?php echo $data->qm_question_id;?>">
    <?php foreach( $qusAnssss as $img_name){
      ?>
      <li>
      <?php if($type==0)
{ ?>
        <a href="#" class="remove-img"  data-val="<?php echo $data->qm_slug;?>"><ion-icon name="add-circle"></ion-icon></a>
        <?php } ?> 
        <a href="#" class="tick-img"  style="display:none" data-val="<?php echo $data->qm_slug;?>"><ion-icon name="checkmark-circle" ></ion-icon></a>
      <div class="imgbox" data-id="<?php echo $img_name->qa_id;?>"> 
        <img src="<?php echo $img_name->qa_value;?>"  id="qa_image<?php echo $data->qm_slug;?>">
        <input type="hidden" name="qa_value[<?php echo $question->question_id?>][<?php echo $data->qm_slug;?>][]" value="<?php echo $img_name->qa_value;?>">
        </div>
    </li>
    <?php } ?>                         
    </ul>
</div>
</div>
</div>
</div>
<?php } ?>

<?php   if($data->qm_type==1)
{
 ?>
<div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5"><?php echo $data->qm_label;?></label>
                    <input type="text" class="form-control" name="qa_value[<?php echo $data->qm_question_id;?>][<?php echo $data->qm_slug;?>]" 
                    value="<?php echo isset($qusAnssss[0]->qa_value)?$qusAnssss[0]->qa_value:''; ?>"> 

                    
                </div>
            </div>
          
        </div>
 <?php  }  ?>

 <?php   if($data->qm_type==3)
{
 ?>
<div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5"><?php echo $data->qm_label;?></label>
                    <textarea class="form-control" name="qa_value[<?php echo $data->qm_question_id;?>][<?php echo $data->qm_slug;?>]" 
                    value=""><?php echo isset($qusAnssss[0]->qa_value)?$qusAnssss[0]->qa_value:''; ?></textarea>

                    
                </div>
            </div>
          
        </div>
 <?php  }  ?>

 <?php   if($data->qm_type==4)
{

    $strExplode = explode(',',$data->qm_option);
 ?>
<div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="input-wrapper">
                    <label class="form-label" for="address5"><?php echo $data->qm_label;?></label>
                    <select class="form-control form-select" name="qa_value[<?php echo $data->qm_question_id;?>][<?php echo $data->qm_slug;?>]">
                        <option value="">Select</option>
                        <?php foreach($strExplode as $key=>$label)
                        { ?>
                        <option <?php echo (isset($qusAnssss[0]->qa_value) && $qusAnssss[0]->qa_value==$label)?'selected':''; ?> value="<?php echo $label;?>"><?php echo $label;?></option>
                        <?php } ?>
                       
                    </select>

                    
                </div>
            </div>
          
        </div>
 <?php  }  ?>


 <?php   if($data->qm_type==5)
{

    $strExplode = explode(',',$data->qm_option);
 ?>
<div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="wqtype">
                      
                    <ul>
                   
                          
              
                
                <?php foreach($strExplode as $key=>$label)
                        { ?>
                         <li>
                        <div class="wqtype-type">
                            <label class="container-checkbox"><?php echo $label;?> 
                                <input type="checkbox" <?php echo (isset($qusAnssss[0]->qa_value) && $qusAnssss[0]->qa_value==$label)?'checked':''; ?> name="qa_value[<?php echo $data->qm_question_id;?>][<?php echo $data->qm_slug;?>][]" value="<?php echo $label;?>">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                         <?php } ?>
                       
                        </ul>

                    
                </div>
            </div>
          
        </div>
 <?php  }  ?>

 <?php   if($data->qm_type==6)
{

    $strExplode = explode(',',$data->qm_option);
 ?>
<div class="wide-block pt-2 pb-2">
            <div class="form-group boxed mb-1">
                <div class="wqtype">
                      
                    <ul>
                   
                          
              
                
                <?php foreach($strExplode as $key=>$label)
                        { ?>
                         <li>
                        <div class="wqtype-type">
                            <label class="container-radio"><?php echo $label;?> 
                                <input type="radio" <?php echo (isset($qusAnssss[0]->qa_value) && $qusAnssss[0]->qa_value==$label)?'checked':''; ?>  name="qa_value[<?php echo $data->qm_question_id;?>][<?php echo $data->qm_slug;?>][]" value="<?php echo $label;?>">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </li>
                         <?php } ?>
                       
                        </ul>

                    
                </div>
            </div>
          
        </div>
 <?php  }  ?>

<?php } ?>




        <div class="spacer"></div>
        <?php } ?>

        
        </form>
    </div>
</div>
<div style="height: 100px;"></div>
<div class="appBottomMenu">
    
<?php if($type==0)
{ ?>
<a href="javascript:;" class="btn btn-success btn-lg btn-block" onclick="return checkValidation($(this))" style="margin:10px;background: #333 !important;border-color: #333 !important;">Submit</a>
<?php }else{ ?> 
<a href="javascript:;" class="btn btn-success btn-lg btn-block" onclick="return checkValidationfrpdfgenerate($(this))" style="margin:10px;background: #333 !important;border-color: #333 !important;">Generate Report</a>
<?php } ?> 

</div>
<script>var token = '<?php echo csrf_token(); ?>';</script>

<!---------------New Scripts  --------------------->
<script>
  var currentid = '';  
  var questionidnew ='';
  var slugnew ='';

function imageopennew(slug,questionid)
{
    $("#fileChoose").click();
    currentid = slug+''+questionid;
    questionidnew = questionid;
    slugnew  = slug;
}

function showPreviewNew(input) 
{
    if (input.files && input.files[0]) 
    {
        var form_data = new FormData();
        form_data.append('qa_image_',input.files[0]);
        form_data.append('_token',token);
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imageDivHidden'+currentid).show();
            $('#showImage'+currentid).append('<li><a href="#" class="remove-img"><ion-icon name="add-circle"></ion-icon></a><div class="imgbox"><img src="'+e.target.result+'"></div></li>');
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

                    $('#showImage'+currentid).append('<input type="hidden" name="qa_value['+questionidnew+']['+slugnew+'][]" value="'+jsondata.url+'">');

            }else{
                $('#image-error').removeClass('hide');
            }
            }
        });     
    }
}

function checkValidation(obj)
{
    $('#questionForm').submit();
}

function checkValidationfrpdfgenerate(obj)
{
    $('#questionForm').submit();
}
</script>
















<!---------------New Scripts  --------------------->
<!---------------OLD Scripts  --------------------->



<script>
    var base_url='<?php echo SITE_URL?>';

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
            $('#showImage'+i).append('<li><a href="#" class="remove-img"><ion-icon name="add-circle"></ion-icon></a><div class="imgbox"><img src="'+e.target.result+'"></div></li>');
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
                }else  if(id==56)
                {   
                    if(t=='qa_image112002')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3_][]" value="'+jsondata.url+'">');
                    }else if(t=='qa_image11')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3__][]" value="'+jsondata.url+'">');
                    }else{
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3][]" value="'+jsondata.url+'">');
                    }
                }else if(id==67)
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
                }else  if(id==74)
                {   if(t=='qa_image181003')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3___][]" value="'+jsondata.url+'">');
                    }else if(t=='qa_image181002')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3_][]" value="'+jsondata.url+'">');
                    }else if(t=='qa_image18')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3__][]" value="'+jsondata.url+'">');
                    }else{
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3][]" value="'+jsondata.url+'">');
                    }
                }else if(id==83)
                {   if(t=='qa_image181003')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3___][]" value="'+jsondata.url+'">');
                    }else if(t=='qa_image181002')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3_][]" value="'+jsondata.url+'">');
                    }else if(t=='qa_image18')
                    {
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3__][]" value="'+jsondata.url+'">');
                    }else{
                        $('#showImage'+i).append('<input type="hidden" name="qa_value['+id+'][3][]" value="'+jsondata.url+'">');
                    }
                } else  if(id==91)
                {   
                    if(t=='qa_image262002')
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

function checkstatus(obj)
{

 if(obj.prop("checked"))
{
    $('#composition_disabled').val("");
  $('#composition_disabled').attr("style",'background:#f5f5f5');
$('#composition_disabled').attr("readonly",true);
}else{
    $('#composition_disabled').val("");
  $('#composition_disabled').attr("style",'background:#fff');
$('#composition_disabled').attr("readonly",false);
}

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".remove-img").click(function(){

var id =  $(this).data('val');

var datastring = 'ques_id='+id+'&_token='+token;
$(this).parents('li').remove();
$.post(base_url+"deleteimg", datastring,function(response){
  //  $(this).parents('li').remove();      

});

});
});
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/jobque.blade.php ENDPATH**/ ?>