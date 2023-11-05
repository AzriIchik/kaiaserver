<?php

namespace App\Models;

use App\Models\CampusProgramme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campus extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function programme()
    {
        return $this->hasMany(CampusProgramme::class);
    }
}
