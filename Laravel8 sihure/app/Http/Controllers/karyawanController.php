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
        return view('karyawan.cuti');
    }

    public function absensi()
    {

        return view('karyawan.absensi');
    }

    public function lemburinsert(Request $request)
    {

      

    return redirect()->route('lembur')->with('pesan', 'data lembur berhasil ditambahkan');

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
