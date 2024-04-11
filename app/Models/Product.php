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

    public function getProducts(array $filters = [])
    {
        return $this->where(function ($query) use ($filters) {

                        if (isset($filters['filter'])) {
                            $filter = $filters['filter'];
                            $query->where('name', 'LIKE', "%{$filter}%");
                        }

                        if (isset($filters['customer_id'])) {
                            $query->where('customer_id', $filters['customer_id']);
                        }

                        if (isset($filters['customer_name'])) {
                            Customer::where('name', $filters['customer_name']);
                        }
                    })
                    ->latest()
                    ->paginate();
    }

} // Product
