<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $visible = ['id', 'name', 'mandatory'];
    public function requirement()
    {
        return $this->hasMany(ProgrammeRequirement::class);
    }

}
