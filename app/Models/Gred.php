<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gred extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    public function requirement()
    {
        return $this->hasMany(ProgrammeRequirement::class);
    }

}
