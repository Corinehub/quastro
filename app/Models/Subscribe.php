<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscribe extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "dao_id",
        "providers_id",
        "created_ad",
        "updated_ad",
        "validatedt_at",
        
    ];
   
    public function daos(): BelongsTo
    {
        return $this->belongsTo(Dao::class, 'dao_id');
    }
    public function providers(): BelongsTo
    { 
        return $this->belongsTo(Provider::class,'provider_id');

    }
    public function dao_payments(): HasMany
    {
        return $this->hasMany(DaoPayment::class);
    }
    public function subscription_dao_documents(): HasMany
    {
        return $this->hasMany(Subscription_dao_documents::class);
    }
}
