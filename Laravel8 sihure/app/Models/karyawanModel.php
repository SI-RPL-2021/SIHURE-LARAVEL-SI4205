<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class karyawanModel extends Model
{

    public function alldata()
    {
        return DB::table('cuti')->get();
    }

    public function addData($data)
    {
        DB::table('todo')->insert($data);
    }

}
