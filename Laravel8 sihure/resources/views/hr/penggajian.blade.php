@extends('tampilan.test')


@section('title', 'hr')

@section('content')
    <h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
        <strong>DAFTAR KARYAWAN</strong>
    </h1>
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
                            <th style="text-align:center;">Divisi</th>
                            <th style="text-align:center;">Action</th>
                    </thead>


                    <tbody>

                        <?php $no = 1; ?>
                        @foreach ($data_all as $data)

                            <tr>
                                <td style="text-align:left;">{{ $no++ }}</td>
                                <td style="text-align:center;">{{ $data->name }}</td>
                                <td style="text-align:center;">{{ $data->divisi }}</td>
                                <td style="text-align:center;">

                                    <a href="/hr/viewGaji/{{ $data->id }}" button type="button"
                                        class="btn btn-primary"
                                        style="border-radius:22px; width:116px; height:40px; font-size:16px; color:white;"><strong>
                                            view
                                        </strong>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        {{-- <tr>
                        <td style="text-align:left;">1</td>
                        <td style="text-align:center;">Anastassya Gustirani</td>
                        <td style="text-align:center;">Karyawan</td>
                        <td style="text-align:center;"><a href="/hr/editGaji" button type="button" class="btn btn-primary" style="border-radius:22px; width:116px; height:40px; font-size:16px; color:white;"><strong>
                                    View
                                </strong></a>
                            <a href="#" button type="button" class="btn btn-warning" style=" border-radius:22px; width:116px; height:40px; font-size:16px; color:black;"><strong>
                                    Cetak
                                </strong></a>
                        </td>

                    </tr> --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
