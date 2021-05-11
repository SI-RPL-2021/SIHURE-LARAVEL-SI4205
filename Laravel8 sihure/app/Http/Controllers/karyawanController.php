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

    public function cuti()
    {


        $id = 1;
        $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
        not in (0,2) and id_user = ".$id." group by id_user");
        $data2 = $data1[0];

        $data3 = DB::table("cuti")
                ->where("id_user", 1)
                ->get();

        return view('karyawan.cuti', ["test" => $data2],["data" => $data3] );
    }

    public function absensi()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d');
        $absen_karyawan = DB::select("select  * from todo where id_user = 1
            and jam_masuk between '" . $now . " 00:00:00' and '" . $now . " 23:59:59'  order by jam_masuk desc limit 1");
        if ($absen_karyawan) {
            $absen = $absen_karyawan[0];
        } else {
            $absen = [];
        }

        // return redirect()->route('absensi')->with('pesan','data berhasil ditambahkan');

        return view('karyawan.absensi', ["data_absen" => $absen]);
    }

    public function lemburinsert(Request $request)
    {

        // $waktu_awal        = strtotime ('2019-02-25 $request->mulai');
        // $waktu_akhir    = strtotime ('2019-02-26 $request->selesai');

        $waktu_awal        =strtotime("2019-10-11 $request->mulai");
        $waktu_akhir    =strtotime("2019-10-11 $request->selesai");

        $diff    =$waktu_akhir - $waktu_awal;
        $jam    =floor($diff / (60 * 60));
        $menit    =$diff - $jam * (60 * 60);


        DB::table("lembur")
        ->insert([
            "jumlah_jam" => $jam,
            "jam_mulai" => $request->mulai,
            "jam_selesai" => $request->selesai,
            "tanggal" => $request->tanggal,
            "nama" => $request->nama,
            "status" => $request->status,

        ]);

    return redirect()->route('lembur')->with('pesan', 'data lembur berhasil ditambahkan');

    }

    public function lembur()
    {

        $data1 =  DB::table("lembur")->get();

        return view('karyawan.lembur', ['data_all' => $data1]);
    }

    public function karyawan()
    {

        return view('karyawan.karyawan');
    }

    public function gaji()
    {

        return view('karyawan.gaji');
    }

    public function todo(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $now = date('Y-m-d H:i:s');

        //  request()->validate([
        //     'todo' => 'required',

        //  ],[

        //     'todo.required' => 'wajib diisi cok !',

        // ]);

        // $data = [

        //     'todo' => Request()->todo_kegiatan,
        //     'id_user' => Request()->email,

        // ];
        DB::table("todo")
            ->insert([
                "id_user" => 1,
                "todo" => $request->todo_kegiatan,
                "jam_masuk" => $now,
                "nama" => 'adli',
            ]);

        // $this->testModels->addData($data);
        return redirect()->route('absensi');
    }

    public function absenPulang(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $now = date('Y-m-d H:i:s');
        DB::table("todo")
            ->where("id_user", 1)
            ->update([
                "jam_keluar" => $now
            ]);
        return redirect()->route('absensi')->with('pesan', 'data berhasil ditambahkan');
    }

    public function buattabel(Request $request)
    {

        $diff = Carbon::parse($request->mulai)->diffInDays($request->akhir);

          DB::table("cuti")
            ->insert([

                "id_user" => $request->iduser,
                "status" => $request->status,
                "nip" => $request->nip,
                "alasan" => $request->alasan,
                "jumlahhari" => $diff * -1 ,
                "tanggalmulai" => $request->mulai,
                "tanggalberakhir" => $request->akhir,
                "nama" => 'adli',

            ]);




        return redirect()->route('cuti')->with('pesan', 'data berhasil ditambahkan');
    }

}
