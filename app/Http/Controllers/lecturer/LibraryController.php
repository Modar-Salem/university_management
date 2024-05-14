<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Library;
use App\Traits\FileStorageTrait;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    use FileStorageTrait ;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::all() ;
        return view('lecturer.library.index',compact('libraries')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturer.library.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = null  ;
        if ($request->hasFile('file'))
            $path = $this->storefile($request->file('file'), 'Library_Files') ;
        Library::create([
            'type' => $request['type'] ,
            'file' =>  $path ,
            'link' => $request['link'] ?? null,
            'title' => $request['title'],
            'description' => $request['description']
        ]) ;
        return redirect()->route('lecturer.library.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $library = Library::find($id) ;
        return view('lecturer.library.show' , compact('library')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
