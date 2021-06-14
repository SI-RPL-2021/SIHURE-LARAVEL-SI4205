<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('tampilan.home');
    }

    public function divisi()
    {
        return view('v_register');
    }

    public function daftar(Request $request)
    {
        $user_id = auth()->user()->id;

        DB::table("users")->where("id", $user_id)->update([

            "divisi" => $request->divisi,

        ]);


        return redirect()->route('home');

    }
}
