<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AstrackTransactions extends Model
{
    use HasFactory;
    protected $table = 'astracktransactions';
    public $timestamps = false;
    public $primaryKey = 'ID';

    protected $fillable = [
        'accnumber',
        'amount',
    ];
}
