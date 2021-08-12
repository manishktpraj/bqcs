<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;
use App\Http\Model\CsQuestion;



use Validator;


class PagesController extends Controller
{

    public function job(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
        
        $title='Jobs';
    return view('Pages.job',compact('title'));
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

    
    public function jobque(Request $request)
    {

        if($request->session()->has('ADMIN'))
        {
          //  $resQuestionData = CsQuestion::get();  
        $resQuestionData = CsQuestion::where('service_id',7)->get(); 

       // $resQuestionData =CsQuestion::where('service_id','=',8)->get();

//print_r($resQuestionData);

        $title='Job Question';
    return view('Pages.jobque',compact('title','resQuestionData'));
    }else{
        return redirect()->route('index');
    }}


    public function profile(Request $request)
    {
        if($request->session()->has('ADMIN'))
        {
        $title='Profile';
    return view('Pages.profile',compact('title'));
    }else{
        return redirect()->route('index');
    }}

}