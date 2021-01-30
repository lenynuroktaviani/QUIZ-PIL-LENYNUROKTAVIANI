<?php

namespace App\Http\Controllers;

use App\Models\Absens;
use Illuminate\Http\Request;

class AbsensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = Absens::orderby('id', 'desc')->paginate(3);

        return view('absens.index', compact('absens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'waktu_absen' => 'required|unique:absens|max:255|',
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'keterangan' => 'required'
        ]);

        $absens = new Absens;

        $absens->waktu_absen = $request->waktu_absen;
        $absens->mahasiswa_id = $request->mahasiswa_id;
        $absens->matakuliah_id = $request->matakuliah_id;
        $absens->keterangan = $request->keterangan;

        $absens->save();

        return redirect('/absens');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absens::where('id', $id)->first();
       
        return view('absens.show', ['absen' => $absen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absen = Absens::where('id', $id)->first();
       
        return view('absens.edit', ['absen' => $absen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_absen' => 'required|unique:absens|max:255|',
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'keterangan' => 'required'
        ]);

        Absens::find($id)->update([
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'keterangan' => $request->keterangan

        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Absens::find($id)->delete();
        return redirect('/absens');
    }
}
