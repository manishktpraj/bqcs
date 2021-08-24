<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsQuestion extends Model
{
    protected $table="cs_question";
    protected $primaryKey = 'question_id';
	
	public function questionmultiple()
    {
        return $this->hasMany(CsQuestionMultiple::class,"qm_question_id","question_id");
    }
} 

