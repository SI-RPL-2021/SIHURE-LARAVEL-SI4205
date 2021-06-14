@extends('tampilan.test')


@section('title', 'hr')

@section('content')
    <h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
        <strong>ABSENSI</strong></h1>
    <br>
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
