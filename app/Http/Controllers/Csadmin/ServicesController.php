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


class ServicesController extends Controller
{
  /***********************************************************************************************************************************************************************/

  public function services(Request $request, $intid=0){

/***********************Reset Filter Session ************/
if($request->get('reset')==1)
{
Session::forget('FILTER_ROLE');
return redirect()->route('services');   
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
    CsServices::whereIn('role_id', $aryIds)->delete();
    return redirect()->route('services')->with('status', 'Entry Deleted Successfully');
}
if($intBulkAction==2)
{
    CsServices::whereIn('role_id', $aryIds)->update(['role_status' => 1]);
    return redirect()->route('services')->with('status', 'Entry Updated Successfully');
}
if($intBulkAction==3)
{
    CsServices::whereIn('role_id',$aryIds)->update(['role_status' => 0]);
    return redirect()->route('services')->with('status', 'Entry Updated Successfully');
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
   $intSelectParent=0;
if(session()->has('FILTER_ROLE')){
$strFilterKeyword = Session::get('FILTER_ROLE');
$resroleData =CsServices::where('role_name', 'LIKE', "%{$strFilterKeyword}%")->get();
      $tree = $this->buildTree($resroleData);
      $strEntryHtml1 = $this->getCatgoryHtml($tree,'',0,$intSelectParent);  
}else{
    $resroleData =CsServices::get();
    $tree = $this->buildTree($resroleData);
    $strEntryHtml1 =$this->getCatgoryHtml($tree);;  
}    
    $resfacroleData ='';
    if($intid>0){
        $resfacroleData = CsServices::where('role_id','=',$intid)->first();
    }
  $title='Manage Services';
  return view('Csadmin.Services.services' ,compact('title','resroleData','resfacroleData','strEntryHtml1'));
  }

/**************************************************************************************************************************************************************************/

  public function servicesDelete($intCategoryId)
    {
        CsServices::where('role_id', $intCategoryId)->delete();
        return redirect()->route('services')->with('status', 'Entry Deleted Successfully');
    }

/***************************************************************************************************************************************************************************/
  public function serviceproccess(Request $request){
    $user=Session::get("CS_ADMIN");
    $aryPostData = $request->all();
    /* echo "<pre>";
    print_r($aryPostData);die; */
    if(isset($aryPostData['role_id']) && $aryPostData['role_id']>0)
    {
        $postobj = CsServices::where('role_id',$aryPostData['role_id'])->first();
    }else{
        $postobj = new CsServices;
    }   
    $postobj->role_ins_id = $user->user_id;
    $postobj->role_status = 1;
    $postobj->role_name = $aryPostData['role_name'];
    $postobj->role_parent = $aryPostData['role_parent'];
    if($postobj->save())    
        {
            return redirect()->route('services')->with('status', 'Entry Saved Successfully.');   
        }else{
            return redirect()->route('services')->with('error', 'Server Not Responed');
        }
    }

/****************************************************************************************************************************************************************************/
    public function roleStatus($intCategoryId)
    {
        $rowCategoryData = CsServices::where('role_id',$intCategoryId)->first();
        if($rowCategoryData->role_status==1){
            $status = 0;
        }else{
            $status = 1;
        }
        CsServices::where('role_id', $intCategoryId)->update(array('role_status' => $status));
        return redirect()->route('services')->with('status', 'Entry Edited Successfully');
    }
  /***************************************************************************************************************************************************************************/
   
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
      return redirect()->route('services')->with('status', 'Entry Saved Successfully.');   
    }

    /************************************************************************************************************************************************************************/
   
    public function addNewService($intfacultyId=0)
    {
        $intSelectParent=0;
        $rowCategoryData=array();
        if($intfacultyId>0)
        {
            $rowCategoryData = CsServices::where('role_id',$intfacultyId)->first();
            $intSelectParent = $rowCategoryData->role_parent;
        } 
      $resCategoryListData =CsServices::get();
      $tree = $this->buildTree($resCategoryListData);
      $strEntryHtml = $this->getCatgoryEntryChildHtml($tree,'',0,$intSelectParent);          
      $title='Add New Service';
      return view('Csadmin.Services.addNewService' ,compact('title','strEntryHtml','rowCategoryData'));
    }

