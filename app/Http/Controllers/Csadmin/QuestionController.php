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


class QuestionController extends Controller
{
  
  /***************************************************************************************************************************************************************************/
    public function question($intCategoryId)
    {
     $faculty_role =CsServices::where('role_id', $intCategoryId)->first();
     $questionData=   CsQuestion::where('service_id', $intCategoryId)->get();
     $rowPermission=   CsRolePermissions::where('rp_role_id', $intCategoryId)->get();
     $title='Question';
    return view('Csadmin.Question.question' ,compact('title','questionData','intCategoryId','rowPermission','faculty_role'));
    }

/*****************************************************************************************************************************************************************************/
 

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
   
 /**************************************************************************************************************************************************************************/ 
 
 public function addNewQuestion($service_id,$intfacultyId=0)
  {
   
    $intSelectParent=0;
    $rowCategoryData=array();
    if($intfacultyId>0)
    {
        $rowCategoryData = CsQuestion::where('question_id',$intfacultyId)->first();
     } 

    $title='Question';
    return view('Csadmin.Question.addNewQuestion' ,compact('title','service_id','rowCategoryData'));
  }

  /*************************************************************************************************************************************************************************/
 

   /**************************************************************************************************************************************************************************/ 
 
 public function childquestion($intfacultyId=0)
 {
  
   $intSelectParent=0;
   $rowCategoryData=array();
   if($intfacultyId>0)
   {
       $rowCategoryData = CsQuestion::where('question_id',$intfacultyId)->first();
    } 

   $title='Question';
   return view('Csadmin.Question.childquestion' ,compact('title','rowCategoryData'));
 }

 /*************************************************************************************************************************************************************************/

  public function questionproccess(Request $request){
    
    $user=Session::get("CS_ADMIN");
    $aryPostData = $request->all();
    if(isset($aryPostData['question_id']) && $aryPostData['question_id']>0)
    {
        $postobj = CsQuestion::where('question_id',$aryPostData['question_id'])->first();
    }else{
        $postobj = new CsQuestion;
    }   
    $postobj->service_id = $aryPostData['service_id'];
    $postobj->question_status = 1;
    $postobj->question_name = $aryPostData['question_name'];
    //$postobj->question_type = $aryPostData['question_type'];
    $postobj->question_parent = $aryPostData['service_id'];
    //$postobj->question_label = $aryPostData['question_label'];
    //$postobj->question_option = $aryPostData['question_option'];


    
    if($postobj->save())    
        {
            return redirect()->route('question',$aryPostData['service_id'])->with('status', 'Entry Saved Successfully.');   
        }else{
            return redirect()->route('question',$aryPostData['service_id'])->with('error', 'Server Not Responed');
        }
    }
     
 /***************************************************************************************************************************************************************************/ 

 public function deleteQuestion($service_id,$intCategoryId)
    {
        CsQuestion::where('question_id', $intCategoryId)->delete();
        return redirect()->route('question',$service_id)->with('status', 'Entry Deleted Successfully');
 
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
                            <a href="'.route('servicesDelete',$label['role_id']).'" onclick="return confirm(\'Are you sure?\')" class="btn btn-danger btn-icon mg-r-5" title="Delete" style="padding:0px 5px;"><i class="fas fa-trash-alt" style="font-size:11px;"></i></a>
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

    function updateorder(Request $request)
	{
        $aryPostData = $request->all();


	    foreach($aryPostData['sliderid'] as $key=>$label)
	    {
            CsQuestion::where('question_id', '=', $id)->update(array('question_sequence' => $aryPostData['ordernum']));
	        //CsServices::updateAll(['question_sequence'=>$aryPostData['ordernum'][$key]],['stage_id'=>$label]);  
	    }
	    echo 'ok';
	    exit;
	}  
}