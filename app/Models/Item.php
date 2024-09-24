<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "domaine",
        "description",
        "color",
        "prices",
        "created_ad",
        "updated_ad",
      
    ];
    // public function projects(): HasMany
    // {
    //     return $this->hasMany(projects::class);
    // }

    // public function items(){
    //     return $this->hasMany(Item::class, "item_id");
    // }
    public function lot():BelongsTo{
        return $this->belongsTo(Lot::class, "lot_id");
    }
    public function Projects():HasMany{
        return $this->hasMany(Project::class, "projects_id");
    }

   

}
