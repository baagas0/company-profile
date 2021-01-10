<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Setting;
        $add->slug = 'title';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Title';
        $add->content = 'PT Cahaya Bangunan Konstruksi';
        $add->save();

        $add = new Setting;
        $add->slug = 'favicon';
        $add->type = 'text';
        $add->file = 'frontend/img/logo/favicon.png';
        $add->title = 'Favicon';
        $add->content = 'Favicon Website';
        $add->save();

        $add = new Setting;
        $add->slug = 'logo-white';
        $add->type = 'text';
        $add->file = 'frontend/img/logo/logo.png';
        $add->title = 'Logo';
        $add->content = 'Logo Putih';
        $add->save();

        $add = new Setting;
        $add->slug = 'logo-dark';
        $add->type = 'text';
        $add->file = 'frontend/img/logo/logo-dark.png';
        $add->title = 'LOGO';
        $add->content = 'Logo Hitam';
        $add->save();


        

        $add = new Setting;
        $add->slug = 'alamat';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Alamat';
        $add->content = 'JI. Ratu Kalinyamat, Blingoh, Donorojo, Jepara ';
        $add->save();

        $add = new Setting;
        $add->slug = 'phone';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Phone';
        $add->content = '6285224959667 &<br> 628121953106';
        $add->save();

        $add = new Setting;
        $add->slug = 'email';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Email';
        $add->content = 'hi@cahayabangunan.com';
        $add->save();

        $add = new Setting;
        $add->slug = 'blog-banner';
        $add->type = 'text';
        $add->file = 'frontend/img/blog/banner.jpg';
        $add->title = 'Blog Banner';
        $add->content = 'Blog Banner';
        $add->save();

        $add = new Setting;
        $add->slug = 'blog-background';
        $add->type = 'text';
        $add->file = 'frontend/img/blog/background.jpg';
        $add->title = 'Blog Background';
        $add->content = 'Blog Background';
        $add->save();

        $add = new Setting;
        $add->slug = 'blog-description';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Blog Description';
        $add->content = 'Update berita berita terbaru kami melalui blog yang akan update setiap ada informasi yang harus kami sampaikan kepada seluruh klien kami maupun calon klien klien kami';
        $add->save();
    }
}
