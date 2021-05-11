<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {

        return view('admin.profile');
    }

    public function karyawan()
    {

        return view('admin.karyawan');
    }

    public function lembur()
    {
        $data1 =  DB::table("users")->where("id", 1)->get();
        $data2 =  DB::table("lembur")->get();

        $data3 = DB::table("users")
            ->where("id", 1)
            ->get();

        $data4 = $data3[0];

        $data_all = [$data1, $data2];
        return view('admin.lembur', ['data_all' => $data_all], ["test" => $data4]);
    }

    public function cuti()
    {

        return view('admin.cuti');
    }

    public function approve(Request $request)
    {

        DB::table("lembur")
            ->where("id", $request->id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan
            ]);

        return redirect()->route('adminlembur')->with('pesan', 'data berhasil diubah');

        return view('admin.cuti');
    }

    public function lemburinsert(Request $request)
    {

        // $waktu_awal        = strtotime ('2019-02-25 $request->mulai');
        // $waktu_akhir    = strtotime ('2019-02-26 $request->selesai');

        $waktu_awal        = strtotime("2019-10-11 $request->mulai");
        $waktu_akhir    = strtotime("2019-10-11 $request->selesai");

        $diff    = $waktu_akhir - $waktu_awal;
        $jam    = floor($diff / (60 * 60));
        $menit    = $diff - $jam * (60 * 60);


        DB::table("lembur")
            ->insert([
                "jumlah_jam" => $jam,
                "jam_mulai" => $request->mulai,
                "jam_selesai" => $request->selesai,
                "tanggal" => $request->tanggal,
                "nama" => $request->nama,
                "status" => $request->status,

            ]);

        return redirect()->route('adminlembur')->with('pesan', 'data lembur berhasil ditambahkan');
        return view('admin.lembur');
    }
}
