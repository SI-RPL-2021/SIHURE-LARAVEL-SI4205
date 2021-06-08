@extends('tampilan.test')


@section('title', 'Gaji')

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
<div class="container">
    <div class="btn-group">
        <div class="dropdown" style='padding-right:40px;'>
            <button class="btn dropdown-toggle" type="button" id="bulan " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#5882B7; color:white; border-radius: 22px">
                Bulan
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Januari</a>
                <a class="dropdown-item" href="#">Februari</a>
                <a class="dropdown-item" href="#">Maret</a>
                <a class="dropdown-item" href="#">April</a>
                <a class="dropdown-item" href="#">Mei</a>
                <a class="dropdown-item" href="#">Juni</a>
                <a class="dropdown-item" href="#">Juli</a>
                <a class="dropdown-item" href="#">Agustus</a>
                <a class="dropdown-item" href="#">September</a>
                <a class="dropdown-item" href="#">Oktober</a>
                <a class="dropdown-item" href="#">November</a>
                <a class="dropdown-item" href="#">Desember</a>
            </div>
        </div>

        <form>
            <input class="search" type="text" style= "background-color:white; height: 35px; border-radius:22px 0px 0px 22px; border: 0px;" &nbsp; placeholder="Search">
            <button style= "background-color:#5882B7; color:white; height: 35px; border-radius:0px 22px 22px 0px; border:0px;"><i class="fas fa-search"></i></button>
        </form>
    </div>
    {{-- <p>Welcome to SIHURE</p> --}}

    <!-- Table -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <table class="table" style="border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
                    <!-- Header Table -->
                    <thead style="background-color:#93a7cf;color:white;">
                        <tr>
                            <th style="text-align:center;">No.</th>
                            <th style="text-align:center;">Bulan</th>
                            <th style="text-align:center;">Jumlah Gaji</th>
                            <th style="text-align:center;">Action</th>
                    </thead>
                    <!-- Konten Table -->
                    <tbody>
                        <tr>
                            <td style="text-align:center;">1</td>
                            <td style="text-align:center;">Januari</td>
                            <td style="text-align:center;">5000000</td>
                            <td style="text-align:center;"><button type="submit" class="btn btn-primary" style="background-color:#373FF8; color:white; border-radius:22px"><a href="/karyawan/viewgaji" style="color:white;">View</a></button></td>
                        </tr>

                        <tr>
                            <td style="text-align:center;">2</td>
                            <td style="text-align:center;">Februari</td>
                            <td style="text-align:center;">6000000</td>
                            <td style="text-align:center;"><button type="submit" class="btn btn-primary" style="background-color:#373FF8; color:white; border-radius:22px;"><a href="/karyawan/viewgaji" style="color:white;">View</a></button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
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