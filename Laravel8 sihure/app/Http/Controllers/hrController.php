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

    //Absensi
    public function absensi()
    {

        $data1 =  DB::table("todo")->get();

        return view('hr.absensi', ['data_all' => $data1]);
    }

    //
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
        $data1 =  DB::table("users")->get();
        return view('hr.karyawan', ['data_all' => $data1]);
    }

    public function editkaryawan($id)
    {
        $data1 = DB::table("users")
            ->where("id", $id)
            ->get();

        $data2 = $data1[0];

        return view('hr.editkaryawan', ["data" => $data2]);
    }

    public function addKaryawan()
    {

        return view('hr.addKaryawan');
    }

    public function addKaryawaninput(Request $request)
    {
        $test =  bcrypt($request->password);
        $status = "offline";

        DB::table("users")
            ->insert([

                "password" => bcrypt($request->password),
                "name" => $request->name,
                "email" => $request->email,
                "divisi" => $request->divisi,
                "nip" => $request->nip,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_tlpn,
                "status" => $status,
                "agama" => $request->agama,
                "tempat_lahir" => $request->tempat_lahir,
                "tanggal_lahir" => $request->tanggal_lahir,
                "umur" => $request->umur,
                "jenis_kelamin" => $request->kelamin,
                "no_hp" => $request->no_hp,
                "status_pernikahan" => $request->status,
                "jumlah_anak" => $request->jumlah_anak,
                "tahun_masuk" => $request->tahun_masuk,

            ]);




        return redirect()->route('addkaryawan')->with('pesan', 'data berhasil diubah');
    }


    public function addKaryawanupdate(Request $request)
    {


        DB::table("users")->where("id", $request->id)->update([

            "password" => bcrypt($request->password),
            "name" => $request->name,
            "email" => $request->email,
            "divisi" => $request->divisi,
            "nip" => $request->nip,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_tlpn,
            "agama" => $request->agama,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "umur" => $request->umur,
            "jenis_kelamin" => $request->kelamin,
            "no_hp" => $request->no_hp,
            "status_pernikahan" => $request->status,
            "jumlah_anak" => $request->jumlah_anak,
            "tahun_masuk" => $request->tahun_masuk,


        ]);


        return redirect()->route('addkaryawan')->with('pesan', 'data berhasil diubah');
    }

    public function lembur()
    {

        $user_id = auth()->user()->id;

        $data1 =  DB::table("users")->get();
        $data2 =  DB::table("lembur")->get();

        $data3 = DB::table("users")
            ->where("id", $user_id)
            ->get();

        $data4 = $data3[0];

        $data_all = [$data1, $data2];
        return view('hr.lembur', ['data_all' => $data_all], ["test" => $data4]);
    }


    public function lembur_id($id)
    {

        $data1 = DB::table("lembur")
            ->where("id_user", $id)
            ->get();

        $data2 = DB::table("users")
            ->where("id", $id)
            ->get();
        $data4 = $data2[0];

        return view('hr.lembur_id', ["data" => $data1], ["data2" => $data4]);
    }

    public function penggajian()
    {

        $data1 =  DB::table("users")->get();


        return view('hr.penggajian', ['data_all' => $data1]);
    }

    // public function editGaji($id)
    // {

    //     DB::table("gaji")
    //     ->insert([

    //         "id_user" => $id,

    //     ]);

    // return redirect()->route('viewgaji')->with('pesan', 'data berhasil diubah');
    // }

    public function viewGaji($id)
    {

        $data1 = DB::table("users")
            ->where("id", $id)
            ->get();
        $data = $data1[0];

        $data5 = DB::table("gaji")
            ->where("id", $id)
            ->get();
        $data3 = $data5[0];




        return view('hr.viewgaji', ["data1" => $data3], ["data" => $data]);
    }

    public function viewgajiupdate(Request $request)
    {

        DB::table("gaji")
            ->where("id_user", $request->id)
            ->update([
                'gaji_pokok' => $request->gaji_pokok,
                'biaya_transportasi' => $request->biaya_transportasi,
                'tunjangan_anak' => $request->tunjangan_anak,
                'tunjangan_kesehatan' => $request->tunjangan_kesehatan,
                'pajak_pendapatan' => $request->pajak_pendapatan,
                'lembur' => $request->lembur,
                'tugas_keluar' => $request->tugas_keluar,
                'performa_kerja' => $request->performa_kerja,
                'ketidak_hadiran' => $request->ketidakhadiran,
            ]);

        return redirect()->route('viewgaji')->with('pesan', 'data berhasil diubah');
    }


    public function masterdataGaji()
    {
        $data1 = DB::table("master_data")->where("id", 1)->get();
        $data = $data1[0];

        return view('hr.masterdataGaji', ["data" => $data]);
    }

    public function EditmasterdataGaji()
    {

        $data1 = DB::table("master_data")->where("id", 1)->get();
        $data = $data1[0];

        return view('hr.EditmasterdataGaji', ["data" => $data]);
    }

    public function approve(Request $request)
    {
        DB::table("cuti")
            ->where("id", $request->id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan
            ]);

        // $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
        //     in (3) and id_user = " . $request->id. " group by id_user");
        // $data2 = $data1[0];

        // $data3 = $data2->jumlahhari;


        // DB::table("users")
        //     ->where("id", $request->iduser)
        //     ->update([
        //         "jumlahcuti" => $data3,
        //     ]);

        return redirect()->route('hrcuti')->with('pesan', 'data berhasil diubah');
    }

    public function jatahcuti()
    {

        $id = 2;
        $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
        not in (0,2)  group by id_user");
        $data2 = $data1[0];

        $tabel =  DB::table("users")->get();
        $tabel2 =  DB::table("cuti")->get()->where("status", 0);

        $data_all = [$tabel, $data2, $tabel2];

        return view('hr.jatahcuti', ["data_all" => $data_all]);
    }

    public function jatahcutiupdate(Request $request)
    {


        DB::table("cuti")
            ->insert([

                "id_user" => $request->iduser,
                "nama" => $request->nama,
                "status" => $request->status,
                "jumlahhari" => $request->jatah,
                "keterangan" => $request->keterangan,
            ]);

        $data1 = DB::select("SELECT sum(jumlahhari) as jumlahhari, id_user FROM `cuti` WHERE STATUS
            not in (0,1,2) and id_user = " . $request->iduser . " group by id_user");
        $data2 = $data1[0];

        $data3 = $data2->jumlahhari;


        DB::table("users")
            ->where("id", $request->iduser)
            ->update([
                "jumlahcuti" => $data3,
            ]);

        return redirect()->route('jatahcuti')->with('pesan', 'cuti berhasil ditambahkan');
    }

    public function profile()
    {
        $user_id = auth()->user()->id;
        $data1 = DB::table("users")->where("id", $user_id)->get();

        $data = $data1[0];

        return view('hr.profile', ["data" => $data]);
    }
}
