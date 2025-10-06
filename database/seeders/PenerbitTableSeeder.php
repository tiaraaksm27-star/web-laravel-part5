<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penerbit;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Penerbit1 = new Penerbit;
        $Penerbit1->penerbit = "Graha Ilmu";
        $Penerbit1->alamat = "Candi Gebang Permai Blok R-6 Yogyakarta";
        $Penerbit1->save();

        $Penerbit1 = new Penerbit;
        $Penerbit1->penerbit = "Andi ";
        $Penerbit1->alamat = "JL Beo 38-40 Yogyakarta";
        $Penerbit1->save();

        $Penerbit1 = new Penerbit;
        $Penerbit1->penerbit = "Lokomedia";
        $Penerbit1->alamat = "JL. Jambon, Perum. Persona Alam Hijau Kav 2. B-4, Kricak Yogyakarta";
        $Penerbit1->save();
    }
}
