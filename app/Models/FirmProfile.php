<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmProfile extends Model
{
    use HasFactory;

    protected $table = 'firm_profiles';

    protected $fillable = [
        'user_id',
        'firm_name',
        'registration_number',
        'gst_number',
        'pan_number',
        'tan_number',
        'cin_number',
        'business_type',
        'contact_person_name',
        'contact_person_mobile',
        'email',
        'website_url',
        'firm_logo',
        'address',
        'city',
        'state',
        'pincode',
        'branch_count',
        'status',
    ];
}

