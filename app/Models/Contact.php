<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    public $fillable = ['date_pickup','drop_off_date','first_name','last_name','phone', 'email','address', 'license_no','car_brand'];
}
