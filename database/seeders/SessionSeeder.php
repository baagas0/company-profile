<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
        	'id'			=> '7zIDA1m0Va1R54yRbRjEWr4tkSmd8klyYaLzNqaR',
        	'user_id'		=> '1',
        	'ip_address'	=> '127.0.0.1',
        	'user_agent'	=> 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0',
        	'payload'		=> 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibndaSEF4T3hyMmJCR2pLU3JrbFUybEt3VVhsZ2Q2SFFiNDFsSld3bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vY29tcGFueS50ZXN0L2FkbWluL3NsaWRlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRqRGdjQm5nMDhGYVo4RC83Rm5CbHlPaWEwNUJWUFJuSFRKak1ZU0M2cDFWNUZrR0hRUjlQdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkakRnY0JuZzA4RmFaOEQvN0ZuQmx5T2lhMDVCVlBSbkhUSmpNWVNDNnAxVjVGa0dIUVI5UHUiO30=',
        	'last_activity'	=> '1610218837',
        ]);
    }
}
