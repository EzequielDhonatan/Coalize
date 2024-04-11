<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Product extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        // Data Product
        'customer_id',

        'name', 'price', 'photo'

    ]; // fillable

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

} // Product
