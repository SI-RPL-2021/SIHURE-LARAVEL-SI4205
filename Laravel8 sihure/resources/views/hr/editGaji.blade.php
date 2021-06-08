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
<form style="padding-bottom: 80px; padding-left:40px; padding-right:40px;">
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label" style="color:#525A63;">Gaji Pokok</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Biaya Transportasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <!-- TUNJANGAN -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>TUNJANGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Anak</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Kesehatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Pajak Pendapatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  
  <br>

  <!-- INSENTIF -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>INSENTIF</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Lembur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tugas Keluar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Performa Kerja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>

  <!-- POTONGAN -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>POTONGAN</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Ketidakhadiran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 116px; box-shadow: -2px 3px 5px #84868A; float:right;"><strong>Submit</strong></button>
</form>
</div>
@endsection