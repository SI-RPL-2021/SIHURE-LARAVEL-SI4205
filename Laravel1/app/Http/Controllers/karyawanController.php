<?php

namespace App\Http\Controllers;

use App\Models\karyawanModel;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class karyawanController extends Controller
{

    // public function __construct()
    // {
    //     $this->karyawanModel = new karyawanModel();
    // }

    public function cuti()
    {


        $data1 = DB::select("select  * from users where id = 18");
        $data2 = $data1[0];

        $data3 = DB::table("cuti")
                ->where("id_user", 18)
                ->get();


        return view('karyawan.cuti.cuti', ["test" => $data2],["data" => $data3] );
    }

    public function absensi()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d');
        $absen_karyawan = DB::select("select  * from todo where id_user = 14
            and jam_masuk between '" . $now . " 00:00:00' and '" . $now . " 23:59:59'  order by jam_masuk desc limit 1");
        if ($absen_karyawan) {
            $absen = $absen_karyawan[0];
        } else {
            $absen = [];
        }

        // return redirect()->route('absensi')->with('pesan','data berhasil ditambahkan');

        return view('karyawan.absensi.absensi', ["data_absen" => $absen]);
    }

    public function lembur()
    {


        return view('karyawan.lembur');
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
                "id_user" => 14,
                "todo" => $request->todo_kegiatan,
                "jam_masuk" => $now
            ]);

        // $this->testModels->addData($data);
        return redirect()->route('absensi');
    }

    public function absenPulang(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $now = date('Y-m-d H:i:s');
        DB::table("todo")
            ->where("id_user", 14)
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
                "jumlahhari" => $diff ,
                "tanggalmulai" => $request->mulai,
                "tanggalberakhir" => $request->akhir,

            ]);


        return redirect()->route('cuti')->with('pesan', 'data berhasil ditambahkan');
    }
}
