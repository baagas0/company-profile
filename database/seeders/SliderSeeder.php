<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Slider;
        $add->image   = 'frontend/img/slider/slider1.jpg';
        $add->content =	'<h4>Pembangunan <br> Berkualitas</h4>
        <p>Perusahaan kontraktor dengan jasa pembangunan gedung bertingkat dan juga perumakan dengan kualitas terbaik di kelasnya.</p>';
        $add->is_link = 'https://google.com';
        $add->is_active = 1;
        $add->save();

        $add = new Slider;
        $add->image   = 'frontend/img/slider/slider2.jpg';
        $add->content = '<h4>Kunjungan Manager <br> PT Cahaya Bangunan</h4>
        <p>Manager kami secara langsung turun tangan untuk melihat progress dan perkembangan proyek kami yang sedang berjalan di beberapa daerah saat ini.</p>';
        $add->is_link = 'https://google.com';
        $add->is_active = 1;
        $add->save();
    }
}
