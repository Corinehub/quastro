<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription_dao_documents extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "type",
        "link",
        "subscribe_id",
        
    ];
    public function subscribe(): BelongsTo
    {
        return $this->belongsTo(Subscribe::class);
    }
    
}
