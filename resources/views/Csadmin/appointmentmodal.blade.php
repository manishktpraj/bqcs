<?php 
function get_times($ty = "", $default = '00:00', $interval = '+30 minutes',$type='start') {
    $output = '<option value="">Select time</option>';
    $current = strtotime('06:00');
    $end = strtotime( '21:00' );
    while( $current <= $end ) {
    $time = date( 'H:i A', $current );
    $output .= "<option value=\"{$time}\">" . date( 'h.i A', $current ) .'</option>';
    $current = strtotime( $interval, $current );
    }
    return $output;
    }
?>
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
                    <div class="form-group">
                        <select class="custom-select" name="ca_app_type">
                            <option value="">Select</option>
                            <option value="job">Job</option>
                            <option value="quote">Quote</option>
                            <option value="redo/topup">Redo/Topup</option>
                            <option value="task">Task</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select" style="width: 100%;" name="ca_customer_id" onchange="getCustomerAddress(this.value)">
                            <option value="">Select Customer</option>
                            <?php foreach($resCustomerData as $value){?>
                            <option value="<?php echo $value->customer_id?>"><?php echo $value->customer_fname?> <?php echo $value->customer_lname?></option>
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
                            <option value="<?php echo $value->role_id?>"><?php echo $value->role_name?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" multiple="multiple" style="width: 100%;" name="ca_service[]" id="childService">
                            <option value="">Service Category</option>
                        </select>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="custom-select" name="ca_technician_id">
                                    <option value="" selected="selected">Select Technician</option>
                                    <?php foreach($resTechnicianData as $value){?>
                                        <option value="<?php echo $value->faculty_id?>"><?php echo $value->faculty_first_name?> <?php echo $value->faculty_last_name?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="custom-select" name="ca_job_type">
                                    <option value="">Job Type</option>
                                    <option value="Residencial" selected>Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Builder">Builder</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Price" name="ca_price"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="custom-select" name="ca_payment_type">
                                    <option value="">Payment Type</option>
                                    <option value="Cash">Cash</option>
                                    <option value="GST">+GST</option>
                                    <option value="Cash-or-GST">Cash or GST</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <input id="" required="" type="date" value="" name="ca_date" class="form-control" placeholder="Start date" onchange="setDate(this.value)"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">Start Time</label>
                                <select class="custom-select" id="ca_time" name="ca_time" onchange="setTime(this.value)">
                                    <?php echo get_times(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label">End Date</label>
                                <input id="" required="" type="date" value="" name="ca_end_date" class="form-control" placeholder="Start date" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">End Time</label>
                                <select class="custom-select" id="ca_end_time" name="ca_end_time">
                                    <?php echo get_times(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Job Notes" name="ca_notes"></textarea>
                    </div>
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>var token = '<?php echo csrf_token(); ?>';</script>
<script>
    var base_url = '<?php echo ADMIN_URL?>';
    function getCustomerAddress(value)
    {
        var datastring = 'customer_id='+value+'&_token='+token;
        $.post(base_url+'appointment/getCustomerAddressAjex',datastring,function(response){
            $('#address_hide').show();
            $('#addressData').html(response);
        });
    }
    function getServiceChild(value)
    {
        var service = $('#service_category').val();
        var datastring = 'service_id='+service+'&_token='+token;
        $.post(base_url+'appointment/serviceCatProccessAjex',datastring,function(response){
            $('#childService').html(response);
        });
    }
    function setDate(value){
       $('input[name="ca_end_date"]').val(value); 
       //localStorage.setItem("eventime",value);
    }
    function setTime(value){  
        var va = value;
        if(va){
            var h = parseInt(va.split(':')[0]);
            var m = (va.split(':')[1]).split(' ')[0];
            var ampm;
            if(h>=12){ampm = 'PM';}else{ampm = 'AM';}
            var HG = h+1;
            if(HG<10){HG = '0'+HG;}
            var newt = HG+':'+m+' '+ampm;
            $('#ca_end_time').val(newt).trigger('change'); 
        }
     }
     
</script>