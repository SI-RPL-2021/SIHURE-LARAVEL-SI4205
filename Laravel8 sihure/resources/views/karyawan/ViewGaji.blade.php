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
        <form action="/hr/viewGajiupdate" style="padding: 40px;">
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"><bold>GAJI POKOK</bold></label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="gaji_pokok" value="{{$data_all->gaji_pokok}} " readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"><bold>BIAYA TRANSPORTASI</bold></label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="biaya_transportasi" id="biaya_transportasi" value="{{$data_all->biaya_transportasi }}" readonly>
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
                    <input type="text" class="form-control" name="tunjangan_anak" id="tunjangan_anak" value="{{$data_all->tunjangan_anak }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"> &ensp; Tunjangan Kesehatan</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="tunjangan_kesehatan" value="{{$data_all->tunjangan_kesehatan }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label"> &ensp; Pajak Pendapatan</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="pajak_pendapatan" id="pajak_pendapatan" value="{{$data_all->pajak_pendapatan }}" readonly>
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
                    <input type="text" class="form-control" name="lembur" id="lembur" value="{{$data_all->lembur}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">  &ensp; Tugas Keluar</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tugas_keluar" id="tugas_keluar" value="{{$data_all->tugas_keluar }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TanggalLembur" class="col-sm-3 col-form-label"> &ensp; Performa Kerja</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="performa_kerja" id="performa_kerja"  value="{{$data_all->performa_kerja}}" readonly>
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
                    <input type="text" class="form-control" name="ketidak_hadiran" id="ketidak_hadiran" value="{{$data_all->ketidak_hadiran }}" readonly>
                    </div>
                </div>
                <br>
            <div class="form-group">
                <button type="button" class="btn btn-danger" style="color:white; border-radius:22px; float:right;"><a href="/karyawan/gaji" style="color:white;">Close</a></button>
            </div>
        </form>
    </div>
</div>
<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
<br>

<!-- 
<form action="/hr/viewGajiupdate" style="padding-bottom: 80px; padding-left:40px; padding-right:40px;">

    <div class="form-group row">
        <div class="col-sm-10">
          <input type="hidden" class="form-control" id="inputEmail" name="id" value="{{$data->id}}">
        </div>
    </div>

  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label" style="color:#525A63;">Gaji Pokok</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="gaji_pokok" value="{{$data1->gaji_pokok}} ">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Biaya Transportasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="biaya_transportasi" value="{{$data1->biaya_transportasi }}">
    </div>
  </div>

  TUNJANGAN
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>TUNJANGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Anak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tunjangan_anak" value="{{$data1->tunjangan_anak }}">
    </div>
  </div>

  <!-- <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Kesehatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tunjangan_kesehatan"value="{{$data1->tunjangan_kesehatan }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Pajak Pendapatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="pajak_pendapatan" value="{{$data1->pajak_pendapatan }}">
    </div>
  </div>

  <br> -->

  <!-- INSENTIF -->
  <!-- <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>INSENTIF</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Lembur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="lembur" value="{{$data1->lembur}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tugas Keluar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tugas_keluar" value="{{$data1->tugas_keluar }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Performa Kerja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="performa_kerja" value="{{$data1->performa_kerja}}">
    </div>
  </div> -->

  <!-- POTONGAN -->
  <!-- <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>POTONGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Ketidakhadiran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="ketidakhadiran"value="{{$data1->ketidak_hadiran }}">
    </div>
  </div>
  <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 116px; box-shadow: -2px 3px 5px #84868A; float:right;"><strong>Submit</strong></button>
</form>
</div> -->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop