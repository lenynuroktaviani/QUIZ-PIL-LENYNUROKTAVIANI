<?php

namespace App\Http\Controllers;
use App\models\Matakuliahs;

use Illuminate\Http\Request;

class MatakuliahsController extends controller
{
    
public function index()
{
    $matakuliahs = matakuliahs::OrderBy('id', 'desc')->paginate(3);

    return view('matakuliahs.index', compact('matakuliahs'));
}
public function create()
{
    return view('matakuliahs.create');
}
public function store(Request $request )
{
    // validate the request...
    $request->validate([
        'nama_matakuliah' => 'required|unique:matakuliahs|max:255',
        'sks' => 'required',

    ]);

    $matakuliahs = new matakuliahs;

    $matakuliahs->nama_matakuliah = $request->nama_matakuliah;
    $matakuliahs->sks = $request->sks;

    $matakuliahs->save();

        return redirect('/matakuliahs');
    }

    public function show($id)
    {
        $matakuliah = matakuliahs::where('id', $id)->first();
        return view('matakuliahs.show', ['matakuliah' => $matakuliah]);
    }

    public function edit($id)
    {
        $matakuliah = matakuliahs::where('id', $id)->first();
        return view('matakuliahs.edit', ['matakuliah' => $matakuliah]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nama_matakuliah' => 'required|unique:matakuliahs|max:255',
        'sks' => 'required',

    ]);

    matakuliahs::find($id)-> update([

            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
            
        ]);

        return redirect('/matakuliahs');
    }
    public function destroy($id)
    {
        matakuliahs::find($id)->delete();
        return redirect('/matakuliahs');
    }
}
