<?php namespace App\Http\Controllers\Csadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 
use Hash;
use Session;
use App\Http\Model\Csdmin;
use App\Http\Model\CsFaculty;
use App\Http\Model\CsServices;
use App\Http\Model\CsPermission;
use App\Http\Model\CsRolePermissions;
use App\Http\Model\CsQuestion;
use App\Http\Model\CsFacultyRole;
use Validator;

class TechnicianController extends Controller
{

/*************************************************************************
Technician Section
 ***************************************************************************/

  public function index(Request $request)
  {
    $user=Session::get("CS_ADMIN");

    /***********************Reset Filter Session ************/
        if($request->get('reset')==1)
        {
        Session::forget('FILTER_FACULTY');
        return redirect()->route('technician');   
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
            CsFaculty::whereIn('faculty_id', $aryIds)->delete();
            return redirect()->route('technician')->with('status', 'Entry Deleted Successfully');
        }
        if($intBulkAction==2)
        {
            CsFaculty::whereIn('faculty_id', $aryIds)->update(['faculty_status' => 1]);
            return redirect()->route('technician')->with('status', 'Entry Updated Successfully');
        }
        if($intBulkAction==3)
        {
            CsFaculty::whereIn('faculty_id',$aryIds)->update(['faculty_status' => 0]);
            return redirect()->route('technician')->with('status', 'Entry Updated Successfully');
        }
        endIf;
      /***********************Bulk Action ************/
             
      /***********************Apply Condition ************/
   
        if($request->get('filter_keyword')!='')
        {
        Session::put('FILTER_FACULTY', $request->get('filter_keyword'));
        Session::save(); 
        }
           /***********************Apply Condition ************/
   
        if(session()->has('FILTER_FACULTY')){
        $strFilterKeyword = Session::get('FILTER_FACULTY');
        if($user->role_type==0){
            $resfacultyData = CsFaculty::where('faculty_first_name', 'LIKE', "%{$strFilterKeyword}%")->paginate(20);
        }else{
            $resfacultyData = CsFaculty::where('faculty_first_name', 'LIKE', "%{$strFilterKeyword}%")->where('faculty_institute','=',$user->user_id)->paginate(20);
            }}else{
                if($user->role_type==0){
                    $resfacultyData = CsFaculty::paginate(20);
                }else{
                    $resfacultyData = CsFaculty::where('faculty_institute','=',$user->user_id)->paginate(20);
                }
            }   
    $title='Manage Technician';
    return view('Csadmin.Technician.index',compact('title','resfacultyData'));
  }



/********************************************************************************************************************************************************/

  public function addNewTechnician($intfacultyId=0)
  {
    $user=Session::get("CS_ADMIN");
    $resroleData = CsFacultyRole::get();
    $resfacultyData = array();
    if($intfacultyId>0){
    if($user->role_type==0){
      $resfacultyData = CsFaculty::where('faculty_id','=',$intfacultyId)->first();
    }else{
      $resfacultyData = CsFaculty::where('faculty_id','=',$intfacultyId)->where('faculty_institute','=',$user->user_id)->first();
         }}

    $title='Add New Technician';
    return view('Csadmin.Technician.addNewTechnician' ,compact('title','resfacultyData','resroleData'));
  }
  
  /*************************************************************************************************************************************************************************/

  public function technicianDelete($intCategoryId)
  {
      CsFaculty::where('faculty_id', $intCategoryId)->delete();
      return redirect()->route('technician')->with('status', 'Entry Deleted Successfully');
  }

 /***********************************************************************************************************************************************************************/

