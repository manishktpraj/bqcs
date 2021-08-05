<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;
use App\Http\Model\CsTechnician;




use Validator;


class WebLoginController extends Controller
{

    public function index(Request $request)
    {

        
        $title='Dashboard';
    return view('WebLogin.index',compact('title'));
    }

}