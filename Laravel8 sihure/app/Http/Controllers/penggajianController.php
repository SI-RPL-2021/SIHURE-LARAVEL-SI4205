<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggajianController extends Controller
{

    public function gajian(Request $request)
	{
        $user_id = auth()->user()->id;

        DB::table("master_data")->where("id", 1)->update([
                "tunjangan" => $request->tunjangan,
                "lembur" => $request->lembur,
            ]);

            return redirect()->route('hrgaji')->with('pesan', 'data berhasil ditambahkan');
	}

}
