<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DaoDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "type",
        "link",
        "dao_id",
        "subscribe_id",
        "created_ad",
        "updated_ad",
    ];
    public function Dao(): BelongsTo
    {
        return $this->belongsTo(Dao::class);
    }
    
}
