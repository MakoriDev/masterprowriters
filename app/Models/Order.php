<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function files()
    {
        return $this->hasMany(OrderFile::class, 'order_id');
    }

    public function scopeActive($query)
    {
        return $query->where([
            ['payment_status', 'paid'],
            ['progress', 'active']
        ]);
    }

    public function scopeComplete($query)
    {
        return $query->where([
            ['payment_status', 'paid'],
            ['progress', 'complete']
        ]);
    }

    public function scopeUnpaid($query)
    {
        return $query->where('payment_status', 'unpaid');
    }

    public function getStyleAttribute($value)
    {
        return strtoupper($value);
    }
}
