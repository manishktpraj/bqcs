<?php $technicianId = Session::get("ADMIN")->faculty_id;?>
<style>
table{
border-collapse: collapse;
width: 100%;
}
th{padding:10px;background: #ccc;border: 1px solid #000;width:50%; vertical-align: middle;}
td{padding:10px;border:1px solid #000;width:50%;vertical-align: middle;}
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
.page-break {
page-break-after: always;
}
</style>
<?php echo $ex ='<img src="'.SITE_URL.'public/img/Building.png" width="100%">'; ?>
<div class="page-break"></div>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="margin-top:25px">
<table>
<tr>
<td style="border:0px"><h4 style="text-align:center; margin-top:0px">Complies with Australian Standard AS 4349.1- 2007 Inspection of Buildings Part 1: Pre-Purchase inspections - Residential buildings - Appendix "C"</h4></td>
</tr>
<tr>
<td style="text-align:center; border:0px">
<?php
$aryData  =array(1=>'Present','Not Present','N/A');
foreach($resQuestionDataa as $value)
{
if($value->question_id==11)
{
$qusAns = DB::table('cs_ques_ans')
->where([['qa_ca_id','=', $data->ca_id],['qa_tech_id','=', $technicianId],['qa_question_id','=', $value->question_id]])
->first();
?>
<?php
$quest_data= $resQuestionData->where('qa_question_id',11)->where('qa_tech_id','=',$technicianId)->where('qa_field_type',2);
?>
<?php foreach($quest_data as $img_name){?>
<img src="<?php echo $img_name->qa_value;?>" style="width:100%;" >
<?php } ?>                         
<?php }} ?>
</td>
</tr>
<tr>
<td style="border:0px">
<h4><strong>PURPOSE OF INSPECTION</strong></h4>
<p>The purpose of the inspection is to identify the major defects and safety hazards associated with the property at the time of the inspection. The inspection and reporting is limited to Appendix C AS4349.1-2007.</p>
<p>The overall condition of this building has been compared to similarly constructed & reasonably maintained buildings of approximately the same age.</p>
<p>If it is more than 60 days from the inspection date, we recommend a new inspection and report. If the property is being auctioned refer to the Disclaimer of Liability to Third Parties in this report.</p>
</td>
</tr>
</table>
</div>
<div class="page-break"></div>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="margin-top:25px">
<table style="width:100%">
<tr><th style="text-align: left;background:#000;color:#fff" colspan="2">Customer  Details:</th></tr>
<tr><th style="text-align:left;">Customer Name:</th><td style="">{{$data->customer->customer_fname}} {{$data->customer->customer_lname}}</td></tr>
<tr><th style="text-align:left;">Email:</th><td tyle="">{{$data->customer->customer_email}}</td></tr>
<tr><th style="text-align:left;">Mobile:</th><td tyle="">{{$data->customer->customer_mobile}}</td></tr>
<tr><th style="text-align:left;">Property Address:</th><td tyle="">{{$data->customerAddress->customer_address}}</td></tr>
<tr><th style="text-align:left;">Date of the Inspection:</th><td tyle="">{{ date("d M Y",strtotime($data->ca_date))}}</td></tr>
<tr><th style="text-align:left;">Inspected By:</th><td tyle="">{{$data->technician->faculty_first_name}} {{$data->technician->faculty_last_name}}</td></tr>
</table>
</div>
<div class="page-break"></div>
<img src="<?php echo SITE_URL?>public/img/headderr.png" style="width:100%;">
<div style="margin-top:25px">
<table width="100%">
<?php foreach($resQuestionDataa as $value)
{
		
	if($value->question_id!=11)
	{
 
		$quest_data= $resQuestionData->where('qa_question_id',$value->question_id)->where('qa_tech_id','=',$technicianId)->where('qa_field_type','!=',2)?>
		<?php if($value->question_id!=20){?>
		<tr>
			<th style="text-align:left;"><?php echo $value->question_name?></th>
			<td> 
				<?php foreach($quest_data as $img_name)
				{ ?>
					 
					<?php echo isset($aryData[$img_name->qa_value])?$aryData[$img_name->qa_value]:$img_name->qa_value;?>
 				<?php }
				?>
			</td>
		</tr>
		<?php } 
		 				$quest_data= $resQuestionData->where('qa_question_id',$value->question_id)->where('qa_tech_id','=',$technicianId)->where('qa_field_type',2);

		if($quest_data->count()>0){
			?>
			<tr>
				<?php
					$cnt =0;
					$strHtml = count($quest_data);
					foreach($quest_data as $img_name){
					if($cnt%2==0 && $cnt!=1 && $cnt!=0)
					{
						$strHtml=$strHtml-$cnt;
						echo '</tr><tr>';
					}
				?>
				<td <?php if($strHtml==1){ ?>colspan="2"<?php } ?> style="padding:10px 0px;border:0px; vertical-align:top;">
					<img src="<?php echo $img_name->qa_value;?>"  style="width:100%;">
				</td>
				<?php  $cnt++; } ?>                         
			</tr>
		<?php }?>
	<?php }} ?>
</table>
</div>
