<?php

namespace Database\Seeders;

use App\Models\Seeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Seeting::create([
            'name'=>'abarce-Production',
            'logo'=>'website/image/abarce/logo.jpg',
            'phone'=>'018266622',
            'email'=>'email@s.com',
            'facebook'=>'facebook',
            'whatsapp'=>'whatsapp',
            'instagram'=>'instagram',
            'tweeter'=>'tweeter',
          
        ]);
    }
}
