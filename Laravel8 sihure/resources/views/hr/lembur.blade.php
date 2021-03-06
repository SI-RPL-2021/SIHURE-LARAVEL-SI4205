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
                    @foreach ($data_all[0] as $data)
                    <tr>
                        <td style="text-align:left;">{{ $no++ }}</td>
                        <td style="text-align:center;">{{ $data->name }}</td>
                        <td style="text-align:center;">{{ $data->divisi }}</td>
                        <td style="text-align:center;"><a href="/hr/lembur/{{$data->id}}" type="button" class="btn btn-sm btn-primary"
                        style="border-radius:22px; height: 36px; width:100px;"><strong>
                                View
                            </strong></a></td>

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
                                <button class="btn btn-success  animate__animated animate__bounceIn">Approved</button>
                                @elseif ( $data->status == 2 )
                                <button class="btn btn-danger  animate__animated animate__bounceIn">Not
                                    Approve</button>
                                @elseif ( $data->status == 0 )
                                <button class="btn btn-warning  animate__animated animate__bounceIn">Pending</button>
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