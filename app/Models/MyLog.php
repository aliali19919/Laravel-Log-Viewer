<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyLog extends Model
{
    protected $fillable=["level","message","created_at","context","levelNum","comment"];
}
