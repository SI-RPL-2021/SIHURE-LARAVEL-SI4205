@extends('tampilan.test')


@section('title', 'hr')

@section('content')

    <h3
        style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:30px; font-weight: 500; padding-top : 50px'>
        LEMBUR</h3>
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <div class="row">
            <div class="col" style="width:800px">
                {{-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#addlembur">Ajukan
                    Lembur</button> <br> --}}
                <table class="table table-striped text-center " style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1; ?>
                        @foreach ($data_all[0] as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#delete{{ 1 }}">
                                        view
                                    </button></td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </form>
    </div>


    <div class="modal fade" id="delete{{ 1 }}">
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


@endsection
