<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Setting;
        $add->slug = 'service';
        $add->type = 'image';
        $add->file = 'frontend/img/icon/icon5.png';
        $add->title = 'Bahan Terbaik';
        $add->content = 'Kami selalu menggunakan bahan terbaik dan terpercaya di kelasnya.';
        $add->save();

        $add = new Setting;
        $add->slug = 'service';
        $add->type = 'image';
        $add->file = 'frontend/img/icon/icon6.png';
        $add->title = 'Desain Terkini';
        $add->content = 'Desainer kami siap memberikan hasil yang terbaik untuk anda.';
        $add->save();

        $add = new Setting;
        $add->slug = 'service';
        $add->type = 'image';
        $add->file = 'frontend/img/icon/icon8.png';
        $add->title = 'Legal Dokumen';
        $add->content = 'Perusahaan kami telah di bekali dengan dokumen legal dan resmi dari pemerintah';
        $add->save();
    }
}
