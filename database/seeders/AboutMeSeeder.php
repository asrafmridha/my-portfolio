<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutMe::create([
            'heading' => 'My introduction',
            'description' => 'Web developer, with extensive knowledge and years of experience, working in web technologies and UI/UX design, delivering quality work.',
            'experience' => '1',
            'completed_project' => '5',
            'companies' => '2',
            'cv' => 'asraf_mridha',
        ]);
    }
}
