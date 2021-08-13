<?php namespace App\Http\Controllers\Csadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csadmin;
use App\Http\Model\CsServices;
use App\Http\Model\CsAppointments;
use App\Http\Model\CsCustomerAddress;
use Illuminate\Support\Str;
use Validator;

class AppointmentController extends Controller
{
  public function index()
  {
    $resAppointentData = CsAppointments::orderBy('ca_id','DESC')->get();
    $title='Manage Appointment';
    return view('Csadmin.Appointment.index',compact('title','resAppointentData'));
  }
  public function addnewappointment($sliderid=0)
  {
   
    $title='Add New Appointment';
    return view('Csadmin.Appointment.addnewappointment',compact('title'));
  }

  public function calender($sliderid=0)
 {
  
   $title='Calender';
   return view('Csadmin.Appointment.calender',compact('title'));
  }

  function addAppointmentProccess(Request $request)
  {
    $aryPostData = $request->all();
    /* echo "<pre>";
    print_r($aryPostData);die;
     */if(isset($aryPostData['ca_id']) && $aryPostData['ca_id']>0)
    {
      $postobj = CsAppointments::where('ca_id',$aryPostData['ca_id'])->first();
    }else{
      $postobj = new CsAppointments;
    }  
    $postobj->ca_app_type = $aryPostData['ca_app_type'];
    $postobj->ca_customer_id = $aryPostData['ca_customer_id'];
    $postobj->ca_service = $aryPostData['ca_service'];
    $postobj->ca_technician_id = $aryPostData['ca_technician_id'];
    $postobj->ca_job_type = $aryPostData['ca_job_type'];
    $postobj->ca_price = $aryPostData['ca_price'];
    $postobj->ca_payment_type = $aryPostData['ca_payment_type'];
    $postobj->ca_date = $aryPostData['ca_date'];
    $postobj->ca_time = $aryPostData['ca_time'];
    $postobj->ca_end_date = $aryPostData['ca_end_date'];
    $postobj->ca_end_time = $aryPostData['ca_end_time'];
    $postobj->ca_notes = $aryPostData['ca_notes'];
    $postobj->ca_customer_address_id = $aryPostData['ca_customer_address_id'];
    if(isset($aryPostData['ca_service_parent']) && count($aryPostData['ca_service_parent'])>0)
    {
      $postobj->ca_service_parent = implode(',',$aryPostData['ca_service_parent']);
    }
    if(isset($aryPostData['ca_service']) && count($aryPostData['ca_service'])>0)
    {
      $postobj->ca_service = implode(',',$aryPostData['ca_service']);
    }
    if($postobj->save()){
      return redirect()->back()->with('status', 'Entry Saved Successfully.');
    }else{
      return redirect()->back()->with('error', 'Server Not Responed');
    }
  }

  public function deleteAppointment($Id)
  {
    CsAppointments::where('ca_id', $Id)->delete();
    return redirect()->back()->with('status', 'Entry Deleted Successfully');
  }

  public function statusChangeAppointment($id)
  {
    $aryPostData = CsAppointments::where('ca_id',$id)->first();
    $status=0;
    if($aryPostData->ca_status==0){
      $status=1;
    }
    CsAppointments::where('ca_id', '=', $id)->update(array('ca_status' => $status));
    return redirect()->back()->with('status','Entry Updated Successfully');
  }
  

  function serviceCatProccessAjex(Request $request)
  {
    $aryPostData = $request->all();
    /*  echo "<pre>";
    print_r(explode(',',$aryPostData['service_id']));die;   */

    $resParentServicesData = CsServices::whereIn('role_parent',explode(',',$aryPostData['service_id']))->get();
    foreach($resParentServicesData as $value)
    {
        echo '<option value="'.$value->role_id.'">'.$value->role_name.'</option>';
    } 
    exit;
  }

  

  function getCustomerAddressAjex(Request $request)
  {
    $aryPostData = $request->all();
    $resCustomerAddressData = CsCustomerAddress::where('customer_id', $aryPostData['customer_id'])->get();
    foreach($resCustomerAddressData as $value)
    {
        echo '<option value="'.$value->id.'">'.$value->customer_address.'</option>';
    } 
    exit;
  }

  function editAppointmentAjex(Request $request)
  {
    $aryPostData = $request->all();
    /*  echo "<pre>";
    print_r(explode(',',$aryPostData['service_id']));die;   */

    $rowAppointment = CsAppointments::where('ca_id',$aryPostData['ca_id'])->first();
    //$htnl = '';
    echo $html ='
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
    ';
    exit;
  }
 

}


