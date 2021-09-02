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
use App\Http\Model\CsQuestionMultiple;
use App\Http\Model\CsFaculty;

use Validator;
use PDF;

class PagesController extends Controller
{
    public function job(Request $request)
     {
//         $technicianId = Session::get("ADMIN")->faculty_id;
// print_r($technicianId);
// // echo $technicianId;

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

    function getpopupdata($id)
    {

        $resAppointmentsData = CsAppointments::leftJoin('cs_customer_address', function($join) {
            $join->on('cs_appointments.ca_customer_id', '=', 'cs_customer_address.customer_id');
            })
            ->leftJoin('cs_customer', function($join) {
                $join->on('cs_customer_address.customer_id', '=', 'cs_customer.customer_id');
                })
            ->leftJoin('cs_technician', function($join) {
                    $join->on('cs_appointments.ca_technician_id', '=', 'cs_technician.faculty_id');
                    })
             ->where('ca_id',$id)->orderBy('ca_id','DESC')->get();

             $popup=json_decode($resAppointmentsData);  


             $resta = CsAppointments::leftJoin('cs_customer_address', function($join) {
                $join->on('cs_appointments.ca_customer_id', '=', 'cs_customer_address.customer_id');
                })
                ->leftJoin('cs_customer', function($join) {
                    $join->on('cs_customer_address.customer_id', '=', 'cs_customer.customer_id');
                    })
                ->leftJoin('cs_technician', function($join) {
                        $join->on('cs_appointments.ca_technician_id', '=', 'cs_technician.faculty_id');
                        })
                 ->where('ca_customer_id',$popup[0]->ca_customer_id)
                 ->where('ca_id','!=',$id)
                 ->orderBy('ca_id','DESC')->first();



                 










        //$resAppointmentsData = CsAppointments::where('ca_id',$id)->orderBy('ca_id','DESC')->get();
        $title='Bookings';
        return view('Pages.popupdetail',compact('title','popup','resta'));
    }
    public function calendar(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
            $technicianId = Session::get("ADMIN")->faculty_id; 
            $resAppointmentsData = CsAppointments::where('ca_technician_id',$technicianId)->orderBy('ca_id','DESC')->get();
            
            $title='Calendar';
            return view('Pages.calendar',compact('title','resAppointmentsData'));
        }else{
            return redirect()->route('index');
        }
    }

    public function jobque($id,$type=0)
    {

        if(session()->has('ADMIN'))
        {
            $technicianId = Session::get("ADMIN")->faculty_id;
            $rowTechnicianInfo  = CsFaculty::where('faculty_id',$technicianId)->first();

             
            $rowAppointmentsData = CsAppointments::where('ca_id',$id)->first();
            $resQuestionData = CsQusAns::get(); 
            if( $rowTechnicianInfo->faculty_services!='' && $rowAppointmentsData->ca_service)
            {
                $services = DB::table('cs_services')
                ->whereIn('role_id',explode(",",$rowTechnicianInfo->faculty_services))
                ->whereIn('role_id',explode(",",$rowAppointmentsData->ca_service))
                       ->get();
                
                $resQuestionDataa =CsQuestion::whereIn('service_id',explode(",",$rowTechnicianInfo->faculty_services))
                ->whereIn('service_id',explode(",",$rowAppointmentsData->ca_service))
                ->get();
            }else{
                $services = DB::table('cs_services')
                ->whereIn('role_id',0)
                ->get();
                $resQuestionDataa =CsQuestion::whereIn('service_id',0)
                ->get();   
            }
         
          

            $title=$rowAppointmentsData->customerAddress->customer_address;

          //  $title='Booking ID: '.$rowAppointmentsData->ca_id;
            return view('Pages.jobque',compact('title','technicianId','resQuestionData','rowAppointmentsData','resQuestionDataa','services','resQuestionData','id','type'));
        }else{
            return redirect()->route('index');
        }
    }

