
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
                <h5 class="fw700 tx-14" style="margin-bottom:5px">Booking ID:<?php echo e($rowAppointmentsData->ca_id); ?> | <?php echo e($serData); ?></h5>
                <div class="flex-class mb-1"><span  class="tx-16 mr-5"><ion-icon name="location-outline" style="margin-top: 3px;"></ion-icon></span> <span  class="tx-13"><?php echo e(isset($rowAppointmentsData->customerAddress)?$rowAppointmentsData->customerAddress->customer_address:''); ?></span></div>
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
                    ->where([['qa_ca_id','=', $rowAppointmentsData->ca_id],['qa_tech_id','=', $technicianId],['qa_question_id','=', $question->question_id]])
                    ->first();
            //print_r($qusAns);die;
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

      
<!-------------------- Silver Package ------------------->
 <?php echo $__env->make('silver', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-------------------- Silver Package ------------------->

<!-------------------- Gold Package ------------------->
<?php echo $__env->make('gold', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-------------------- Gold Package ------------------->

<!----------------------------------- Diamond Package  ----------------------------->
<?php echo $__env->make('diamond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!----------------------------------- Diamond Package  ----------------------------->

<!---------------------------------- Termite Package  ----------------------------->
<?php echo $__env->make('termite_standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!----------------------------------- Termite Package  ----------------------------->




        <div class="spacer"></div>
        <?php } ?>
        </form>
    </div>
</div>
<div style="height: 100px;"></div>
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