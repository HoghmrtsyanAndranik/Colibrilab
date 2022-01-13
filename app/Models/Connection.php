<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    public $table="Connections";
    public $timestamps=false;
    public $fillable=["cv_students_id"];
}
