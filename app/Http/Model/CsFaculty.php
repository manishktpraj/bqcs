<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsFaculty extends Model
{
    protected $table="cs_technician";
    protected $primaryKey = 'faculty_id';

    public function role()
    {
        return $this->hasOne(CsFacultyRole::class,"role_id","faculty_role_id");
    }
} 