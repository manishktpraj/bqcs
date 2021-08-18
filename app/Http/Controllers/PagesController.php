<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\CsAdmin;
use App\Http\Model\CsAppointments;
use App\Http\Model\CsQuestion;
use App\Http\Model\CsQusAns;
use Validator;
use PDF;

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
            $resQuestionData = CsQusAns::get(); 
            $services = DB::table('cs_services')
            ->whereIn('role_id',explode(",",$rowAppointmentsData->ca_service))
            ->get();
            $resQuestionDataa = DB::table('cs_question')
            ->whereIn('service_id',explode(",",$rowAppointmentsData->ca_service))
            ->get();

            $title=$rowAppointmentsData->customerAddress->customer_address;

          //  $title='Booking ID: '.$rowAppointmentsData->ca_id;
            return view('Pages.jobque',compact('title','technicianId','resQuestionData','rowAppointmentsData','resQuestionDataa','services','resQuestionData','id'));
        }else{
            return redirect()->route('index');
        }
    }

    function questionsSubmitRequest(Request $request)
    {
        $aryPostData = $request->all();
        $technicianId = Session::get("ADMIN")->faculty_id;
         if ($request->isMethod('post')) 
        {
            CsQusAns::where('qa_ca_id', $aryPostData['qa_ca_id'])->delete();
            foreach($aryPostData['qa_value'] as $key=>$label)
            {
                if(!empty($label))
                {
                    
                    foreach($label as $keyee=>$labele){

                        foreach($labele as $keyeee=>$labelee){
                        $postobj = new CsQusAns;
                        $postobj->qa_question_id = str_replace('__','',str_replace('_','',$key));
                        $postobj->qa_type = $keyee;
                        $postobj->qa_ca_id = $aryPostData['qa_ca_id'];
                        $postobj->qa_value = $labelee;
                        $postobj->qa_tech_id = $technicianId;
                        $postobj->save();
                        }
                    }
                }
            }
            CsAppointments::where(array('ca_id' => $aryPostData['qa_ca_id']))->update(  array('ca_report_submit' => 1));
          //  echo '<pre>'; print_r($aryPostData);die;

            return redirect(route('job'))->with('status', 'Entry Saved Successfully.');
        }else{
            return redirect()->back()->with('error', 'Server Not Responed');
        }
    }

    public function uploadfiles(Request $request)
    {
        $aryResponse =array();
       /*  echo "<pre>";
        print_r($request->all());die; */
        if($request->hasFile('qa_image_'))
        {
            $image = $request->file('qa_image_');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = SITE_UPLOAD_PATH.SITE_QUESTIONS_IMAGE_PATH;
            $image->move($destinationPath, $filename);
            $strData = SITE_UPLOAD_URL.SITE_QUESTIONS_IMAGE_PATH.$filename;
            $aryResponse['message']='ok';
            $aryResponse['notification']='Image Upload Successfully';
            $aryResponse['url']	 = $strData;
            $aryResponse['name'] = $filename;
        } 
        echo json_encode($aryResponse);
        exit();
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

    public function createPDF($id) {
        // retreive all records from db
        
        $data = CsAppointments::where('ca_id',$id)->first();
        $resQuestionDataa = DB::table('cs_question')
            ->whereIn('service_id',explode(",",$data->ca_service))
            ->get();
        $resQuestionData = CsQusAns::get(); 
           //// return view('Pages.pdf_html',compact('data','resQuestionDataa','resQuestionData'));
        // share data to view
        $data['data'] = $data;
        $data['resQuestionDataa'] = $resQuestionDataa;
        $data['resQuestionData'] = $resQuestionData;
        view()->share('pages.pdf_html',$data);
      $pdf = PDF::loadView('pdf.pdf_view', $data);
        // download PDF file with download method
     return $pdf->download('pdf_file.pdf');
      }
}