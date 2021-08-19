<?php $technicianId = Session::get("ADMIN")->faculty_id;?>
<style>
table{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}
th{padding:10px;background: #ccc;border: 2px solid #000;width:50%;font-family: 'Open Sans', sans-serif;}
td{padding:10px;border:2px solid #000;width:50%;font-family: 'Open Sans', sans-serif;}
body{
font-family: 'Open Sans', sans-serif;
font-size:13px;
} 
.imgboxlist ul li {
display: inline-block;
margin: 5px 2px;
}
.imgboxlist ul {
margin: -5px -2px;
padding: 0;
list-style: none; 
}
</style>
<style>
@import  url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');
</style>
<?php echo $ex ='<img src="'.SITE_URL.'public/img/Building.png" width="100%">'; ?>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="padding:0px 25px 25px 25px;">
<table>
<tr>
<td><h4 style="text-align:center; margin-top:0px">Complies with Australian Standard AS 4349.1- 2007 Inspection of Buildings Part 1: Pre-Purchase inspections - Residential buildings - Appendix "C"</h4></td>
</tr>
<tr>
<td style="text-align:center">
<?php
$aryData  =array(1=>'Present','Not Present','N/A');
foreach($resQuestionDataa as $value)
{
if($value->question_id==11)
{
$qusAns = DB::table('cs_ques_ans')
->where([['qa_ca_id','=', $data->ca_id],['qa_question_id','=', $value->question_id]])
->first();
?>
<?php if($value->question_id==11)
{
$quest_data= $resQuestionData->where('qa_question_id',11)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
?>
<?php foreach($quest_data as $img_name){?>
<img src="<?php echo $img_name->qa_value;?>" style="width:400px; margin:0 auto;" >
<?php } ?>                         
<?php } ?>
<?php }} ?>
</td>
</tr>
<tr>
<td>
<h4><strong>PURPOSE OF INSPECTION</strong></h4>
<p>The purpose of the inspection is to identify the major defects and safety hazards associated with the property at the time of the inspection. The inspection and reporting is limited to Appendix C AS4349.1-2007.</p>
<p>The overall condition of this building has been compared to similarly constructed & reasonably maintained buildings of approximately the same age.</p>
<p>If it is more than 60 days from the inspection date, we recommend a new inspection and report. If the property is being auctioned refer to the Disclaimer of Liability to Third Parties in this report.</p>
</td>
</tr>
</table>
</div>
<pagebreak>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="padding:0px 25px 25px 25px;">
<table style="width:100%">
<tr><th style="text-align: left;">Client Name:</th><td><?php echo e($data->customer->customer_fname); ?> <?php echo e($data->customer->customer_lname); ?></td></tr>
<tr><th style="text-align: left;">Email:</th><td><?php echo e($data->customer->customer_email); ?></td></tr>
<tr><th style="text-align: left;">Mobile:</th><td><?php echo e($data->customer->customer_mobile); ?></td></tr>
<tr><th style="text-align: left;">Client Address:</th><td><?php echo e($data->customerAddress->customer_address); ?></td></tr>
<tr><th style="text-align: left;">Date of the Inspection:</th><td><?php echo e(date("d M Y",strtotime($data->ca_date))); ?></td></tr>
<tr><th style="text-align: left;">Inspected By:</th><td ><?php echo e($data->technician->faculty_first_name); ?> <?php echo e($data->technician->faculty_last_name); ?></td></tr>
</table>
</div>
</pagebreak>
<pagebreak>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="padding:0px 25px 25px 25px;">
<table width="100%">
<?php foreach($resQuestionDataa as $value)
{
if($value->question_id!=11)
{

$qusAns = DB::table('cs_ques_ans')
->where([['qa_ca_id','=', $data->ca_id],['qa_question_id','=', $value->question_id]])
->first();
?>



<?php 

$quest_data= $resQuestionData->where('qa_question_id',$value->question_id)->where('qa_tech_id','=',$technicianId)->where('qa_type',1);

?>

<tr>
<th style="text-align: left;"><?php echo $value->question_name?></th>
<td> 
<?php foreach($quest_data as $img_name){?>

<?php if($value->question_id!=11)
{ ?>
<p> <?php echo isset($aryData[$img_name->qa_value])?$aryData[$img_name->qa_value]:$img_name->qa_value;?> </p>
<?php } ?>
<?php }

$quest_data= $resQuestionData->where('qa_question_id',$value->question_id)->where('qa_tech_id','=',$technicianId)->where('qa_type',3);
?>
<br>
<div class="imgboxlist">
<ul id="showImage">
<?php foreach($quest_data as $img_name){?>
<li><a href="#">
<div class="imgbox">
<img src="<?php echo $img_name->qa_value;?>"  style="width:200px;height:200px">
</div>
</a>
</li>
<?php } ?>                         
</ul>
</div>

</td>
</tr>


<!-----------------14-------------->

<?php }} ?>
</table>
</div>
</pagebreak>
<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Pages/pdf_html.blade.php ENDPATH**/ ?>