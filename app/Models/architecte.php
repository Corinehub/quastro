<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class architecte extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "Nom",
        "Adresse",
        "Téléphone",
        "email",
        "Mot de passe",
    ];
}
