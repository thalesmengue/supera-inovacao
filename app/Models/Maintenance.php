<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'user_id',
        'vehicle_id',
        'status_id'
    ];

    protected $dates = [
      'date'
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }
}
