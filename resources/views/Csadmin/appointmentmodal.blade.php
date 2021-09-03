<?php 
function get_times($ty = "", $default = '00:00', $interval = '+30 minutes',$type='start') {
    $output = '<option value="">Select time</option>';
    $current = strtotime('06:00');
    $end = strtotime( '21:00' );
    while( $current <= $end ) {
    $time = date( 'H:i A', $current );
    $strSelect ='';
    if($ty==$time)
    {
$strSelect ='selected';
    }
    $output .= "<option $strSelect value=\"{$time}\">" . date( 'h.i A', $current ) .'</option>';
    $current = strtotime( $interval, $current );
    }
    return $output;
    }
?>
<?php
if(isset($rowAppointment))
{
 
}
if(!isset($rowAppointment))
{ ?>
<div class="modal fade" id="modaladdapponiment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
        <div class="modal-content">
            <div class="modal-header pd-15">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <div class="media align-items-center">
                    <h5 class="mg-b-0">Create New Appointment</h5>
                </div>
            </div>
            <div class="modal-body pd-25">
                <form method="post" action="{{route('addAppointmentProccess')}}" enctype="multipart/form-data">  
                @csrf 
                <div id="editAppointment">
                    <?php } ?>

                    <input type="hidden" name="ca_id" value="<?php echo (isset($rowAppointment->ca_id))?$rowAppointment->ca_id:''; ?>">
                    <div class="form-group">
                        <select class="custom-select" name="ca_app_type">
                            <option value="">Select</option>
                            <option  <?php echo (isset($rowAppointment->ca_app_type) && $rowAppointment->ca_app_type=='job')?'selected':''; ?> value="job">Job</option>
                            <option <?php echo (isset($rowAppointment->ca_app_type) && $rowAppointment->ca_app_type=='quote')?'selected':''; ?> value="quote">Quote</option>
                            <option <?php echo (isset($rowAppointment->ca_app_type) && $rowAppointment->ca_app_type=='redo/topup')?'selected':''; ?> value="redo/topup">Redo/Topup</option>
                            <option <?php echo (isset($rowAppointment->ca_app_type) && $rowAppointment->ca_app_type=='task')?'selected':''; ?> value="task">Task</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select" style="width: 100%;" name="ca_customer_id" onchange="getCustomerAddress(this.value)">
                            <option value="">Select Customer</option>
                            <?php foreach($resCustomerData as $value){?>
                            <option <?php echo (isset($rowAppointment->ca_customer_id) && $rowAppointment->ca_customer_id==$value->customer_id)?'selected':''; ?> value="<?php echo $value->customer_id?>"><?php echo $value->customer_fname?> <?php echo $value->customer_lname?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group" id="address_hide" style="display:none">
                        <select class="custom-select" style="width: 100%;" name="ca_customer_address_id" id="addressData">
                            <option value="">Select Address</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" name="ca_service_parent[]" id="service_category" multiple="multiple" style="width: 100%;" onchange="getServiceChild(this.value)">
                            <option value="">Service Category</option>
                            <?php foreach($resParentServicesData as $value){?>
                            <option <?php echo (isset($rowAppointment->ca_service_parent) && $rowAppointment->ca_service_parent==$value->role_id)?'selected':''; ?> value="<?php echo $value->role_id?>"><?php echo $value->role_name?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" multiple="multiple" style="width: 100%;" name="ca_service[]" id="childService">
                            <option value="">Service Category</option>
                        </select>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="custom-select select2" multiple="multiple" style="width: 100%;" name="ca_technician_id[]">
                                    <option >Select Technician</option>
                                    <?php foreach($resTechnicianData as $value){?>
                                        <option <?php echo (isset($rowAppointment->ca_technician_id) && $rowAppointment->ca_technician_id==$value->faculty_id)?'selected':''; ?> value="<?php echo $value->faculty_id?>"><?php echo $value->faculty_first_name." ".$value->faculty_last_name?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="custom-select" name="ca_job_type">
                                    <option value="">Job Type</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Residencial')?'selected':''; ?> value="Residencial" selected>Residential</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Commercial')?'selected':''; ?> value="Commercial">Commercial</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Real Estate')?'selected':''; ?> value="Real Estate">Real Estate</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Builder')?'selected':''; ?> value="Builder">Builder</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Price" value="<?php echo isset($rowAppointment->ca_price)?$rowAppointment->ca_price:''; ?>" name="ca_price"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="custom-select" name="ca_payment_type">
                                    <option value="">Payment Type</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Cash')?'selected':''; ?> value="Cash">Cash</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='GST')?'selected':''; ?> value="GST">+GST</option>
                                    <option <?php echo (isset($rowAppointment->ca_job_type) && $rowAppointment->ca_job_type=='Cash-or-GST')?'selected':''; ?> value="Cash-or-GST">Cash or GST</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <input id="" required="" type="date" value="<?php echo isset($rowAppointment->ca_date)?$rowAppointment->ca_date:''; ?>" name="ca_date" class="form-control" placeholder="Start date" onchange="setDate(this.value)"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">Start Time</label>
                                <select class="custom-select" id="ca_time" name="ca_time" onchange="setTime(this.value)">
                                    <?php 
                                  $strSelected =   isset($rowAppointment->ca_time)?$rowAppointment->ca_time:'';
                                    echo get_times($strSelected); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label">End Date</label>
                                <input id="" required="" type="date" value="<?php echo isset($rowAppointment->ca_end_date)?$rowAppointment->ca_end_date:''; ?>" name="ca_end_date" class="form-control" placeholder="Start date" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">End Time</label>
                                <select class="custom-select" id="ca_end_time" name="ca_end_time">
                                    <?php 
                                   $strSelected =   isset($rowAppointment->ca_end_time)?$rowAppointment->ca_end_time:'';                                   
                                    echo get_times($strSelected); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Job Notes" name="ca_notes"><?php echo isset($rowAppointment->ca_notes)?$rowAppointment->ca_notes:''; ?></textarea>
                    </div>
                    <button class="btn btn-primary btn-block">Save</button>
                    <script>var ca_service ='<?php echo isset($rowAppointment->ca_service)?$rowAppointment->ca_service:''; ?>';</script>

                    <?php if(!isset($rowAppointment))
{ ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } ?>