<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key','value'];

    public $timestamps = false; // optional agar timestamps use nahi kar rahe
}
