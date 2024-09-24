<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaoPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "cost",
        "state",
        "payment_at",
        "subscribe_id",
        "created_at",
        "updated_at",
    ];
    
    
    public function Subscribe(): BelongsTo
    {
        return $this->belongsTo(Subscribe::class);
    }
   
}



