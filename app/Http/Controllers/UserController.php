<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Ini halaman index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Ini halaman create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Ini halaman store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Ini halaman show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Ini halaman edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Ini halaman update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Ini halaman delete';
    }
}
