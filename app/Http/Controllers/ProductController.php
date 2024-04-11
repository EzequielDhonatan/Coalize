<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreFormRequest;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    private $repository;

    public function __construct(Product $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return ProductResource::collection($this->repository->getProducts($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreFormRequest $request)
    {
        return new ProductResource($this->repository->create($request->validated()));
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
}
