<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\User;
use App\Dokter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Admin::create([
          'name'  => 'Rifqi',
          'email' => 'rifqi_super@farmasi.com',
          'password'  => bcrypt('12345678')
        ]);

        User::create([
          'name'  => 'Rico',
          'email' => 'rico_medrep@farmasi.com',
          'password'  => bcrypt('12345678')
        ]);

        Dokter::create([
          'nama' => 'Teguh Santoso',
          'spesialisasi' => 'Pembuluh Darah',
          'kontak'=> '081321234567',
          'updated_at' => null,
          'created_at' => null
        ]);
    }
}
