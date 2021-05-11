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

        $data1 =  DB::table("todo")->get();

        return view('hr.absensi', ['data_all' => $data1]);
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


        return view('hr.cuti', ['data_all' => $data_all]);
    }

    public function karyawan()
    {
        return view('hr.karyawan');
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
        return view('hr.lembur', ['data_all' => $data_all], ["test" => $data4]);
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

        $id = 1;
        $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
        not in (0,2) and id_user = " . $id . " group by id_user");
        $data2 = $data1[0];

        $tabel =  DB::table("users")->where("name", "adli")->get();
        $tabel2 =  DB::table("cuti")->get();

        $data_all = [$tabel, $data2, $tabel2];

        return view('hr.jatahcuti', ["data_all" => $data_all]);
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
