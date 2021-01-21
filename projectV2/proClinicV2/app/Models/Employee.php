<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='employee';

    protected $primaryKey = 'idemployee';

    public function department(){

         # select * from users where id= $this->user_id
         return  $this->belongsTo(Department::class);

    }
    
}
