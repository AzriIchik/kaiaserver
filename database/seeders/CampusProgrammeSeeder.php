<?php

namespace Database\Seeders;

use App\Models\CampusProgramme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampusProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampusProgramme::insert([
            [
                "cp_id" => "1BK101",
                "campus_id" => 1,
                "programme_code" => "BK101",
            ],
            [
                "cp_id" => "1CC101",
                "campus_id" => 1,
                "programme_code" => "CC101",
            ],
            [
                "cp_id" => "1AA103",
                "campus_id" => 1,
                "programme_code" => "AA103",
            ]
        ]);

        CampusProgramme::insert([
            [
                "cp_id" => "4BS101",
                "campus_id" => 4,
                "programme_code" => "BS101"
            ],
            [
                "cp_id" => "4AA001",
                "campus_id" => 4,
                "programme_code" => "AA001"
            ],
            [
                "cp_id" => "4AA101",
                "campus_id" => 4,
                "programme_code" => "AA101"
            ],
            [
                "cp_id" => "4AB101",
                "campus_id" => 4,
                "programme_code" => "AB101"
            ],
            [
                "cp_id" => "4AF101",
                "campus_id" => 4,
                "programme_id" => "AF101"
            ]
        ]);

        CampusProgramme::insert(
            [
                [
                    "cp_id" => "7EV101",
                    "campus_id" => 7,
                    "programme_code" => "EV101",
                ],
                [
                    "cp_id" => "7BS101",
                    "campus_id" => 7,
                    "programme_code" => "BS101",
                ],
                [
                    "cp_id" => "7AA101",
                    "campus_id" => 7,
                    "programme_code" => "AA101",
                ],
                [
                    "cp_id" => "7AB101",
                    "campus_id" => 7,
                    "programme_code" => "AB101",
                ],
                [
                    "cp_id" => "7AB107",
                    "campus_id" => 7,
                    "programme_code" => "AB107"
                ]
            ]
        );

        CampusProgramme::insert([
            [
                "cp_id" => "2AT101",
                "campus_id" => 2,
                "programme_code" => "AT101"
            ],
            [
                "cp_id" => "2CC101",
                "campus_id" => 2,
                "programme_code" => "CC101"
            ],
            [
                "cp_id" => "2AA101",
                "campus_id" => 2,
                "programme_code" => "AA101"
            ],
            [
                "cp_id" => "2AB101",
                "campus_id" => 2,
                "programme_code" => "AB101"
            ],
            [
                "cp_id" => "2AO101",
                "campus_id" => 2,
                "programme_code" => "AO101"
            ]
        ]);

        CampusProgramme::insert([
            [
                "cp_id" => "5BE101",
                "campus_id" => 5,
                "programme_code" => "BE101",
            ],
            [
                "cp_id" => "5CT104",
                "campus_id" => 5,
                "programme_code" => "CT104",
            ],
            [
                "cp_id" => "5CM101",
                "campus_id" => 5,
                "programme_code" => "CM101",
            ],
            [
                "cp_id" => "5CM102",
                "campus_id" => 5,
                "programme_code" => "CM102",
            ],
            [
                "cp_id" => "5AM101",
                "campus_id" => 5,
                "programme_code" => "AM101",
            ]
        ]);

        CampusProgramme::insert([
            [
                "cp_id" => "6BE102",
                "campus_id" => 6,
                "programme_code" => "BE102"
            ],
            [
                "cp_id" => "6DN101",
                "campus_id" => 6,
                "programme_code" => "DN101"
            ],
            [
                "cp_id" => "6AT101",
                "campus_id" => 6,
                "programme_code" => "AT101"
            ],
            [
                "cp_id" => "6AA101",
                "campus_id" => 6,
                "programme_code" => "AA101"
            ],
            [
                "cp_id" => "6AB101",
                "campus_id" => 6,
                "programme_code" => "AB101"
            ],
            [
                "cp_id" => "6AF101",
                "campus_id" => 6,
                "programme_code" => "AF101"
            ]
        ]);

        CampusProgramme::insert([
            [
                "cp_id" => "3CT108",
                "campus_id" => 3,
                "programme_code" => "CT108",
            ],
            [
                "cp_id" => "3CC103",
                "campus_id" => 3,
                "programme_code" => "CC103"
            ],
            [
                "cp_id" => "3CT103",
                "campus_id" => 3,
                "programme_code" => "CT103"
            ],
            [
                "cp_id" => "3AB107",
                "campus_id" => 3,
                "programme_code" => "AB107"
            ]
        ]);

    }
}
