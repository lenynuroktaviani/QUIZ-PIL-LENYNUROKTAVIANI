<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswas;
use Illuminate\Http\Request;

class CobaController extends Controller
{

    public function index()
    {
        $mahasiswas = Mahasiswas::orderBy('id', 'desc')->paginate(3);
        
        return view('mahasiswas.index', compact('mahasiswas'));
    }
    public function create()
    {   
        return view('mahasiswas.create');
    }
    public function store(Request $request)
    {
        //validate the request...
            $request->validate([
                'nama_mahasiswa' => 'required|unique:mahasiswas|max:255|',
                'alamat' => 'required',
                'no_tlp' => 'required|numeric',
                'email' => 'required'
            ]);

        $mahasiswas = new Mahasiswas;

        $mahasiswas->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswas->alamat = $request->alamat;
        $mahasiswas->no_tlp = $request->no_tlp;
        $mahasiswas->email = $request->email;

        $mahasiswas->save();
        return redirect('/');
    }
    public function show($id)
    {
        $mahasiswa = mahasiswas::where('id', $id)->first();
       
        return view('mahasiswas.show', ['mahasiswa' => $mahasiswa]);
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswas::where('id', $id)->first();
       
        return view('mahasiswas.edit', ['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|unique:mahasiswas|max:255|',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric',
            'email' => 'email'
        ]);

        Mahasiswas::find($id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
            ]);
        return redirect('/');
        }
        public function destroy($id)
    {
        Mahasiswas::find($id)->delete();
        return redirect('/');
    }
}
