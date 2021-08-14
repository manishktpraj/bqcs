<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsQusAns extends Model
{
    protected $table="cs_ques_ans";
    protected $primaryKey = 'qa_id';
    public function question()
    {
        return $this->hasOne(CsQuestion::class,"question_id","qa_question_id");
    }
	 
} 