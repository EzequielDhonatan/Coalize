<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id'            => $this->id,

            'customer'      => new CustomerResource($this->customer),

            'name'          => $this->name,
            'price'         => $this->price,
            'photo'         => $this->photo ? url($this->photo) : null,

        ]; // return

    } // toArray

} // CustomerResource
