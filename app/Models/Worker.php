<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "adress",
        "phone",
        "created_ad",
        "updated_ad",
    ];
    public function Daos(): HasMany
    {
        return $this->hasMany(Dao::class);
    }
    public function Provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class,'User');
    }
}
