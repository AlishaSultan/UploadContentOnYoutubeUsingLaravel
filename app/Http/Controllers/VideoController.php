<?php

namespace App\Http\Controllers;

use Dawson\Youtube\Facades\Youtube;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('video');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = Youtube::upload($request->file('video')->getPathName(), [
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ])->withThumbnail($request->file('image')->getPathName());
        return back()->with('success', 'Video Uploaded Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