    function questionsSubmitRequest(Request $request)
    {
        $aryPostData = $request->all();
 ////echo '<pre>';;print_r($aryPostData);die;
        
        $technicianId = Session::get("ADMIN")->faculty_id;
        if ($request->isMethod('post')) 
        {
           
            CsAppointments::where(array('ca_id' => $aryPostData['qa_ca_id']))->update(  array('ca_report_submit' => 1));
          //  echo '<pre>'; print_r($aryPostData);die;
            if(isset($_POST['selected_image']) && count($_POST['selected_image']))
            {
               ///   self::createPDFnew( $aryPostData['qa_ca_id'],$_POST['selected_image']) ;
               $id =  $aryPostData['qa_ca_id'];
               $aryAllowImage = $_POST['selected_image'];
                $data = CsAppointments::where('ca_id',$id)->first();
               $resQuestionDataa = DB::table('cs_question')
                   ->whereIn('service_id',explode(",",$data->ca_service))
                   ->get();
               $resQuestionData = CsQusAns::get(); 
            ////  return view('Pages.pdf_html',compact('data','resQuestionDataa','resQuestionData'));
               // share data to view
                $data['data'] = $data;
               $data['resQuestionDataa'] = $resQuestionDataa;
               $data['resQuestionData'] = $resQuestionData;
               $data['dataset'] = $aryAllowImage;
               view()->share('pages.pdf_html',$data);
             $pdf = PDF::loadView('pdf.pdf_view', $data);
               // download PDF file with download method
             return  $pdf->download('pdf_file.pdf');  

            ///   return redirect(route('job'))->with('status', 'Entry Saved Successfully.');

            }else{
                CsQusAns::where('qa_ca_id', $aryPostData['qa_ca_id'])->where('qa_tech_id',$technicianId)->delete();
                foreach($aryPostData['qa_value'] as $key=>$label)
                {
                   
                        foreach($label as $keyee=>$labele){
                            $rowQusMulData = CsQuestionMultiple::where([['qm_question_id' ,'=', $key],['qm_slug' ,'=', $keyee]])->first();
                            if(!empty($labele) && is_array($labele))
                            {
                                
                            foreach($labele as $keyeee=>$labelee){
                            $postobj = new CsQusAns;
                            $postobj->qa_question_id = $key;
                            $postobj->qa_type = $keyee;
                            $postobj->qa_ca_id = $aryPostData['qa_ca_id'];
                            $postobj->qa_value = $labelee;
                            $postobj->qa_tech_id = $technicianId;
                            $postobj->qa_field_type = isset($rowQusMulData->qm_id)?$rowQusMulData->qm_type:'';
                            $postobj->save();
                            }
                          }else{
                            $postobj = new CsQusAns;
                            $postobj->qa_question_id = $key;
                            $postobj->qa_type = $keyee;
                            $postobj->qa_ca_id = $aryPostData['qa_ca_id'];
                            $postobj->qa_value = $labele;
                            $postobj->qa_tech_id = $technicianId;
                            $postobj->qa_field_type = isset($rowQusMulData->qm_id)?$rowQusMulData->qm_type:'';
                            $postobj->save();
                            }
                        }
                  
                }
                return redirect(route('job'))->with('status', 'Entry Saved Successfully.');

            }



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
             
            $filename = time().'test.'.$image->getClientOriginalExtension();
            $destinationPath = SITE_UPLOAD_PATH.SITE_QUESTIONS_IMAGE_PATH;
           /// $image->move($destinationPath, $filename);
            $strData = SITE_UPLOAD_URL.SITE_QUESTIONS_IMAGE_PATH.$filename;

            /************  Compress image **************/
             $quality = 60;
             //echo $_FILES['qa_image_']['tmp_name'];die;
            self::compressImage($image->getPathName(), $destinationPath.$filename, $quality);
            /*******************************************/

            $aryResponse['message']='ok';
            $aryResponse['notification']='Image Upload Successfully';
            $aryResponse['url']	 = $strData;
            $aryResponse['name'] = $filename;
        } 
        echo json_encode($aryResponse);
        exit();
    }    

    function compressImage($source, $destination, $quality) {
        
        $info = getimagesize($source);
        
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);

            elseif ($info['mime'] == 'image/jpg')
            $image = imagecreatefromjpg($source);

            elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source);
            
            elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source);
            imagejpeg($image, $destination, $quality);

        ///    $image = imagerotate($image, 90, 0);
            
           imagejpeg($image, $destination, $quality);
           
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
     ////  return view('Pages.pdf_html',compact('data','resQuestionDataa','resQuestionData'));
        // share data to view
         $data['data'] = $data;
        $data['resQuestionDataa'] = $resQuestionDataa;
        $data['resQuestionData'] = $resQuestionData;
        view()->share('pages.pdf_html',$data);
      $pdf = PDF::loadView('pdf.pdf_view', $data);
        // download PDF file with download method
     return $pdf->download('pdf_file.pdf');  
      }

      public function createPDFnew($id,$aryAllowImage) {
        // retreive all records from db
        
      
      }

    public function viewPDF($id) {
        $data = CsAppointments::where('ca_id',$id)->first();
        $resQuestionDataa = DB::table('cs_question')
            ->whereIn('service_id',explode(",",$data->ca_service))
            ->get();
        $resQuestionData = CsQusAns::get(); 
        return view('Pages.pdf_html',compact('data','resQuestionDataa','resQuestionData'));
           
      }




      function deleteimg(Request $request){
        $aryPostData = $request->all();
        CsQusAns::where('qa_id', $aryPostData['ques_id'])->delete();
      }
}