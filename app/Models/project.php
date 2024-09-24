<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "title",
        "start",
        "end",
        "prices",
        "created_ad",
        "updated_ad",
    ];
   
} 
