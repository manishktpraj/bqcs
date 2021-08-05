<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\CsadminView;
use App\Http\Model\CsStaff;

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

                // if($resuserData->role_type!=0){
                // $resuserData1 = cs_institute::where('user_id', '=',$user_id)->where('role_type','=', $user->role_type)->get();
                // }
              /*  $user_id=$user->staff_id;
              
                $resuserData = CsadminView::where('user_id', '=',$user_id)->where('role_type','=', $user->role_type)->get();

                $users = DB::table('csadmin_view')
                ->where('user_id', '=', $user_id)
                ->where('role_type', '=',  $user->role_type)
                ->get();

                print_r( $user);
                */
               //print_r($resuserData);die;
               $user_role=$resuserData->role_type;
               $session_user_id= $resuserData->user_id;
               if($user_role==0){
                $session_user_data=CsStaff::first();
              }else{
               $session_user_data=CsInstitute::where('ins_id', $session_user_id)->first();
               }








          $resthemeData = CsTheme::first();
       
                
                    View::share( compact('resthemeData','session_user_data','user_role'));

             }
            return $next($request);
        });
        
}
    
    
}