 public function viewtechnician($intfacultyId=0)
{
  
  $title='View Technician';
  return view('Csadmin.Technician.viewtechnician' ,compact('title'));
}
/***************************************************************************************************************************************************************************/

function technicianProccess(Request $request)
    {   
        $user=Session::get("CS_ADMIN");
        $aryPostData = $request->all();
        if(isset($aryPostData['faculty_id']) && $aryPostData['faculty_id']>0)
        {
           $postobj = CsFaculty::where('faculty_id',$aryPostData['faculty_id'])->first();
        }else{
            $postobj = new CsFaculty;
        }   
        $postobj->faculty_institute = $user->user_id;
        $postobj->faculty_role_id = $aryPostData['faculty_role'];
        $postobj->faculty_status = 1;
        $postobj->faculty_first_name = $aryPostData['faculty_first_name'];
        $postobj->faculty_last_name = $aryPostData['faculty_last_name'];
        $postobj->faculty_email = $aryPostData['faculty_email'];
        $postobj->faculty_about = $aryPostData['faculty_about'];
        $postobj->faculty_phone = $aryPostData['faculty_phone'];

       if(isset($aryPostData['faculty_new_password']) && isset($aryPostData['faculty_confirm_password']) && $aryPostData['faculty_confirm_password']==$aryPostData['faculty_new_password']){
           $postobj->faculty_password = $aryPostData['faculty_new_password'];
           } 
        
        if($request->hasFile('faculty_img'))
        {
            $image = $request->file('faculty_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = SITE_UPLOAD_PATH.SITE_FACULTY_IMAGE;
            $image->move($destinationPath, $name);
            $postobj->faculty_img = $name;
        } 

        if($postobj->save())    
        {
            return redirect()->route('technician')->with('status', 'Entry Saved Successfully.');   
        }else{
            return redirect()->route('technician')->with('error', 'Server Not Responed');
        }
    }
        
    /************************************************************************************************************************************************************************/
    public function technicianStatus($intCategoryId)
    {
       $rowCategoryData = CsFaculty::where('faculty_id',$intCategoryId)->first();
       // print_r($rowCategoryData);die;
        if($rowCategoryData->faculty_status==1){
            $status = 0;
        }else{
            $status = 1;
        }
        CsFaculty::where('faculty_id', $intCategoryId)->update(array('faculty_status' => $status));
        return redirect()->route('technician')->with('status', 'Entry Edited Successfully');
    }

/*************************************************************************
Technician Section
 ***************************************************************************/




 
/*************************************************************************
Role Section
 ***************************************************************************/
public function techrole(Request $request, $intid=0){

    /***********************Reset Filter Session ************/
    if($request->get('reset')==1)
    {
    Session::forget('FILTER_ROLE');
    return redirect()->route('faculty-role');   
    }
    /***********************Reset Filter Session ************/
    
    /***********************Bulk Action ************/
    $aryPostData = $request->all();
    //print_r($aryPostData);
    if(isset($aryPostData['bulkvalue']) && $aryPostData['bulkvalue']!=''):
      $aryPostData =$_POST;
     $aryIds = explode(',',$aryPostData['bulkvalue']);
    $intBulkAction = $aryPostData['bulkaction'];
    
    if($intBulkAction==1)
    {
        CsFacultyRole::whereIn('role_id', $aryIds)->delete();
        return redirect()->route('faculty-role')->with('status', 'Entry Deleted Successfully');
    }
    if($intBulkAction==2)
    {
        CsFacultyRole::whereIn('role_id', $aryIds)->update(['role_status' => 1]);
        return redirect()->route('faculty-role')->with('status', 'Entry Updated Successfully');
    }
    if($intBulkAction==3)
    {
        CsFacultyRole::whereIn('role_id',$aryIds)->update(['role_status' => 0]);
        return redirect()->route('faculty-role')->with('status', 'Entry Updated Successfully');
    }
    endIf;
    /***********************Bulk Action ************/
    
    
       /***********************Apply Condition ************/
    
       if($request->get('filter_keyword')!='')
       {
    
       Session::put('FILTER_ROLE', $request->get('filter_keyword'));
       Session::save(); 
    
    
       }
       /***********************Apply Condition ************/
    
    if(session()->has('FILTER_ROLE')){
    $strFilterKeyword = Session::get('FILTER_ROLE');
    $resroleData = CsFacultyRole::where('role_name', 'LIKE', "%{$strFilterKeyword}%")->paginate(20);
    }else{
        $resroleData = CsFacultyRole::paginate(20);
    }    
        $resfacroleData ='';
        if($intid>0){
            $resfacroleData = CsFacultyRole::where('role_id','=',$intid)->first();
        }
    //print_r($resroleData);die;
    
    
      $title='Manage Roles';
      return view('Csadmin.Technician.techrole' ,compact('title','resroleData','resfacroleData'));
      }
      
      public function roleproccess(Request $request){
        
        $user=Session::get("CS_ADMIN");
        $aryPostData = $request->all();
        if(isset($aryPostData['role_id']) && $aryPostData['role_id']>0)
        {
            $postobj = CsFacultyRole::where('role_id',$aryPostData['role_id'])->first();
        }else{
            $postobj = new CsFacultyRole;
        }   
        $postobj->role_ins_id = $user->user_id;
        $postobj->role_status = 1;
        $postobj->role_name = $aryPostData['role_name'];
        
        if($postobj->save())    
            {
                return redirect()->route('technician-role')->with('status', 'Entry Saved Successfully.');   
            }else{
                return redirect()->route('technician-role')->with('error', 'Server Not Responed');
            }
        
        }
    
        public function roleStatus($intCategoryId)
        {
            $rowCategoryData = CsFacultyRole::where('role_id',$intCategoryId)->first();
           // print_r($rowCategoryData);die;
            if($rowCategoryData->role_status==1){
                $status = 0;
            }else{
                $status = 1;
            }
            CsFacultyRole::where('role_id', $intCategoryId)->update(array('role_status' => $status));
            return redirect()->route('technician-role')->with('status', 'Entry Edited Successfully');
        }
     
        public function techpermission($intCategoryId)
    {

     $permissionData=   CsPermission::get();
     $rowPermission=   CsRolePermissions::where('rp_role_id', $intCategoryId)->get();

        $title='Permission';
    return view('Csadmin.Technician.techpermission' ,compact('title','permissionData','intCategoryId','rowPermission'));
    }
        
 
public function permissionProccess(Request $request)
{
    $aryPostData = $request->all();
    $id=$aryPostData['rp_role_id'];
    CsRolePermissions::where('rp_role_id', $id)->delete();
    foreach($aryPostData['permission'] as $key=>$label)
    {
       $postobj = new CsRolePermissions;
       $postobj->rp_role_id=$id;
       $postobj->rp_permission_id =$key;
       $postobj->rp_edit_status =0;
       $postobj->rp_aprrove_status =0;
  
  if(in_array(1,$label))
  {
   $postobj->rp_entry_status =1;
  }else{
      $postobj->rp_entry_status =0;
  }
  if(in_array(2,$label))
  {
   $postobj->rp_delete_status =1;
  }else{
      $postobj->rp_delete_status =0;
  }
  if(in_array(3,$label))
  {
   $postobj->rp_view_status =1;
  }else{
      $postobj->rp_view_status =0;
  }
  $postobj->save();
  }
  return redirect()->route('technician-role')->with('status', 'Entry Saved Successfully.');   
}



 /*************************************************************************
Role Section
 ***************************************************************************/
 
 /*************************************************************************
Group Section
 ***************************************************************************/
  
public function techniciangroup()
{
    $resTech = CsFaculty::get();
    $title='Technician Group';
    return view('Csadmin.Technician.techniciangroup' ,compact('title','resTech')); 
}


  /*************************************************************************
Group Section
 ***************************************************************************/
}