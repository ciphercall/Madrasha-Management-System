<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class Role extends Model
{
    protected $primaryKey = 'role_id';
    use HasFactory;
    protected $fillable = [
       
        'name',
        
    ];
}