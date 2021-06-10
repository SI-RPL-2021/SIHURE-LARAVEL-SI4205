@extends('tampilan.test')


@section('title', 'View Gaji')

@section('content')
<h6 style="text-align:right;color:#525A63;"><span id="tanggal"></span></h6>
<h6 style="text-align:right;color:#525A63"><span id="waktu"></span></h6>
<script>
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
    else(a = tw.getTime());
    tw.setTime(a);
    var tahun = tw.getFullYear();
    var hari = tw.getDay();
    var bulan = tw.getMonth();
    var tanggal = tw.getDate();
    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
</script>
<br>
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 400;'><strong>DATA GAJI</strong></h2>
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:16px; font-weight: 500;'>Nama : Karyawan 1</h2>
<br>
{{-- <p>Welcome to SIHURE</p> --}}

<!-- Form -->

<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
        <form style="padding: 40px;">
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"><bold>GAJI POKOK</bold></label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"><bold>BIAYA TRANSPORTASI</bold></label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tanggal" id="TanggalLembur" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"><bold>TUNJANGAN</bold></label>
                    <div class="col-sm-9">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"> &ensp; Tunjangan Anak</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tanggal" id="TanggalLembur" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"> &ensp; Tunjangan Kesehatan</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"> &ensp; Pajak Pendapatan</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"><bold>INSENTIF</bold></label>
                    <div class="col-sm-9">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"> &ensp; Lembur</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">  &ensp; Tugas Keluar</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"> &ensp; Performa Kerja</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tanggal" id="TanggalLembur" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"><bold>POTONGAN</bold></label>
                    <div class="col-sm-9">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">  &ensp; Ketidakhadiran</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="id" readonly>
                    </div>
                </div>
                <br>
            <div class="form-group">
                <button type="button" class="btn btn-danger" style="color:white; border-radius:22px; float:right;"><a href="/karyawan/gaji" style="color:white;">Close</a></button>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop