<?php

namespace App\Http\Controllers;

use App\Models\karyawanModel;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class karyawanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //profile
    public function profile()
    {
        $user_id = auth()->user()->id;
        $data1 = DB::table("users")->where("id", $user_id)->get();

        $data = $data1[0];

        return view('profile', ["data" => $data]);
    }

    //Cuti
    public function cuti()
    {

        $user_id = auth()->user()->id;
        // $user_id = 1;

        $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
        not in (0,2) and id_user = " . $user_id . " group by id_user");
        $data2 = $data1[0];
        // if ( $data1) {
        //     $data2 = $data1[0];
        // } else {
        //     $data2 = [];
        // }

        $data3 = DB::table("cuti")
            ->where("id_user", $user_id)
            ->get();

        return view('karyawan.cuti', ["test" => $data2], ["data" => $data3]);
    }

    public function buattabel(Request $request)
    {

        $diff = Carbon::parse($request->mulai)->diffInDays($request->akhir);

        $user_name = auth()->user()->name;
        $user_id = auth()->user()->id;

        DB::table("cuti")
            ->insert([


                "id_user" => $user_id,
                "status" => $request->status,
                "nama" => $request->name,
                "alasan" => $request->alasan,
                "jumlahhari" => $diff * -1,
                "tanggalmulai" => $request->mulai,
                "tanggalberakhir" => $request->akhir,

            ]);

        DB::table("users")
            ->where("id", $user_id)
            ->update([
                "jumlahcuti" => $request->jumlahcuti,
            ]);


        return redirect()->route('cuti')->with('pesan', 'data berhasil ditambahkan');
    }

    //Absensi
    public function absensi()
    {
        $user_id = auth()->user()->id;

        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d');
        $absen_karyawan = DB::select("select  * from todo where id_user = $user_id
            and jam_masuk between '" . $now . " 00:00:00' and '" . $now . " 23:59:59'  order by jam_masuk desc limit 1");
        if ($absen_karyawan) {
            $absen = $absen_karyawan[0];
        } else {
            $absen = [];
        }

        // return redirect()->route('absensi')->with('pesan','data berhasil ditambahkan');

        return view('karyawan.absensi', ["data_absen" => $absen]);

        // return view('karyawan.absensi');
    }

    public function todo(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $now = date('Y-m-d H:i:s');

        $user_id = auth()->user()->id;
        $name = auth()->user()->name;

        DB::table("todo")
            ->insert([
                "id_user" => $user_id,
                "todo" => $request->todo_kegiatan,
                "jam_masuk" => $now,
                "nama" => $name,
            ]);

        DB::table("users")
            ->where("id", $user_id)
            ->update([
                "status" => 'online',
            ]);

        // $this->testModels->addData($data);
        return redirect()->route('absensi');
    }

    public function absenPulang(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $user_id = auth()->user()->id;

        $now = date('Y-m-d H:i:s');
        DB::table("todo")
            ->where("id_user", $user_id)
            ->update([
                "jam_keluar" => $now
            ]);

        DB::table("users")
            ->where("id", $user_id)
            ->update([
                "status" => 'offline',
            ]);
        return redirect()->route('absensi')->with('pesan', 'data berhasil ditambahkan');
    }

    //Lembur
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
                "nama" => auth()->user()->name,
                "status" => $request->status,
                "id_user" => auth()->user()->id,

            ]);

        return redirect()->route('lembur')->with('pesan', 'data lembur berhasil ditambahkan');
    }

    public function lembur()
    {

        $user_id = auth()->user()->id;

        $data1 =  DB::table("lembur")
            ->where("id_user", $user_id)
            ->get();

        return view('karyawan.lembur', ['data_all' => $data1]);
    }


    //karyawan
    public function karyawan()
    {

        $data1 =  DB::table("users")
            ->where("divisi", 'karyawan')
            ->get();

        return view('karyawan.karyawan', ['data' => $data1]);
    }

    public function gaji()
    {
        return view('karyawan.gaji');
    }
}
