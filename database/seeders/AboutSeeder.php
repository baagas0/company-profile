<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Setting;
        $add->slug = 'about-us';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'ABOUT US';
        $add->content = '<p>PT Cahaya Bangunan Konstruksi adalah perusahaan kontraktor yang menyediakan jasa pembangunan terutama Konstruksi gedung bertingkat dan perumahan. </p>
        <p>Kami menyediakan layanan profesional untuk memberikan hasil yang optimal dari kualitas Konstruksi bangunan.</p>
        <p>Kami berkomitmen untuk membangun visi klien kami untuk memberikan kualitas dan layanan terbaik yang melebihi harapan anda.</p>';
        $add->is_summernote = 1;
        $add->save();

        $add = new Setting;
        $add->slug = 'about-video';
        $add->type = 'video';
        $add->file = '';
        $add->title = 'ABOUT Video';
        $add->content = 'https://www.youtube.com/watch?v=hPoSTdHxAfI';
        $add->save();

        $add = new Setting;
        $add->slug = 'about-video-thumbnail';
        $add->type = 'image';
        $add->file = 'frontend/img/about/thumbnail.jpg';
        $add->title = 'ABOUT Video Thumbnail';
        $add->content = 'About Video Thumbnail';
        $add->save();

        $add = new Setting;
        $add->slug = 'sejarah';
        $add->type = 'text';
        $add->file = '';
        $add->title = 'Sejarah';
        $add->content = '<p>PT Cahaya Bangunan Konstruksi telah berdiri sejak tahun 1999 dan telah melayani lebih dari 1000+ klien dengan harga, desain, mutu dan kualitas terbaik untuk setiap klien.</p><p>Dengan pengalaman menangani lebih dari 1000+ klien anda dapat mempercayakan proyek pembangunan gedung bertingkat maupun perumahan kepada kami.</p>';
        $add->is_summernote = 1;
        $add->save();

        $add = new Setting;
        $add->slug = 'visi';
        $add->type = 'text';
        $add->file = 'frontend/img/about/1.jpg';
        $add->title = 'Visi';
        $add->content = '<p>PT Cahaya Bangunan Konstruksi memiliki visi :</p><p>Menjadi perusahaan kontraktor terbaik, terpercaya, berintegritas tinggi untuk menciptakan proyek konstruksi yang sukses dan yang terpenting adalah kepuasan pelanggan.</p>';
        $add->is_summernote = 1;
        $add->save();

        $add = new Setting;
        $add->slug = 'misi';
        $add->type = 'text';
        $add->file = 'frontend/img/about/2.jpg';
        $add->title = 'Misi';
        $add->content = '<p>PT Cahaya Bangunan Konstruksi memiliki misi : </p>
        <ul>
        <li>- Berkomitmen untuk mengutamakan kualitas, ketepatan waktu penyelesaian dengan biaya yang wajar.</li>
        <li>- Selektif dalam memilih subkontraktor yang bertanggung jawab, mempekerjakan dan mempertahankan karyawan profesional.</li>
        <li>- Menciptakan bangunan berkualitas tinggi dengan memperhatikan lingkungan kerja proyek yang sehat, aman dan nyaman.</li>
        <li>- Terus meningkatkan pengetahuan sumber daya manusia kami tentang teknologi konstruksi.</li>
        </ul>';
        $add->is_summernote = 1;
        $add->save();

        $add = new Setting;
        $add->slug = 'about-banner';
        $add->type = 'image';
        $add->file = 'frontend/img/about/banner.jpg';
        $add->title = 'ABOUT BANNER';
        $add->content = 'about banner';
        $add->save();

        $add = new Setting;
        $add->slug = 'knowledge-background';
        $add->type = 'image';
        $add->file = 'frontend/img/about/knowledge-background.jpg';
        $add->title = 'knowledge Background';
        $add->content = 'Background';
        $add->save();

        $add = new Setting;
        $add->slug = 'knowledge-image';
        $add->type = 'image';
        $add->file = 'frontend/img/about/knowledge-image.jpg';
        $add->title = 'knowledge Image';
        $add->content = 'Image';
        $add->save();

        $add = new Setting;
        $add->slug = 'knowledge-progress';
        $add->type = 'value';
        $add->file = '';
        $add->title = 'Desainer';
        $add->content = 'Knowledge Desainer';
        $add->value = 80;
        $add->save();

        $add = new Setting;
        $add->slug = 'knowledge-progress';
        $add->type = 'value';
        $add->file = '';
        $add->title = 'Bahan Baku';
        $add->content = 'Knowledge Bahan Baku';
        $add->value = 100;
        $add->save();

        $add = new Setting;
        $add->slug = 'knowledge-progress';
        $add->type = 'value';
        $add->file = '';
        $add->title = 'Konstruksi';
        $add->content = 'Knowledge Konstruksi';
        $add->value = 85;
        $add->save();


    }
}
