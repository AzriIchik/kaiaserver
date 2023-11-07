<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $primaryKey = "application_id";
    protected $fillable = ['name', 'icno', 'school_name', 'dob', 'address', 'mobilephoneno', 'housephoneno', 'email', 'religion', 'nationality', 'sex', 'spmresult'];

    public $visibles = ['created_at'];
}
