<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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

            'name'          => $this->name,
            'cpf'           => $this->cpf,
            'photo'         => $this->photo,
            'gender'        => $this->gender,

            // Address
            'zip_code'      => $this->zip_code,
            'address'       => $this->address,
            'number'        => $this->number,
            'complement'    => $this->complement,
            'neighborhood'  => $this->neighborhood,
            'city'          => $this->city,
            'state'         => $this->state

        ]; // return

    } // toArray

} // CustomerResource
