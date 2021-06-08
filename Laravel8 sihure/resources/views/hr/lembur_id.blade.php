@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>DATA LEMBUR</strong>
</h1>
<p style="text-align: center; font-size:16px;">nama : {{ $data2->name }}</p>
<br>
<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table" style="border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
                <!-- Header Table -->
                <thead style="background:  #93A7CF;">
                    <tr style="color:white;">
                        <th style="text-align:left;">No</th>
                        <th style="text-align:center;">Tanggal</th>
                        <th style="text-align:center;">Jumlah jam</th>
                        <th style="text-align:center;">Status</th>
                        <th style="text-align:center;">Keterangan</th>
                    </tr>
                </thead>

                <!-- Konten Table -->

                <tbody>

                    <?php $no = 1; ?>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td style="text-align:center;">{{ $data->tanggal }}</td>
                        <td style="text-align:center;">{{ $data->jumlah_jam }}</td>
                        <td style="text-align:center;">
                            @if ($data->status == 1)
                            <button class="btn btn-success  animate__animated animate__bounceIn" 
                            style="border-radius: 22px; height:40px; width: 100px; font-size:16px;"><strong> Approved </strong></button>
                            @elseif ( $data->status == 2 )
                            <button class="btn btn-danger  animate__animated animate__bounceIn"
                            style="border-radius: 22px; height:40px; width: 100px; font-size:16px;"><strong> Not
                                Approve </strong></button>
                            @elseif ( $data->status == 0 )
                            <button class="btn btn-warning  animate__animated animate__bounceIn"
                            style="border-radius: 22px; height:40px; width: 100px; font-size:16px;"><strong>Pending</strong></button>
                            @endif
                        </td>
                        <td style="text-align:center;">{{ $data->keterangan }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection