<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationProgramme extends Model
{
    use HasFactory;
    public $increament = false;
    public  $primary = 'app_prog_id';
    public $timestamps = false;
    protected $fillable = ['app_prog_id','application_id', 'cp_id'];
}
