<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClassYear extends Model
{
    use HasFactory;

    protected $fillable = ["school_id", "parent_id"];
}
