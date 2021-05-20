<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class hrController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function absensi()
    {

        return view('hr.absensi');
    }

    public function cuti()
    {
        return view('hr.cuti');
    }

    public function karyawan()
    {
        return view('hr.karyawan');
    }

    public function lembur()
    {

        return view('hr.lembur');
    }

    public function penggajian()
    {
        return view('hr.penggajian');
    }

    public function approve(Request $request)
    {
        DB::table("cuti")
            ->where("id", $request->id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan
            ]);

        return redirect()->route('hrcuti')->with('pesan', 'data berhasil diubah');
    }

    public function jatahcuti()
    {

        return view('hr.jatahcuti');
    }

    public function jatahcutiupdate(Request $request)
    {

        DB::table("cuti")
            ->insert([

                "id_user" => $request->iduser,
                "nama" => $request->nama,
                "nip" => $request->nip,
                "status" => $request->status,
                "jumlahhari" => $request->jatah,
                "keterangan" => $request->keterangan,

            ]);

        return redirect()->route('jatahcuti')->with('pesan', 'cuti berhasil ditambahkan');
    }
}
