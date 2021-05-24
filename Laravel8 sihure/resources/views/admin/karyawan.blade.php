@extends('tampilan.test')


@section('title', 'admin')

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
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
        "Oktober", "Nopember", "Desember");
    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
        tahun;

    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();

</script>
<br>
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>
    Status Karyawan</h2>

<div class="container">
    <div class="row">
        <div class="col-12">

            <table class="table table-bordered">
                <!-- Header Table -->
                <thead style="background-color:#5882B7;color:white;">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">No hp</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">Status</th>

                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>

                    <?php $no = 1; ?>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                @if ($data->status == 'online')
                                    <p style="color: green;"> {{ $data->status }} </p>
                                @else
                                    <p style="color: red;"> {{ $data->status }} </p>
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
