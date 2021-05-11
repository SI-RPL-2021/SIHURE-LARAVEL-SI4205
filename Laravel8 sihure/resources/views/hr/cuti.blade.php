@extends('tampilan.test')


@section('title', 'hr')

@section('content')

@if (session('pesan'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

        });

    </script>
     @endif

    @if (session('pesan'))

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('pesan') }}.
        </div>

    @endif

     <a href="/hr/jatahcuti" type="button" class="btn btn-block btn-outline-warning btn-lg">Jatah Cuti Karyawan</a>

     <h3
        style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:30px; font-weight: 500; padding-top : 50px'>
        APPROVED</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Input</th>
                <th>Jumlah Hari</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            @foreach ($data_all[1] as $data)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nip }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->tanggalmulai }}</td>
                    <td>{{ $data->jumlahhari * -1 }} Hari</td>
                    <td> <div class="btn btn-sm btn-success">Approved</div></td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <h3
        style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:30px; font-weight: 500; padding-top : 50px'>
        NOT APPROVE</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Input</th>
                <th>Jumlah Hari</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            @foreach ($data_all[2]  as $data)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nip }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->tanggalmulai }}</td>
                    <td>{{ $data->jumlahhari * -1 }} Hari</td>
                    {{-- <td><a href="/hr/cuti/{{$data->id}}" class="btn btn-danger">{{ $data->status }}</a></td> --}}
                    <td> <div class="btn btn-sm btn-danger">Not Approve</div></td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <h3
    style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:30px; font-weight: 500; padding-top : 50px'>
    PENDING</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Input</th>
                <th>Jumlah Hari</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            @foreach ($data_all[0] as $data)

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nip }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->tanggalmulai }}</td>
                    <td>{{ $data->jumlahhari * -1 }} Hari</td>
                    {{-- <td><a href="/hr/cuti/{{$data->id}}" class="btn btn-danger">{{ $data->status }}</a></td> --}}
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                            data-target="#delete{{ $data->id }}">
                            Pending
                        </button></td>

                </tr>
            @endforeach

        </tbody>
    </table>

    @foreach ($data_all[0] as $data)
        <div class="modal fade" id="delete{{ $data->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h4 class="modal-title">Approval Cuti</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="/hr/approvecuti" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <div class="form-group">
                                <label for="nama">NIP: </label>
                                <input type="text" class="form-control" readonly="true" value="{{ $data->nip }}">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" readonly="true"
                                    value="{{ $data->id }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" readonly="true" value="{{ $data->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="nama">Alasan Cuti:</label>
                                <input type="text" class="form-control" readonly="true" value="{{ $data->alasan }}">
                            </div>
                            <div class="form-group">
                                <label for="check-in">Tanggal Mulai:</label>
                                <input type="date" class="form-control" readonly="true"
                                    value="{{ $data->tanggalmulai }}">
                            </div>
                            <div class="form-group">
                                <label for="check-in">Tanggal Selesai:</label>
                                <input type="date" class="form-control" readonly="true"
                                    value="{{ $data->tanggalberakhir }}">
                            </div>

                            <div class="form-group">
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

@endsection
