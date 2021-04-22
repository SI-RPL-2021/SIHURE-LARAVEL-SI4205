<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class hrController extends Controller
{
    public function absensi()
    {
        return view('hr.absensi');
    }

    public function cuti()
    {

        $data1 =  DB::table("cuti")->where("status", 1)->get();
        $data2 =  DB::table("cuti")->where("status", 0)->get();

        return view('hr.cuti', ["test" => $data1], ["test2" => $data2]);
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
}
