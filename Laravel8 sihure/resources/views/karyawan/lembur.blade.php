@extends('tampilan.test')


@section('title', 'karyawan')

@section('content')
    {{-- <p>Welcome to SIHURE</p> --}}
    @if (session('pesan'))

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('pesan') }}.
        </div>

    @endif


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
                            <th scope="col">Jumlah Jam</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1; ?>
                        @foreach ($data_all as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->jumlah_jam }} Jam</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>

                                    @if ($data->status == 1)
                                    <button class="btn btn-success  animate__animated animate__bounceIn">Approved</button>
                                @elseif ( $data->status == 2 )
                                    <button class="btn btn-danger  animate__animated animate__bounceIn">Not Approve</button>
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
        </form>
    </div>

    <!-- modals -->
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
                    <form action="/karyawan/lembur/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="nama" readonly="true" value="">
                            <input type="hidden" class="form-control" name="status" readonly="true" value="0">
                        </div>
                        <div class="form-group">
                            <label for="id"> nama :</label>
                            <input type="text" class="form-control" name="nama" id="id" value="adli" readonly>
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
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
