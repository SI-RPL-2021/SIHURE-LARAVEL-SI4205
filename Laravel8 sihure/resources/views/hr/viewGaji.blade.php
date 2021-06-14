@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>EDIT GAJI KARYAWAN</strong>
</h1>
<br>
<br>
<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
<br>
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

  <!-- TUNJANGAN -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>TUNJANGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Anak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tunjangan_anak" value="{{$data1->tunjangan_anak }}">
    </div>
  </div>

  <div class="form-group row">
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

  <br>

  <!-- INSENTIF -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
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
  </div>

  <!-- POTONGAN -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>POTONGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Ketidakhadiran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="ketidakhadiran"value="{{$data1->ketidak_hadiran }}">
    </div>
  </div>
  <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 116px; box-shadow: -2px 3px 5px #84868A; float:right;"><strong>Submit</strong></button>
</form>
</div>
@endsection
