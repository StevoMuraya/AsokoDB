<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpesaTransc extends Model
{
    use HasFactory;
    protected $table = 'mpesatransc';
    public $primaryKey = 'ID';
    public $timestamps = false;
}
