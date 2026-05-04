<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class OilChangeDetails extends Model
{

    protected $guarded = [];

    protected $casts = [
        'previous_oil_change_date' => 'date:Y-m-d',
    ];

    protected $appends = [
        'oil_change_needed',
    ];

    protected function oilChangeNeeded(): Attribute {
        return Attribute::make(
            get: fn () => $this->calculateOilChangeNeeded()
        );
    }

    protected function calculateOilChangeNeeded(): bool
    {
        if ($this->current_odometer - $this->previous_odometer > 5000)
        {
            return true;
        }
        if ($this->previous_oil_change_date < now()->subMonths(6))
        {
            return true;
        }
        return false;
    }
}
