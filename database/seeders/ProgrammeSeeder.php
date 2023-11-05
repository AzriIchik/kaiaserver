<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programme::create([
            "code" => "AA001",
            "name" => "Foundation in Accounting",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "BK101",
            "name" => "Diploma in Corporate Communication",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AA103",
            "name" => "Diploma in Accountancy",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "EV101",
            "name" => "Diploma in Civil Engineering (Construction Safety)",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 1
        ]);
        Programme::create([
            "code" => "BS101",
            "name" => "Diploma in Sports Management",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CC101",
            "name" => "Diploma in Computer Science",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AO101",
            "name" => "Diploma in Office Management",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "BE101",
            "name" => "Diploma in Teaching English as Secondary Language (TESL)",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CT104",
            "name" => "Diploma in Multimedia",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CM101",
            "name" => "Diploma in Animation",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CM102",
            "name" => "Diploma in Game Design",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AM101",
            "name" => "Diploma in Digital Marketing",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "BE102",
            "name" => "Diploma in Early Childhood Education",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "DN101",
            "name" => "Diploma in Nursing",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AT101",
            "name" => "Diploma in Tourism Management",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AA101",
            "name" => "Diploma in Accounting",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AB101",
            "name" => "Diploma in Business Management",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AF101",
            "name" => "Diploma in Islamic Banking and Finance",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CT108",
            "name" => "Diploma in Computer Graphic Design",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CC103",
            "name" => "Diploma in Computer System and Networking",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "CT103",
            "name" => "Diploma in Information Technology",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
        Programme::create([
            "code" => "AB107",
            "name" => "Diploma in Human Resource Management",
            "description" => "some desc",
            "allow_credit_count" => 3,
            "allow_specialreq_count" => 0
        ]);
    }
}
