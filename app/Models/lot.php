<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "guid",
        "slug",
        "description",
        "short_description",
        "color",
        "project_id",
        "created_ad",
        "updated_ad",
    ];
    // public function DAO(): BelongsToMany
    // {
    //     return $this->belongsToMany(DAO::class);
    // }
    public function Dao(): BelongsTo
    {
        return $this->belongsTo(Dao::class);
    }
    // public function project(){
    //     return $this->belongsTo(Project::class, "project_id");
    // }

    public function items(){
        return $this->hasMany(Item::class, "lot_id");
    }

}


