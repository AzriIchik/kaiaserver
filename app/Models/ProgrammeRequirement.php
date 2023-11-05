<?php

namespace App\Models;

use App\Models\Gred;
use App\Models\Subject;
use App\Models\Programme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgrammeRequirement extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function gred()
    {
        return $this->belongsTo(Gred::class);
    }


}
