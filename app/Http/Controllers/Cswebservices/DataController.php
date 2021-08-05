<?php namespace App\Http\Controllers\Cswebservices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use Validator;
use Illuminate\Support\Str;
use App\Http\Model\CsPcategory;
use App\Http\Model\CsStudent;
use App\Http\Model\CsNotification;
use App\Http\Model\CsPackage;
use App\Http\Model\Csproduct;



class DataController extends Controller
{
    public function index(Request $request)
    {
        exit;
    }
    
    function getpackagesubcategory(Request $request)
    {
        $aryPostData = $request->all();
        $aryResponse =array();
        if ($request->isMethod('post')) 
        {
            $data = (object)$aryPostData;
            $aryResponse['purl'] = SITE_UPLOAD_URL.SITE_PACKAGE_IMAGE;
            $strCurrentData =date("Y-m-d");
            $resPackageCategory= CsPcategory::where(['pc_id'=>$aryPostData['pc_parent']])->first();
            $aryResponse['resultsmain'] =(object) array();
            if($resPackageCategory!=null)
            {
                $aryResponse['resultsmain'] = $resPackageCategory;

            }
            $resPackageCategory= CsPcategory::where(['pc_status'=>1,'pc_parent'=>$aryPostData['pc_parent']])->orderBy('pc_id')->get();
            $aryResponse['message']='ok';
            $aryResponse['notification']='Record Found';
            $aryResponse['results'] = $resPackageCategory;

            
        }else{
            $aryResponse['message']='failed';
            $aryResponse['notification']='Method Not Allowed';
        }
        echo json_encode($aryResponse);
        exit;
    }
    function createRandomPassword() { 

        $chars = "ABCDEFGHIJKLMNOPQURSTUVWXYZabcdefghijkmnopqrstuvwxyz"; 
        srand((double)microtime()*1000000); 
        $i = 0; 
        $pass = '' ; 
    
        while ($i <= 5) { 
            $num = rand() % 33; 
            $tmp = substr($chars, $num, 1); 
            $pass = $pass . $tmp; 
            $i++; 
        } 
    
        return $pass; 
    
    }
    function sharetextdata(Request $request)
    {
        $aryPostData = $request->all();
        //Configure::write('debug', 2);
        $aryResponse =array();
        if ($request->isMethod('post')) 
        {
            $data = (object)$aryPostData;
            $rowUserInfo = CsStudent::where('student_id', '=', $data->student_id)->first();
    
            if(isset($rowUserInfo->student_id) && $rowUserInfo->student_refferal_code=='')
            {
                $flight = CsStudent::find($rowUserInfo->student_id);
                $flight->student_refferal_code = strtoupper($this->createRandomPassword());
                $flight->save();
            }
            if(isset($rowUserInfo->student_id) && $rowUserInfo->student_id>0)
            {
                $rowUserInfo = CsStudent::where('student_id', '=', $data->student_id)->first();
                $aryResponse['message']='ok';
                $aryResponse['share_code'] = $rowUserInfo->student_refferal_code;
                $aryResponse['text_share_message'] = 'Coachingzon '.$aryResponse['share_code'].' share the code with friend to get money in your wallet. Download the app now 👉 https://play.google.com/store/apps/details?id=codexo.coachingzon';
        
            }else{
                $aryResponse['message']='failed';
                $aryResponse['notification']='Invalid Credential';
            }
        }else{
            $aryResponse['message']='failed';
            $aryResponse['notification']='Method Not Allowed';
        }
        echo json_encode($aryResponse);
        exit;
    }

    function notification(Request $request) { 

     $aryPostData = $request->all();
     //Configure::write('debug', 2);
     $aryResponse =array();
     if ($request->isMethod('post')) 
     {
         $notificationdata = CsNotification::where('no_student', '=', $aryPostData['student_id'])->get();
         $aryResponse['message']='ok';
         $aryResponse['naurl'] = SITE_NOTIFICATION_IMAGE;

         $aryResponse['results']=$notificationdata;

     }else{
         $aryResponse['message']='failed';
         $aryResponse['notification']='Method Not Allowed';
     }
     echo json_encode($aryResponse);
     exit;
    }

    function course(Request $request) { 

        $aryPostData = $request->all();
        // print_r($aryPostData);
        // Configure::write('debug', 2);
        $aryResponse =array();
        if ($request->isMethod('post')) 
        {
            
            $resPackageCategory= CsPcategory::where(['pc_id'=>$aryPostData['cat_id']])->first();
           
            $aryResponse['resultsmain'] =(object) array();
            if($resPackageCategory!=null)
            {
                $aryResponse['resultsmain'] = $resPackageCategory;

            }

            $coursedata = CsPackage::where('package_pc_id', '=', $aryPostData['cat_id'])->get();
            $aryResponse['message']='ok';
            $aryResponse['results']=$coursedata;
 
            $resPackageCategory= CsPcategory::where(['pc_status'=>1,'pc_parent'=>$aryPostData['cat_id']])->orderBy('pc_id')->get();
             $aryResponse['resultssubcategory'] = $resPackageCategory;



   
        }else{
            $aryResponse['message']='failed';
            $aryResponse['course']='Method Not Allowed';
        }
        echo json_encode($aryResponse);
        exit;
       }

       function ebooknotes(Request $request) { 

        $aryPostData = $request->all();
        // print_r($aryPostData);
        // Configure::write('debug', 2);
        $aryResponse =array();
        if ($request->isMethod('post')) 
        {
            $productdata = Csproduct::get();
            $aryResponse['message']='ok';
            $aryResponse['bookurl'] = SITE_BOOK_IMAGE;
           
            $aryResponse['results']=$productdata;
   
        }else{
            $aryResponse['message']='failed';
            $aryResponse['ebook']='Method Not Allowed';
        }
        echo json_encode($aryResponse);
        exit;
       }
  
}
