<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeepatient extends Model
{
    use HasFactory;
    protected $table='employeepatient';
    // protected $primaryKey = (['empid', 'patid']);
    //  protected $primaryKey= array('empid', 'patid');
}
