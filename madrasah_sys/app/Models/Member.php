<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'date_birth', 'father', 'mother', 'family_member',
        'blood_group', 'gender', 'eduction_type', 'education_skill', 'occupation', 'workplace',
        'country', 'presentadd', 'parmanentadd', 'workplace_address', 'relationship', 'nid',
         'torikot_date', 'sobok_type', 'brunch_id', 'brunch_name', 
        'donation_box_id', 'occasion', 'duty','city','role','status','occasions'
    ];

    protected $primaryKey = 'id';
}
