<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galery;
use App\Models\Setting;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // =========================================================
        $add = new Setting;
        $add->slug = 'galeri-banner';
        $add->type = 'image';
        $add->file = 'frontend/img/galeri/banner-galeri.jpg';
        $add->title = 'Galeri Banner';
        $add->content = 'Galeri Banner';
        $add->save();
        // ==========================================================

        $add = new Galery;
        $add->testimoni_id = 1;
        $add->image = 'frontend/img/galeri/1.jpg';
        $add->title = 'Perumahan Griya Asri';
        $add->description = 'Pembangunan dilaksanakan tanggal 12 Febuari 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 2;
        $add->image = 'frontend/img/galeri/2.jpg';
        $add->title = 'Perumahan Sari Rasa';
        $add->description = 'Pembangunan dilaksanakan tanggal 15 Maret 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 3;
        $add->image = 'frontend/img/galeri/3.jpg';
        $add->title = 'Rumah Minimalis';
        $add->description = 'Pembangunan rumah pribadi milik pak Sutedjo';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 1;
        $add->image = 'frontend/img/galeri/4.jpg';
        $add->title = 'Perumahan Griya Asri';
        $add->description = 'Pembangunan dilaksanakan tanggal 05 Juni 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 2;
        $add->image = 'frontend/img/galeri/5.jpg';
        $add->title = 'Perumahan Rasa Murni';
        $add->description = 'Pembangunan dilaksanakan tanggal 10 September 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 3;
        $add->image = 'frontend/img/galeri/6.jpg';
        $add->title = 'Perumahan Griya Harmoni';
        $add->description = 'Pembangunan dilaksanakan tanggal 22 November 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 1;
        $add->image = 'frontend/img/galeri/7.jpg';
        $add->title = 'Perumahan Griya Puspa Sari Residence';
        $add->description = 'Pembangunan dilaksanakan tanggal 22 November 2020';
        $add->save();

        $add = new Galery;
        $add->testimoni_id = 2;
        $add->image = 'frontend/img/galeri/8.jpg';
        $add->title = 'Perumahan Griya Harmoni';
        $add->description = 'Pembangunan dilaksanakan tanggal 15 Desember 2020';
        $add->save();
    }
}
