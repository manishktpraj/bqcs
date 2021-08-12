<?php namespace App\Http\Controllers\Csadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csadmin;
use App\Http\Model\CsServices;
use App\Http\Model\CsAppointments;
use Illuminate\Support\Str;
use Validator;

class AppointmentController extends Controller
{
  public function index()
  {
    $resAppointentData = CsAppointments::get();
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
 
}


