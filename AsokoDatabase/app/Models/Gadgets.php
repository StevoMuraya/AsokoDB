<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadgets extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'ID';

    protected $fillable = [
        'Account',
        'gPhone',
        'Command1',
        'Command2',
        'Password',
        'Narration',
        'Count',
        'OfferCmd',
        'AccAmount',
        'Manager',
        'deleted',
    ];
}
