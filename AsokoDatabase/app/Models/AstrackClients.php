<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AstrackClients extends Model
{
    use HasFactory;

    public $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'accnumber',
        'assetdescr',
        'accbal',
        'referrername',
        'referrerphone',
        'category',
        'cumulativeamt',
        'fullamount',
        'baseamount',
        'datestarted',
        'trackerIMEI',
        'trackerphone',
        'deleted',
    ];
}
