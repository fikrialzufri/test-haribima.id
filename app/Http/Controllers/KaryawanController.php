<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        $result = [
            'data' => $karyawan,
            'message' => 'Data Karyawan'
        ];
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $message = '';

        try {
            $karyawan = new Karyawan();
            $karyawan->nama_lengkap = $request->nama_lengkap;
            $karyawan->tempat_lahir = $request->tempat_lahir;
            $karyawan->tgl_lahir = $request->tgl_lahir;
            $karyawan->email = $request->email;
            $karyawan->phone = $request->phone;
            $karyawan->pekerjaan = $request->pekerjaan;
            $karyawan->gaji = $request->gaji;
            $karyawan->save();
            $message = "data berhasil disimpan";
        } catch (\Throwable $th) {
            $message = "data gagal disimpan";
        }
        $result = [
            'data' => $karyawan,
            'message' => $message
        ];
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $message = '';
        try {
            $karyawan->nama_lengkap = $request->nama_lengkap;
            $karyawan->tgl_lahir = $request->tgl_lahir;
            $karyawan->email = $request->email;
            $karyawan->phone = $request->phone;
            $karyawan->pekerjaan = $request->pekerjaan;
            $karyawan->gaji = $request->gaji;
            $karyawan->save();
            $message = "data berhasil diupdate";
        } catch (\Throwable $th) {
            $message = "data gagal diupdate";
        }
        $result = [
            'data' => $karyawan,
            'message' => $message
        ];
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $message = '';
        try {
            $karyawan->delete();
            $message = "data berhasil dihapus";
        } catch (\Throwable $th) {
            $message = "data gagal dihapus";
        }
        $result = [
            'data' => $karyawan,
            'message' => $message
        ];
        return response()->json($result);
    }
}
