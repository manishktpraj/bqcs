<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsTechnicianGroup extends Model
{
    protected $table="cs_technician_group";
    protected $primaryKey = 'group_id';
} 