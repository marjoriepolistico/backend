<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LettersRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Letter;

class LettersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Letter::all();
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(LettersRequest $request)
    {
        $validated = $request->validated();

        $letter = Letter::create($validated);

        return $letter;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Letter::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $letter = Letter::findOrFail($id);

        $letter->delete();
        
        return $letter;
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(LettersRequest $request,string $id)
    {
        //
        $validated = $request->validated();

        $letter = Letter::findOrFail($id);

        $letter->update($validated);

        return $letter;
    }
    
    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }


}
