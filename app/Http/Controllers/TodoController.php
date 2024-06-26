<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Data::all();
        return view('dashboard.todo', compact('data'));
        // return  view('dashboard.todo', [
        //     "todos" => todo::latest()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);

        Data::create($data);

        return redirect('/todo')->with('oke','To Do List hash been');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
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
    public function destroy(Data $data)
    {
        Data::destroy($data->id);

        return redirect('/todo')->with('succes', 'Post hash been delete');
    }
}
