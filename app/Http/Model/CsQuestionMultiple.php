<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsQuestionMultiple extends Model
{
    protected $table="cs_question_multiple";
    protected $primaryKey = 'qm_id';
    public function question()
    {
        return $this->hasOne(CsQuestion::class,"question_id","qa_question_id");
    }
	 
} 