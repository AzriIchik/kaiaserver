<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Subject::create(['id' => 1103, 'name' => 'Bahasa Melayu', 'mandatory' => true]);
        Subject::create(['id' => 1119, 'name' => 'Bahasa Inggeris', 'mandatory' => true]);
        Subject::create(['id' => 1223, 'name' => 'Pendidikan Islam', 'mandatory' => false]);
        Subject::create(['id' => 1225, 'name' => 'Pendidikan Moral', 'mandatory' => false]);
        Subject::create(['id' => 1249, 'name' => 'Sejarah', 'mandatory' => true]);
        Subject::create(['id' => 1449, 'name' => 'Mathematics', 'mandatory' => true]);
        Subject::create(['id' => 1511, 'name' => 'Science', 'mandatory' => false]);
        Subject::create(['id' => 3759, 'name' => 'Lukisan Kejuruteraan', 'mandatory' => false]);
        Subject::create(['id' => 3760, 'name' => 'Pengajian Kejuruteraan Mekanikal', 'mandatory' => false]);
        Subject::create(['id' => 3761, 'name' => 'Pengajian Kejuruteraan Awam', 'mandatory' => false]);
        Subject::create(['id' => 3762, 'name' => 'Pengajian Kejuruteraan Elektrik dan Elektronik', 'mandatory' => false]);
        Subject::create(['id' => 3763, 'name' => 'Rekacipta', 'mandatory' => false]);
        Subject::create(['id' => 3764, 'name' => 'Teknologi Kejuruteraan', 'mandatory' => false]);
    }
}
