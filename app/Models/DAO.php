<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DAO extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "Type",
        "Date de publication",
        "Date limite",
        "Etat",
        
    ];
}
