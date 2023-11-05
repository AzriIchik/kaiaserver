<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Campus::create([
            "name" => "Kuala Lumpur",
            "description" => "Campus Located in Cheras, Kuala Lumpur",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Alor Setar",
            "description" => "Campus Located in Alor Setar, Kedah",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Batu Pahat",
            "description" => "Campus Located in Batu Pahat, Johor",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Bangi",
            "description" => "Campus Located in Batu Bangi, Selangor",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Ipoh",
            "description" => "Campus Located in Ipoh, Perak",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Kota Baharu",
            "description" => "Campus Located in Kota Baharu, Kelantan",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
        Campus::create([
            "name" => "Kuantan",
            "description" => "Campus Located in Kuantan, Pahang",
            "imgurl" => "https://bangi.kptm.edu.my/images/kemudahan/al-ghazali-2.jpg"
        ]);
    }
}
