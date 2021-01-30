<?php

namespace App\Http\Controllers\Api;

use App\Models\mahasiswas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = mahasiswas::orderBy('id', 'desc')->paginate(3);

        return response()->json([
            'success' => true,
            'message' => 'Daftar data mahasiswa',
            'data' => $gstudents
        ], 200);
    } /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:studentsmax:255',
            'description' => 'required',
        ]);

        $mahasiswas = mahasiswas::create([
            'name'=> $request->name,
            'description' => $request->description
            ]);

            if($mahasiswas)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'mahasiswas berhasil di tambahkan',
                    'data' => $mahasiswas
                ], 200);
            }else{
                return response()->json([
                'success' => false,
                'message' => 'mahasiswas gagal di tambahkan',
                'data' => $mahasiswas
            ], 409);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswas::where('id', $id)->first();    
        return response()->json([
            'success' => true,
            'message' => 'Detail mahasiswas',
            'data' => $mahasiswa
        ], 200);
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
            'name' => 'required|unique:mahasiswas|max:255',
            'description' => 'required',
        ]);

        $s = mahasiswas::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'mahasiswas Updated',
            'data' => $s
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $cek = mahasiswas::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'mahasiswas Deleted',
            'data' => $cek
        ], 200);
    }

}
