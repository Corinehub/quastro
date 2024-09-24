<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "address",
        "phone",
       "created_ad",
        "updated_ad",
    ];
    public function daos(): BelongsToMany
    {
        return $this->belongsToMany(Dao::class,'subscribes');
    }
    public function Worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class,'User');
    }
    public function subscribes(): HasMany
    {
        return $this->hasMany(Subscribe::class, "provider_id");
    }
    
}
