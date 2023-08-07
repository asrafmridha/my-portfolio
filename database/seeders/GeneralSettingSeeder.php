<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'name' => 'Asraf Mridha',
            'designation' => 'Laravel Backend Developer',
            'about_description' => 'High level experience in web development and capable of learning new things quickly',
            'contact_button' => 'contact me',
            'cv_button' => 'Download CV',
            'demo_button' => "Demo",
            'email' => 'asrafmridha@gmail.com',
            'alter_email' => 'asrafmridha@gmail.com',
            'phone' => '+01776716093',
            'alter_phone' => '+07679433941',
            'fb_link' => 'https://www.facebook.com/kosto.asraful',
            'github_link' => 'https://github.com/asrafmridha',
            'linkedin_link' => 'https://www.linkedin.com/in/asrafmridha',
            'first_image'=>'',
            'second_image'=>'',
            'contact_bg'=>'',
            'address' => '193, Mohammadpur Dhaka',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'meta_title' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_description' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_keywords' => 'Lorem ipsum dolor, sit amet consectetur',
            'copyright_text' => 'Copyright © 2023. Designed & Developed by',
            'location_image' => '<i class="pe-7s-map-marker"></i>',
            'phone_image' => '<i class="ti-mobile"></i>',
            'email_image' => '<i class="ti-email"></i>',
        ]);
    }
}
