<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Dao extends Model
{
    use HasFactory;

    protected $dates = [
        'start_at' ,
        'end_at' ,
        
    ];
    protected $table='daos';
    protected $fillable = [
       'name' ,
            'start_at' ,
            'end_at' ,
            'max_number_subscribe',
            'category' ,
            'prices' ,
            'project_description' ,
            'instruction' ,
            'dao_submission_confirmation_message' ,
            'country' ,
            "city" ,
            'postal' ,
            'state/province' ,

    ];
    public function daoDocuments(): HasMany
    {
        return $this->hasMany(DaoDocument::class);
    }
    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function subscribe(): HasMany
    {
        return $this->hasMany(Subscribe::class, 'dao_id');
    }

    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class);
        // return $this->belongsToMany(lots::class, 'Contenir');
    }
    public function providers(): BelongsToMany
    {
        return $this->belongsToMany(Provider::class,'subscribes');
    }
}

