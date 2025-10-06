<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tag1 = new Tag;
        $Tag1->tag = "PHP";
        $Tag1->save();

        $Tag1 = new Tag;
        $Tag1->tag = "MySQL";
        $Tag1->save();

        $Tag1 = new Tag;
        $Tag1->tag = "Android";
        $Tag1->save();
    }
}
