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
                            <th style="text-align:center;">Jumlah Gaji</th>
                    </thead>
                    <!-- Konten Table -->
                    <?php $no = 1; ?>
                        @foreach ($data_all as $data)
                        
                    <tbody>
                        <tr>
                            <td style="text-align:center;">{{$no++}}</td>
                            <td style="text-align:center;">{{$data->gaji_pokok+$data->tunjangan_anak+$data->biaya_transportasi+$data->tunjangan_kesehatan-$data->pajak_pendapatan+$data->lembur+$data->tugas_keluar+$data->performa_kerja-$data->ketidak_hadiran}}</td>
                        </tr>
                    </tbody>
                    @endforeach

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