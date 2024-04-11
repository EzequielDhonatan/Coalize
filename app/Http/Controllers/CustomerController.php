<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Http\Requests\CustomerStoreFormRequest;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{
    private $repository;

    public function __construct(Customer $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CustomerResource::collection($this->repository->latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreFormRequest $request)
    {
        return new CustomerResource($this->repository->create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

} // CustomerController
