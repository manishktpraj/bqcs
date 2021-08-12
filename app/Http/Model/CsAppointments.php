<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsAppointments extends Model
{
    protected $table="cs_appointments";
    protected $primaryKey = 'ca_id';
	public function customer()
    {
        return $this->hasOne(CsCustomer::class,"customer_id","ca_customer_id");
    }

    public function technician()
    {
        return $this->hasOne(CsFaculty::class,"faculty_id","ca_technician_id");
    }
} 