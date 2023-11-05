<?php

namespace App\Models;

use App\Models\Campus;
use App\Models\Programme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CampusProgramme extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    protected $primaryKey = 'id';

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
