<?php

namespace App\Http\Controllers;

use App\Models\PropertyListing;
use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("layouts/properties");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyListing $propertyListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyListing $propertyListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyListing $propertyListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyListing $propertyListing)
    {
        //
    }
}
