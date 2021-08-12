<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;
use App\Http\Model\CsFaculty;

use Validator;


class WebLoginController extends Controller
{

    public function index(Request $request)
    {

         
        $title='Dashboard';
    return view('WebLogin.index',compact('title'));
    }

    public function LoginCheck(Request $request)
    {	      //$aryPostData = $request->all();

   //print_r($aryPostData);
            $email = $request->email1;
            $password =$request->password1;
    // echo $email;
          $adminLoginCheck = CsFaculty::where('faculty_email','=',$email)->first();
        // print_r($adminLoginCheck);die;
          if($adminLoginCheck){
         ////   print_r($adminLoginCheck->staff_password);
            if ($password==$adminLoginCheck->faculty_password) {
              Session::put('ADMIN', $adminLoginCheck);
              Session::save();
              $response = [
                  'message' => 'ok'
                ];
            }
            else{
                $response = [
                  'message' => 'failed'
                ];
            }
          }else{
              $response = [
                  'message' => 'failed'
                ];
          }
          return response()->json($response);
    }
    public function logout(Request $request)
    {	
       Session::forget('ADMIN');
       return redirect()->route('index')->withErrors("logged out.");
    }
}