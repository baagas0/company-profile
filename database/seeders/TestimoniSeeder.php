<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Setting;
        $add->slug = 'testimoni';
        $add->type = 'text';
        $add->file = 'frontend/img/testimonial/1.jpg';
        $add->title = 'Andy Adrian';
        $add->content = 'PT yang satu ini memang top markotop, selain hasil dan harganya yang bagus pelayanan juga oke banget.';
        $add->save();

        $add = new Setting;
        $add->slug = 'testimoni';
        $add->type = 'text';
        $add->file = 'frontend/img/testimonial/2.jpg';
        $add->title = 'Akbar Pratama';
        $add->content = 'Waah, seneng banget dan ga nyangka kalau hasilnya di luar ekspetasi pertama saya saat memesan di PT ini.';
        $add->save();

        $add = new Setting;
        $add->slug = 'testimoni';
        $add->type = 'text';
        $add->file = 'frontend/img/testimonial/3.jpg';
        $add->title = 'Galih Mahardika';
        $add->content = 'PT seperti ini nih yang harus di dukung, kerjanya mantep dan karywannya juga pada gerak cepat menjadikan rumah saya.';
        $add->save();
    }
}
