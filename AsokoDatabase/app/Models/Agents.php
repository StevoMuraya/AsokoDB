<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;
    public $primaryKey = 'ID';
    public $timestamps = false;


    protected $fillable = [
        'A_Code',
        'A_FirstName',
        'A_OtherNames',
        'A_IDNumber',
        'A_PhoneNumber',
        'A_Percentage',
        'A_balance',
        'A_Location',
        'DateStarted',
        'Password',
        'deleted',
    ];
}
