<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\CsAdmin;
use App\Http\Model\CsAppointments;
use App\Http\Model\CsQuestion;
use Validator;

class PagesController extends Controller
{
    public function job(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
            $technicianId = Session::get("ADMIN")->faculty_id;
            $resAppointmentsData = CsAppointments::where('ca_technician_id',$technicianId)->orderBy('ca_id','DESC')->get();
            $title='Bookings';
            return view('Pages.job',compact('title','resAppointmentsData'));
        }else{
            return redirect()->route('index');
        }
    }

    public function calendar(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
            $title='Calendar';
            return view('Pages.calendar',compact('title'));
        }else{
            return redirect()->route('index');
        }
    }

    public function jobque($id)
    {

        if(session()->has('ADMIN'))
        {
            $technicianId = Session::get("ADMIN")->faculty_id;
            $rowAppointmentsData = CsAppointments::where('ca_id',$id)->first();
            $resQuestionData = CsQuestion::where('service_id',7)->get(); 

            $services = DB::table('cs_services')
            ->whereIn('role_id',explode(",",$rowAppointmentsData->ca_service))
            ->get();
            $resQuestionDataa = DB::table('cs_question')
            ->whereIn('service_id',explode(",",$rowAppointmentsData->ca_service))
            ->get();


            $title='Booking ID: '.$rowAppointmentsData->ca_id;
            return view('Pages.jobque',compact('title','resQuestionData','rowAppointmentsData','resQuestionDataa','services'));
        }else{
            return redirect()->route('index');
        }
    }

    public function profile(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
            $title='Profile';
            return view('Pages.profile',compact('title'));
        }else{
            return redirect()->route('index');
        }
    }
}