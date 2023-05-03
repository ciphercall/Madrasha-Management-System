<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_box extends Model
{
    use HasFactory;

    protected $fillable = [
        'brunch_id', 'brunch_name', 'category', 'date', 'receiver_name', 'address', 
        'box_no', 'phone', 'provider_name', 'comment'
    ];

    protected $primaryKey = 'donationbox_id';
}
