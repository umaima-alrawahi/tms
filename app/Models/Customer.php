<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['First_Name', 'Second_Name', 'Third_Name', 'Last_Name', 'Email_Address', 'Phone', 'Address', 'City', 'IDNumber', 'IDCardCopy', 'BirthDate', 'gender', 'Flight', 'Country', 'Check_In', 'Check_out', 'Adults', 'Childrens', 'Hotel_rating', 'holdername', 'cardno', 'cvcpwd', 'expmonth', 'expyear'];
    use HasFactory;
}
