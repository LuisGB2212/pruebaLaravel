<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_company',
        'phone_company',
        'address_company',
        'facebook_company',
        'twitter_company',
        'instagram_company',
        'google_company',
    ];
}
