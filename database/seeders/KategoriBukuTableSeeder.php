<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriBuku;

class KategoriBukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriBuku1 = new KategoriBuku;
        $kategoriBuku1->kategori_buku = "Web";
        $kategoriBuku1->save();

        $kategoriBuku1 = new KategoriBuku;
        $kategoriBuku1->kategori_buku = "Mobile";
        $kategoriBuku1->save();

        $kategoriBuku1 = new KategoriBuku;
        $kategoriBuku1->kategori_buku = "Desain";
        $kategoriBuku1->save();
    }
}
