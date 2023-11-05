<?php

namespace Database\Seeders;

use App\Models\Gred;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gred::insert([
            ["id" => 1, "gred" => "A+", "description" => "Cemerlang Tertinggi"],
            ["id" => 2, "gred" => "A ", "description" => "Cemerlang Tinggi"],
            ["id" => 3, "gred" => "A-", "description" => "Cemerlang"],
            ["id" => 4, "gred" => "B+", "description" => "Kepujian Tertinggi"],
            ["id" => 5, "gred" => "B ", "description" => "Kepujian Tinggi"],
            ["id" => 6, "gred" => "C+", "description" => "Kepujian Atas"],
            ["id" => 7, "gred" => "C ", "description" => "Kepujian"],
            ["id" => 8, "gred" => "D ", "description" => "Lulus Atas"],
            ["id" => 9, "gred" => "E ", "description" => "Lulus"],
            ["id" => 10, "gred" => "F ", "description" => "Gagal"],
            ["id" => 11, "gred" => "TH", "description" => "Tidak Hadir"]
        ]);
    }
}
/*

*/
