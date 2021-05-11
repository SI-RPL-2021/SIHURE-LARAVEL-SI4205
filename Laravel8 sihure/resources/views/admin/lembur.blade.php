@extends('tampilan.test')


@section('title', 'admin')

@section('content')

    <h3
        style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:30px; font-weight: 500; padding-top : 50px'>
        LEMBUR</h3>
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <div class="row">
            <div class="col" style="width:800px">
                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#addlembur">Ajukan
            Lembur</button> <br>
                <table class="table table-striped text-center " style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
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
                                <td>{{ $data->keterangan }}</td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </form>
    </div>

    @foreach ($data_all[1] as $data)
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

                        <form action="/admin/approve/lembur" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            {{ $data->id }}
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" readonly="true"
                                        value="{{ $data->id }}">
                                </div>
                                <label for="check-in">Status:</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
                                    <option value="1">Approve</option>
                                    <option value="2">Not Approve</option>
                                    <option value="0" selected>Pending</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="check-in">Keterangan:</label>
                                <input type="text" class="form-control" name="keterangan" required>
                            </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <button class="btn btn-outline-light" type="submit" toastsDefaultInfo>Yes</button>

                        {{-- <a href="/hr/penggajian/{{$data->id}}"class="btn btn-outline-light">Yes</a> --}}
                    </div>
                    </form>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach

    <div class="modal fade" id="addlembur" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLabel"
                        style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:20px;'>
                        Pengajuan Lembur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/admin/lembur/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="nama" readonly="true" value="">
                            <input type="hidden" class="form-control" name="status" readonly="true" value="1">
                        </div>
                        <div class="form-group">
                            <label for="id"> nama :</label>
                            <input type="text" class="form-control" name="nama" id="id" value="admin" readonly>
                        </div>
                        <div class="form-group">
                            <label for="TanggalLembur">Tanggal Lembur :</label>
                            <input type="date" class="form-control" name="tanggal" id="TanggalLembur" required>
                        </div>
                        <div class="form-group">
                            <label for="JamMulai">Jam Mulai:</label>
                            <input type="time" class="form-control" name="mulai" id="JamMulai" required>
                        </div>
                        <div class="form-group">
                            <label for="JamSelesai">Jam Selesai:</label>
                            <input type="time" class="form-control" name="selesai" id="JamSelesai" required>
                        </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ajukan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
