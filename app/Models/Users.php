<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = ['name','email','role','date_pickup','date_drop_off','first_name','address','car_brand','license_no','Price'];
}

