@extends('tampilan.test')


@section('title', 'hr')

@section('content')

    <a href="/hr/cuti" type="button" class="btn btn-block btn-outline-warning btn-lg">back</a>
    <br>

    @if (session('pesan'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{ session('pesan') }}.
    </div>

@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">tambah jatah cuti</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>jabatan</th>
                                <th>jatah cuti</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>
                            @foreach ($data_all[0] as $data)

                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->divisi }}</td>
                                    <td>{{ $data_all[1]->jumlahhari }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#delete{{ $data->id }}">
                                            Tambah Cuti Baru
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @foreach ($data_all[2] as $data)
        <div class="modal fade" id="delete{{ $data->id_user }}">
            <div class="modal-dialog">
                <div class="modal-content bg-default ">
                    <form action="/hr/jatahcuti/{id}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ csrf_field() }} -->

                        <div class="modal-header">
                            <h4 class="modal-title">Tambah jatah cuti</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group " style="width: 400px">
                                <input type="hidden" name="iduser" value="{{$data->id_user}}">
                                <input type="hidden" name="status" value="4">
                                <input type="hidden" name="nip" value="{{$data->nip}}">
                                <input type="hidden" name="keterangan" value="penambahan jatah cuti">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama : </label>
                                <input type="text" class="form-control" name="nama" readonly="true"
                                    value="{{ $data->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Jatah Cuti</label>
                                <input type="text" class="form-control" name="jatah" required >
                            </div>
                            {{-- <div class="form-group">
                                <label for="nama">Keterangan </label>
                                <input type="text" class="form-control" name="keterangan" required>
                            </div> --}}

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn  btn-outline-primary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn  btn-primary">tambah jatah cuti</button>
                        </div>
                </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach



@endsection
