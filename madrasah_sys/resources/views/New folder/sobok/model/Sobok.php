<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobok extends Model
{
    use HasFactory;
    protected $fillable = [
        'txtSobok_type'
    ];

    protected $primaryKey = 'id';
}
