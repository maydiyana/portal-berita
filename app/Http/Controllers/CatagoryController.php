<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
        return view('catagory');
    }
    public function create(Request $request)
    {
        $validateData =  $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        Catagory::create($validateData);

        return redirect('/dashboard')->with('succes', 'Catagory hash been Added.');
    }
}
