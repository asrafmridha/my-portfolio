<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = ['name','designation', 'about_description' ,'contact_button', 'cv_button', 'demo_button', 'email', 'alter_email', 'phone', 'alter_phone', 'address', 'logo', 'favicon', 'meta_title', 'meta_description', 'meta_keywords', 'copyright_text', 'location_image', 'phone_image', 'email_image', 'footer_description'];
}
