<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;

use Validator;

class DashboardController extends Controller
{
    
    
    public function index(Request $request)
    {if($request->session()->has('ADMIN'))
        {

        $title='Dashboard';
    return view('Dashboard.index',compact('title'));
    }else{
     return redirect()->route('index');   

    }

}

}