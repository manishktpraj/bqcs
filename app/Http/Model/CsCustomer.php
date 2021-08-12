<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CsCustomer extends Model
{
    protected $table="cs_customer";
    protected $primaryKey = 'customer_id';
} 

