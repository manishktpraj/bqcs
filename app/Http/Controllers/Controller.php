<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\CsadminView;
use App\Http\Model\CsStaff;
use App\Http\Model\CsFaculty;
use App\Http\Model\CsCustomer;
use App\Http\Model\CsServices;
use App\Http\Model\CsInstitute;
use App\Http\Model\CsTheme;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
   
     public function __construct()
  {
      
        $this->middleware(function ($request, $next) {
            if(\Session::get("CS_ADMIN") != null) {
                $resuserData = \Session::get("CS_ADMIN");

               $user_role=$resuserData->role_type;
               $session_user_id= $resuserData->user_id;
               if($user_role==0){
                $session_user_data=CsStaff::first();
              }else{
               $session_user_data=CsInstitute::where('ins_id', $session_user_id)->first();
               }
               $resthemeData = CsTheme::first();
               $resCustomerData = CsCustomer::get();
               $resParentServicesData = CsServices::where('role_parent','=',0)->get();
               $resTechnicianData = CsFaculty::where('faculty_status','=',1)->get();
              View::share( compact('resthemeData','session_user_data','user_role','resCustomerData','resParentServicesData','resTechnicianData'));

             }
            return $next($request);
        }); 
}
    
  


}
