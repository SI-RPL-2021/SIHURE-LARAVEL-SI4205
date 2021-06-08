@extends('tampilan.test')


@section('title', 'hr')

@section('content')
    <h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
        <strong>ABSENSI</strong></h1>
    <br>
    <br>

    <!-- Button -->

    <div class="container">
        <div class="btn-group">
            <div class="dropdown" style='padding-right:30px;'>
                <button class="btn dropdown-toggle" type="button" id="Divisi" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" 
                    style="background-color:#5882B7; color:white; border-radius: 22px; box-shadow: -2px 3px 5px #84868A; height:40px; width: 100px;">
                    Divisi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item"  href="#">HR</a>
                    <a class="dropdown-item" href="#">IT</a>
                    <a class="dropdown-item" href="#">dll</a>
                </div>
            </div>
            <div class="dropdown" style='padding-right:30px;'>
                <button class="btn dropdown-toggle" type="button" id="tahun" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"
                    style="background-color:#5882B7; color:white; border-radius: 22px; box-shadow: -2px 3px 5px #84868A; height:40px; width: 100px;">
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
                    aria-expanded="false"
                    style="background-color:#5882B7; color:white; border-radius: 22px; box-shadow: -2px 3px 5px #84868A; height:40px; width: 100px;">
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
                <div class="form-outline" >
                    <input id="search-focus" style=" border-radius: 22px 0px 0px 22px;" type="search" id="form1" class="form-control">
                </div>
                <div class="btn-group">
                    <button type="button" class="btn" style='height: 38px;background-color:#5882B7; color:white; border-radius: 0px 22px 22px 0px;'>
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
            <table class="table" style="border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
                <!-- Header Table -->
                <thead style="background:  #93A7CF;">
                    <tr style="color:white;">
                            <th style="text-align:left;">No.</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">To Do</th>
                            <th style="text-align:center;">Jam Masuk</th>
                            <th style="text-align:center;">Jam Keluar</th>
                        </tr>
                    </thead>

                    <!-- Konten Table -->

                    <tbody>

                        <?php $no = 1; ?>
                        @foreach ($data_all as $data)

                            <tr>
                                <td style="text-align:left;">{{ $no++ }}</td>
                                <td style="text-align:center;">{{ $data->nama }}</td>
                                <td style="text-align:center;">{{ $data->todo }}</td>
                                <td style="text-align:center;">{{ $data->jam_masuk }}</td>
                                <td style="text-align:center;">{{ $data->jam_keluar }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
