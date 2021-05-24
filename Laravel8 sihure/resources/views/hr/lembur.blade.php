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
        LEMBUR</h1>
    <br>
    <br>
    <!-- Table -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped text-center " style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">divisi</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1; ?>
                        @foreach ($data_all[0] as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->divisi }}</td>
                                <td><a href="/hr/lembur/{{$data->id}}" type="button" class="btn btn-sm btn-info">
                                        view
                                </a></td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($data_all[0] as $data)
    <div class="modal fade" id="delete{{ $data->id }}">
        <div class="modal-dialog">
            <div class="modal-content bg-secondary">

                <div class="modal-header">
                    <h4 class="modal-title">Lembur karyawan : {{ $test->name }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table table-striped text-center " style="margin-top: 10px;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah jam</th>
                                <th scope="col">Status</th>
                                <th scope="col">keterangan</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>
                            @foreach ($data_all[1] as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
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
                                            <button
                                                class="btn btn-warning  animate__animated animate__bounceIn">Pending</button>
                                        @endif

                                    </td>
                                    <td>{{ $data->keterangan }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
@endsection
