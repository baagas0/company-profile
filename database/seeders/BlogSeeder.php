<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new Blog;
        $add->user_id = 1;
        $add->image = 'frontend/img/blog/1.jpg';
        $add->title = 'Kemudahan Bagi Konsumen Yang Tertarik Untuk Mendapatkan Hunian Masa Depan';
        $add->content = 'Tinggal di kawasan hunian yang mampu menjadikan kualitas hidup kita lebih baik, serta memiliki nilai jual hunian yang mampu menjadi alternatif investasi masa depan yang menguntungkan. Itulah konsep promosi Sedayu City Kelapa Gading Jakarta yang saat ini sedang menjadi pembicaraan pelaku properti di Jakarta.

<blockquote>Sebuah konsep promosi yang menarik dan amat jarang didapatkan di proyek properti yang saat ini sedang banyak di pasarkan di Jakarta. Karena bukan perkara mudah untuk mendapatkan dan merencanakan sebuah hunian yang bisa menghadirkan ke-2 konsep tersebut dalam satu kesatuan utama yang akan membuat konsumen dan investor beruntung membeli unit properti di kawasan tersebut.</blockquote>

Bicara soal progress penjualan yang saat ini sedang berjalan dengan model promosi Sedayu City Kelapa Gading Jakarta. Hingga saat ini memang terlihat cukup menarik bagi konsumen dan investor. Proyek yang direncanakan akan diserah terimakan kepada konsumen pada bulan September 2018 ini memang cukup fenomenal. Angsurannya bisa di cicil panjang yaitu selama 5 tahun. Wajar jika pada akhirnya banyak peminat yang ingin mendapatkan unit-unit di Sedayu City, seperti ruko/rukan food street. Ditawarkan dengan harga Rp5,9 miliar dengan spesifikasi bangunan 4,5 lantai sejak di launching pada April 2017 lalu, hingga saat ini sudah laku terjual 75%. #try';
        $add->save();
    }
}
