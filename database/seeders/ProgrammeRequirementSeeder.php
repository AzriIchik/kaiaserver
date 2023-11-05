<?php

namespace Database\Seeders;

use App\Models\ProgrammeRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammeRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        ProgrammeRequirement::insert([
            [
                "id" => "1103BE102",
                "gred_id" => 7,
                "subject_id" => "1103",
                "programme_code" => "BE102",
                "special_req" => false,
            ],
            [
                "id" => "1103BE101",
                "gred_id" => 7,
                "subject_id" => "1103",
                "programme_code" => "BE101",
                "special_req" => false,
            ],
            [
                "id" => "1119BE101",
                "gred_id" => 7,
                "subject_id" => "1119",
                "programme_code" => "BE101",
                "special_req" => false,
            ],
            [
                "id" => "1103EV101",
                "gred_id" => 7,
                "subject_id" => "1103",
                "programme_code" => "EV101",
                "special_req" => false,
            ],
            [
                "id" => "1449EV101",
                "gred_id" => 7,
                "subject_id" => "1449",
                "programme_code" => "EV101",
                "special_req" => false,
            ],
            [
                "id" => "1119EV101",
                "gred_id" => 9,
                "subject_id" => "1119",
                "programme_code" => "EV101",
                "special_req" => false,
            ],
            [
                "id" => "1249EV101",
                "gred_id" => 9,
                "subject_id" => "1249",
                "programme_code" => "EV101",
                "special_req" => false,
            ],
            [
                "id" => "1511EV101",
                "gred_id" => 9,
                "subject_id" => "1511",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3759EV101",
                "gred_id" => 7,
                "subject_id" => "3759",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3760EV101",
                "gred_id" => 7,
                "subject_id" => "3760",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3761EV101",
                "gred_id" => 7,
                "subject_id" => "3761",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3762EV101",
                "gred_id" => 7,
                "subject_id" => "3762",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3763EV101",
                "gred_id" => 7,
                "subject_id" => "3763",
                "programme_code" => "EV101",
                "special_req" => true,
            ],
            [
                "id" => "3764EV101",
                "gred_id" => 7,
                "subject_id" => "3764",
                "programme_code" => "EV101",
                "special_req" => true,
            ]

        ]);



    }
}