  /***************************************************************************************************************************************************************************/  
    function buildTree($elements, $parentId = 0) 
    {
        $branch = array();
        foreach ($elements as $element) {
           if ($element['role_parent'] == $parentId) {
                $children = $this->buildTree($elements, $element['role_id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            } 
        }
        return $branch;
    }

  /****************************************************************************************************************************************************************************/  
  
  function getCatgoryEntryChildHtml($tree,$strExtraHtml='',$intLevel=0,$intSelectParent)
  {
   $strHtml=$strExtraHtml;
   $intExtraLevel = $intLevel;
        foreach($tree as $key=>$label)
          {
              $strStyle='';
              if($label['role_parent']!=0)
              {
              $strStyle=' style="background:#eaeaea"';
             
              }
               if($label['role_parent']==0)
              {
                   $intLevel=0;
              }
              $strExtraData = '';
              for($i=0;$i<$intLevel;$i++)
              {
                   $strExtraData .='-';
              }
             $strselect ='';
             if($label['role_id']==$intSelectParent)
             {   
                 $strselect ='selected="selected"';
             }
            $strHtml .='<option '.$strselect.' value="'.$label['role_id'].'">'.$strExtraData.$label['role_name'].'</option>';


if(isset($label->children) && $intLevel!=2)
{
    $intLevel++;
    $strHtml =$this->getCatgoryEntryChildHtml($label->children,$strHtml,$intLevel,$intSelectParent);
    $intLevel = $intExtraLevel;

}
}
   
   return $strHtml;
       exit();
  }

 

/****************************************************************************************************************************************************************************/

    function getCatgoryHtml($tree,$strExtraHtml='',$intLevel=0){
            
        $strHtml=$strExtraHtml;
        if(count($tree)>0){
        foreach($tree as $key=>$label){
            $strStyle ='';
            if($label['role_parent']==0){
                $intLevel=0;
            }else{
              $intLevel = self::getcategorylevel($label);
            }
            $strExtraData = '';
            for($i=0;$i<$intLevel;$i++){
                $strExtraData .='<i data-feather="minus"></i>';
            }
            // $strHtml .='<tr>
            //                 <td scope="row" style="text-align:center;vertical-align: middle;"><input type="checkbox" id="selectAll" class="clsSelectSingle" name="icat_id[]" value="'.$label['icat_id'].'">
            //             </td>';
            $strHtml .='<tr>
            <td><p class="mg-b-0 tx-medium">'.$strExtraData.$label['role_name'].'</p></td>'; 
            // $strHtml .='<td style="text-align:center">0</td>';
            if($label['icat_id']==16)
            {                $strHtml .='<td colspan="1" style="text-align:center"></td>';
  }else
            {
            $strHtml .='<td>
                            <div class="d-flex align-self-center justify-content-center">
                            <nav class="nav nav-icon-only">
                            <a href="'.route('question',$label['role_id']).'"  class="btn btn-info btn-icon mg-r-5" title="Questions" style="padding:0px 5px;"><i class="fas fa-copy" style="font-size:11px;"></i></a>
                            <a href="'.route('add-new-service',$label['role_id']).'" onclick="return confirm(\'Are you sure?\')" class="btn btn-primary btn-icon mg-r-5" title="Edit" style="padding:0px 5px;"><i class="fas fa-pencil-alt" style="font-size:11px;"></i></a>
                        </nav>
                            </div>
                        </td></tr>';}
            if(isset($label->children)){
                $intLevel++;
                $strHtml =$this->getCatgoryHtml($label->children,$strHtml,$intLevel);
            }
        } } else{
            $strHtml = '<td colspan="6" style="text-align:center">No Result Found</td>';
        } 
        return $strHtml;
        exit();     
    }

/*******************************************************************************************************************************************************************************/ 
    function getcategorylevel($aryCategory)
    {
        if($aryCategory['role_parent']==0)
        {
            return 0;
        }else{
          $res = CsServices::where('role_id','=',$aryCategory['role_parent'])->first();
            if($res->role_parent==0)
            {
                return 1;
            }else{
               return 2; 
            }
        }
    }

   /**************************************************************************************************************************************************************************/ 
   public function facultyrole(Request $request, $intid=0){

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
        CsServices::whereIn('role_id', $aryIds)->delete();
        return redirect()->route('faculty-role')->with('status', 'Entry Deleted Successfully');
    }
    if($intBulkAction==2)
    {
        CsServices::whereIn('role_id', $aryIds)->update(['role_status' => 1]);
        return redirect()->route('faculty-role')->with('status', 'Entry Updated Successfully');
    }
    if($intBulkAction==3)
    {
        CsServices::whereIn('role_id',$aryIds)->update(['role_status' => 0]);
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
    $resroleData = CsServices::where('role_name', 'LIKE', "%{$strFilterKeyword}%")->paginate(20);
    }else{
        $resroleData = CsServices::paginate(20);
    }    
        $resfacroleData ='';
        if($intid>0){
            $resfacroleData = CsServices::where('role_id','=',$intid)->first();
        }
    //print_r($resroleData);die;
    
    
      $title='Manage Roles';
      return view('Csadmin.Services.facultyrole' ,compact('title','resroleData','resfacroleData'));
      }
}