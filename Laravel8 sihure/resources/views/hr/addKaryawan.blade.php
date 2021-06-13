@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>TAMBAH KARYAWAN test</strong>
</h1>
<br>
<br>
<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
<br>
<p style='text-align:left;font-family:Open Sans,Arial,sans-serif; font-size:16px;'><strong>BUAT AKUN</strong></p>
<form action="/hr/addKaryawan/input" method="post" enctype="multipart/form-data">
    @csrf
    <!-- {{ csrf_field() }} -->
    <!-- BUAT AKUN -->

  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label" style="color:#525A63;">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputEmail" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Divisi</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="divisi">
        <option selected>Pilih Role</option>
        <option value="karyawan">Karyawan</option>
        <option value="hr">HR</option>
        <option value="admin">Admin</option>
      </select>
    </div>
  </div>
  <br>

  <!-- DATA PRIBADI -->
  <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
  <strong>DATA PRIBADI</strong></p>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="nip">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Agama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="agama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tempat_lahir">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail" name="tanggal_lahir">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Umur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="umur">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Jenis Kelamin</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kelamin">
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="alamat">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Nomor Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="no_hp">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="no_tlpn">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Status pernikahan</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
        <option value="sudah">sudah</option>
        <option value="belum">belum</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Jumlah Anak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="jumlah_anak">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Tahun Masuk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="tahun_masuk">
    </div>
  </div>
  <button type="submit" class="btn  btn-success"><strong>Submit</strong></button>
</form>

</div>
@endsection
