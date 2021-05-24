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
        $user_id = auth()->user()->id;
        $data1 = DB::table("users")->where("id", $user_id)->get();

        $data = $data1[0];

        return view('admin.profile', ["data" => $data]);
    }

    public function karyawan()
    {

        return view('admin.karyawan');
    }

    public function lembur()
    {
        $data1 =  DB::table("users")->where("id", 1)->get();
        $data2 =  DB::table("lembur")->where("status", 0)->get();

        $data3 = DB::table("users")
            ->where("id", 1)
            ->get();

        $data4 = $data3[0];

        $data_all = [$data1, $data2];
        return view('admin.lembur', ['data_all' => $data_all], ["test" => $data4]);
    }

    public function lemburlihat()
    {

        $data =  DB::table("lembur")->get();

        return view('admin.lemburlihat',['data' => $data]);
    }

    public function cuti()
    {

        $data1 =  DB::table("cuti")->where("status", 1)->get();
        $data2 =  DB::table("cuti")->where("status", 2)->get();
        $data3 =  DB::table("cuti")->where("status", 0)->get();

        $dataApprove = [];
        $dataPending = [];
        $dataNotapprove = [];

        if ($data1) {
            $dataApprove = $data1;
        }
        if ($data2) {
            $dataNotapprove = $data2;
        }

        if ($data3) {
            $dataPending = $data3;
        }

        $data_all = [$dataPending, $dataApprove, $dataNotapprove];


        return view('admin.cuti', ['data_all' => $data_all]);

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

    public function approvecuti(Request $request)
    {
        DB::table("cuti")
            ->where("id", $request->id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan
            ]);

        return redirect()->route('admincuti')->with('pesan', 'data berhasil diubah');
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
                "status" => 1,

            ]);

        return redirect()->route('adminlembur')->with('pesan', 'data lembur berhasil ditambahkan');
    }
}
