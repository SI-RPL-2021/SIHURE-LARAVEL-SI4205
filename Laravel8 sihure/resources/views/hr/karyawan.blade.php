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
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "Nopember", "Desember");
        document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
            tahun;

        var dt = new Date();
        document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();

    </script>
    <br>

    <h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>
        ABSENSI</h1>
    <br>
    <br>

    <div class="container">
        <div class="btn-group">
            <div class="dropdown" style='padding-right:30px;'>
                <button class="btn dropdown-toggle" type="button" id="Divisi" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="background-color:#5882B7; color:white;">
                    Divisi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">HR</a>
                    <a class="dropdown-item" href="#">IT</a>
                    <a class="dropdown-item" href="#">dll</a>
                </div>
            </div>
            <div class="dropdown" style='padding-right:30px;'>
                <button class="btn dropdown-toggle" type="button" id="tahun" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="background-color:#5882B7; color:white;">
                    Tahun
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">2021</a>
                    <a class="dropdown-item" href="#">2020</a>
                    <a class="dropdown-item" href="#">2019</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="bulan" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="background-color:#5882B7; color:white;">
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

                <form action="/hr/karyawan/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                </form>
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
                    <thead style="background: #5882B7;">
                        <tr style="color: white;">
                            <th style="text-align:center;">No.</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">todo</th>
                            <th style="text-align:center;">jam_masuk</th>
                            <th style="text-align:center;">jam_keluar</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach ($pegawai as $data)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->todo }}</td>
                            <td>{{ $data->jam_masuk }}</td>
                            <td>{{ $data->jam_keluar }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
