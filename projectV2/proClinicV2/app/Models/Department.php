<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table='department';
    protected $primaryKey = 'depid';
    protected $guarded;
    // function doctor(){
    //     return  $this->hasMany(Employee::class);
    // }
}