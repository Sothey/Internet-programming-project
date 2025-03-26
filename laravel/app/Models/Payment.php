<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_date', 'payment_method', 'amount', 'order_id', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected function paymentDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d/m/Y H:i:s'),
            set: fn ($value) => $value instanceof Carbon
                ? $value->format('Y-m-d H:i:s')
                : Carbon::createFromFormat('d/m/Y H:i:s', $value)->format('Y-m-d H:i:s')
        );
    }
}