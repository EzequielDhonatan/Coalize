<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Customer extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        // Data Client
        'name', 'cpf', 'photo', 'gender',

        // Address
        'zip_code', 'address', 'number',
        'complement', 'neighborhood', 'city', 'state'

    ]; // fillable

} // Customer
