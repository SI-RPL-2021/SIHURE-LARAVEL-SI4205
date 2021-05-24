@extends('tampilan.test')


@section('title', 'admin')

@section('content')

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
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>LIHAT LEMBUR</h2>



<div class="container">
    <div class="row">
        <div class="col-12">
            <br><br>
            <table class="table table-bordered">
                <!-- Header Table -->
                <thead style= "background-color:#5882B7;color:white;">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Tanggal</th>
                        <th style="text-align:center;">Jumlah Jam</th>
                        <th style="text-align:center;">Status</th>

                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>

                    <?php $no = 1; ?>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>{{ $data->jumlah_jam }} Jam</td>
                            <td>
                                @if ($data->status == 1)
                                    <button
                                        class="btn btn-success  animate__animated animate__bounceIn">Approved</button>
                                @elseif ( $data->status == 2 )
                                    <button class="btn btn-danger  animate__animated animate__bounceIn">Not
                                        Approve</button>
                                @elseif ( $data->status == 0 )
                                    <button type="button"
                                        class="btn btn-sm btn-warning animate__animated animate__bounceIn"
                                        data-toggle="modal" data-target="#delete{{ $data->id }}">Pending</button>
                                @endif

                            </td>


                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
