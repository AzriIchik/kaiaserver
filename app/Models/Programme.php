<?php

namespace App\Models;

use App\Models\Campus;
use App\Models\ProgrammeRequirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programme extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';
    public $incrementing = false;

    public function campus () {
        return $this->hasMany(CampusProgramme ::class);
    }

    public function requirement()
    {
        return $this->hasMany(ProgrammeRequirement::class);
    }

}
