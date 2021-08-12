<?php namespace App\Http\Controllers\Csadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Http\Model\Csdmin;
use Illuminate\Support\Str;
use Validator;
use App\Http\Model\CsCustomer;
use App\Http\Model\CsCustomerAddress;



class CustomerController extends Controller
{
  public function index(Request $request)
  {

/***********************Reset Filter Session ************/
if($request->get('reset')==1)
{
    Session::forget('FILTER_CUSTOMER');
    return redirect()->route('managecustomer');   
}
/***********************Reset Filter Session ************/

/***********************Bulk Action ************/
$aryPostData = $request->all();
if(isset($aryPostData['bulkvalue']) && $aryPostData['bulkvalue']!=''):
    $aryPostData =$_POST;
    $aryIds = explode(',',$aryPostData['bulkvalue']);
    $intBulkAction = $aryPostData['bulkaction'];
    if($intBulkAction==1)
    {
      CsCustomerAddress::where('customer_id',$aryIds)->delete();
      CsCustomer::where('customer_id', $aryIds)->delete();
      return redirect()->route('managecustomer')->with('status', 'Entry Deleted Successfully');
    }
    // if($intBulkAction==2)
    // {
    //     CsPackage::whereIn('customer_id', $aryIds)->update(['package_status' => 1]);
    //     return redirect()->route('managecustomer')->with('status', 'Entry Updated Successfully');
    // }
    // if($intBulkAction==3)
    // {
    //     CsPackage::whereIn('customer_id',$aryIds)->update(['package_status' => 0]);
    //     return redirect()->route('managecustomer')->with('status', 'Entry Updated Successfully');
    // }
endIf;
/***********************Bulk Action ************/

/***********************Apply Condition ************/

if($request->get('filter_keyword')!='')
{
    Session::put('FILTER_CUSTOMER', $request->get('filter_keyword'));
    Session::save(); 
}
/***********************Apply Condition ************/


  $customerdata = CsCustomer::paginate(20);

  if(session()->has('FILTER_CUSTOMER')){
  $strFilterKeyword = Session::get('FILTER_CUSTOMER');
  $customerdata = CsCustomer::where('customer_fname', 'LIKE', "%{$strFilterKeyword}%")->orwhere('customer_lname', 'LIKE', "%{$strFilterKeyword}%")->paginate(20);
  } 


    $title='Manage Customer';
    return view('Csadmin.Customer.index',compact('title','customerdata'));
  }



  
 function customerProccess(Request $request)
 {
  $url = $request->input('url'); 

     $aryPostData = $request->all();
    //print_r($aryPostData);die;
     if(isset($aryPostData['customer_id']) && $aryPostData['customer_id']>0)
     {
           $postobj = CsCustomer::where('customer_id',$aryPostData['customer_id'])->first();
     }else{
         $postobj = new CsCustomer;
     }  
     $postobj->customer_fname = $aryPostData['customer_fname'];
     $postobj->customer_lname = $aryPostData['customer_lname'];
     $postobj->customer_email = $aryPostData['customer_email'];
     $postobj->customer_bussiness = $aryPostData['customer_bussiness'];
     //$postobj->customer_service = $aryPostData['customer_service'];
     $postobj->customer_address_notes = $aryPostData['customer_address_notes'];
     $postobj->customer_mobile = $aryPostData['customer_mobile'];
     
   
               
     if($postobj->save())    
     {
      
		 $intCustomerId = $postobj->customer_id;

     CsCustomerAddress::where('customer_id',$intCustomerId)->delete();


		   foreach($aryPostData['addresstype'] as $key=>$addresstype){
			$arrobj = new CsCustomerAddress;
			$arrobj->customer_id = $intCustomerId;
			$arrobj->customer_address = $aryPostData['address'][ $key];
			$arrobj->	customer_address_type = $addresstype;
			$arrobj->save();
       }
      return redirect()->back()->with('status', 'Entry Saved Successfully.');
     }else{
      return redirect()->back()->with('error', 'Server Not Responed');
     }
 }

 public function customerDelete($intCategoryId)
 {
  CsCustomerAddress::where('customer_id',$intCategoryId)->delete();
  CsCustomer::where('customer_id', $intCategoryId)->delete();
  return redirect()->route('managecustomer')->with('status', 'Entry Deleted Successfully');
 }   

}


