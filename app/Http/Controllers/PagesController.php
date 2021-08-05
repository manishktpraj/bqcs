<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;
use App\Http\Model\CsTechnician;




use Validator;


class PagesController extends Controller
{

    public function job(Request $request)
    {

        
        $title='Job';
    return view('Pages.job',compact('title'));
    }

    
    public function jobque(Request $request)
    {

        
        $title='Job Question';
    return view('Pages.jobque',compact('title'));
    }

}