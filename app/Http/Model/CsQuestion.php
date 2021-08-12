<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsQuestion extends Model
{
    protected $table="cs_question";
    protected $primaryKey = 'question_id';
} 

