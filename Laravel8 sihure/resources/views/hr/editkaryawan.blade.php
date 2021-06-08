@extends('tampilan.test')


@section('title', 'hr')

@section('content')

<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>EDIT KARYAWAN</strong>
</h1>
<br>
<br>
<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
<br>
<form style="padding-bottom: 80px; padding-left:40px; padding-right:40px;">
<!-- INFORMASI AKUN -->
<p style='text-align:left;font-family:Open Sans,Arial,sans-serif; font-size:16px;'><strong>INFORMASI AKUN</strong></p>
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label" style="color:#525A63;">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Divisi</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Pilih Role</option>
        <option value="1">Karyawan</option>
        <option value="2">HR</option>
        <option value="3">Admin</option>
      </select>
    </div>
  </div>
  <br>

  <!-- INFORMASI PRIBADI -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>INFORMASI PRIBADI</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Agama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Umur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Jenis Kelamin</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option value="1">Pria</option>
        <option value="2">Wanita</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Nomor Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Status Pernikahan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Jumlah Anak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tahun Masuk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
  <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 116px; box-shadow: -2px 3px 5px #84868A; float:right;"><strong>Submit</strong></button>
</form>
</div>
@endsection