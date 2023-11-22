<?php

namespace App\Http\Controllers\Api;

use App\Models\CarouselItems;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselItemRequest;
use Illuminate\Http\Request;

class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CarouselItems::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselItemRequest $request)
    {
        //
        $validated = $request->validated();

        $carouselItem = CarouselItems::create($validated);

        return $carouselItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CarouselItems::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselItemRequest $request, string $id)
    {
        //
        $validated = $request->validated();

        $carouselItem = CarouselItems::findOrFail($id)
                                ->update($validated);
    
        return $carouselItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $carouselItem = CarouselItems::findOrFail($id);

        $carouselItem->delete();

        return $carouselItem;

    }
}
