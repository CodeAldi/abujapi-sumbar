<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'test admin',
            'email' => 'test@test.com',
            'password' => 'testadmin',
        ]);

        \App\Models\KategoriBerita::create([
            'judul_kategori' => 'Tidak berkategori',
        ]);

        \App\Models\KategoriGaleri::create([
            'judul_kategori' => 'Tidak berkategori',
            'slug' => Str::slug('Tidak berkategori'),
        ]);
        \App\Models\KategoriKegiatan::create([
            'judul_kategori' => 'Tidak berkategori',
            'slug' => Str::slug('Tidak berkategori'),
        ]);
    }
}
