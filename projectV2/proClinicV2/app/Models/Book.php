<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded;
    protected $table='book';
   
    // protected $primaryKey =['empid', 'patid','idapp'];
   
}
