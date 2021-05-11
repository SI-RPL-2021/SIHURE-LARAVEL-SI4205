@extends('adminlte::page')


@section('title', 'Lembur')

@section('content_header')
<h6 style="text-align:right;color:black;"><span id="tanggal"></span></h6>
<h6 style="text-align:right;color:black;"><span id="waktu"></span></h6>
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
<h2 style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>JUMLAH CUTI</h2>

@stop

@section('content')
{{-- <p>Welcome to SIHURE</p> --}}

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12"> 
            
            <table class="table table-bordered">
                <!-- Header Table -->
                <thead class="bg-lightblue">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">NIP</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Jatah Cuti</th>

                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>
                    <tr style="text-align:center;">
                        <th>1</th>
                        <td>1234</td>
                        <td>Dhane</td>
                        <td>21</td>
                       

                    </tr>
                    <tr style="text-align:center;">
                        <th>1</th>
                        <td>1234</td>
                        <td>Dhane</td>
                        <td>21</td>
                    

                    </tr>
                    <tr style="text-align:center;">
                        <th>1</th>
                        <td>1234</td>
                        <td>Dhane</td>
                        <td>21</td>
                       
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