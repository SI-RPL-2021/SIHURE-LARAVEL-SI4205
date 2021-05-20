@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h6 style="text-align:right;color:#525A63;"><span id="tanggal"></span></h6>
<h6 style="text-align:right;color:#525A63;"><span id="waktu"></span></h6>
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

<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>LEMBUR</h1>
    <br>
    <br>

<!-- Button -->

<div class="container">
<div class="btn-group">
<div class="dropdown" style='padding-right:30px;'>
  <button class="btn dropdown-toggle" type="button" id="Divisi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#3c8dbc; color:white;">
    Divisi
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">HR</a>
    <a class="dropdown-item" href="#">IT</a>
    <a class="dropdown-item" href="#">dll</a>
  </div>
</div>
<div class="dropdown" style='padding-right:30px;'>
  <button class="btn dropdown-toggle" type="button" id="tahun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#5882B7; color:white;" >
    Tahun
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">2021</a>
    <a class="dropdown-item" href="#">2020</a>
    <a class="dropdown-item" href="#">2019</a>
  </div>
</div>
<div class="dropdown" >
  <button class="btn dropdown-toggle" type="button" id="bulan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#5882B7; color:white;">
    Bulan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Januari</a>
    <a class="dropdown-item" href="#">Februari</a>
    <a class="dropdown-item" href="#">Maret</a>
    <a class="dropdown-item" href="#">April</a>
    <a class="dropdown-item" href="#">Mei</a>
    <a class="dropdown-item" href="#">Juni</a>
  </div>
</div>
<div class="btn-group" style='padding-right:0; padding-left:30px;'>
  <div class="form-outline">
    <input id="search-focus" type="search" id="form1" class="form-control">
  </div>
  <div class="btn-group">
  <button type="button" class="btn" style='height: 38px;background-color:#5882B7; color:white;'>
    <i class="fas fa-search"></i>
  </button>
</div>
</div>
</div>
</div>
<br>

<!-- Table -->

<div class="container">
<div class="row">
<div class="col-12">
<table class="table table-bordered">
<!-- Header Table -->
  <thead style="background: #5882B7; color:white;">
    <tr>
      <th style="text-align:center;">No.</th>
      <th style="text-align:center;">NIP</th>
      <th style="text-align:center;">Nama</th>
      <th style="text-align:center;">Tanggal</th>
      <th style="text-align:center;">Jam Mulai</th>
      <th style="text-align:center;">Jam Selesai</th>
      <th style="text-align:center;">Jumlah Jam</th>
    </tr>
  </thead>

  <!-- Konten Table -->

  <tbody>
    <tr>
      <th style="text-align:center;">1</th>
      <td>1202183361</td>
      <td>Anastassya Gustirani</td>
      <td>12 Maret 2021</td>
      <td>19.00</td>
      <td>21.00</td>
      <td>02:00</td>
    </tr>
    <tr>
      <th style="text-align:center;">2</th>
      <td>1202180000</td>
      <td>Bagus Sekali</td>
      <td>10 Maret 2021</td>
      <td>19.00</td>
      <td>20.00</td>
      <td>01:00</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
@endsection
