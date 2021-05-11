@extends('tampilan.test')


@section('title', 'karyawan')

@section('content')


    @if (session('pesan'))

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('pesan') }}.
        </div>

    @endif

    <div style="margin-top:50px; margin-left:300px;width: 700px; ">

        <h3 style="text-align:center;color:black;font-weight:bolder;">CUTI</h3>

        @if ($test->jumlahhari <= 0)
        <button type="button" class="btn btn-bg btn-danger" data-toggle="modal">
           Tambah Cuti Baru
        </button>
        @else ()
        <button type="button" class="btn btn-bg btn-secondary" data-toggle="modal" data-target="#modal-absenmasuk">
            Tambah Cuti Baru
        </button>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jatah Cuti</th>
                    <th>
                        @if ($test->jumlahhari <= 0)
                        <button style="" type="button" class="btn btn-bg btn-secondary"">
                            Jatah telah habis
                        </button>
                        @else ()
                        {{ $test->jumlahhari }} hari
                        @endif
                    </th>
                </tr>
            </thead>
        </table>
    </div>

    <div style="margin-top:5px; margin-left:300px;width: 700px;">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jumlah Hari</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $data)

                    <tr>
                        <td>{{ $no++ }}</td>
                        @if ($data->jumlahhari < 0)
                            @if ($data->status == 1) <td style="color: rgb(245, 37,
                            37); font-weight: bold">{{ $data->jumlahhari }}
                            Hari</td>
                        @else
                            <td>{{ $data->jumlahhari * -1 }} Hari</td> @endif
                        @else
                            <td style="color: rgb(30, 212, 76); font-weight: bold">+
                                {{ $data->jumlahhari }} Hari</td>
                        @endif
                        <td>{{ $data->tanggalmulai }}</td>
                        <td>{{ $data->tanggalberakhir }}</td>
                        <td>
                            @if ($data->status == 1)
                                <button class="btn btn-success  animate__animated animate__bounceIn">Approved</button>
                            @elseif ( $data->status == 2 )
                                <button class="btn btn-danger  animate__animated animate__bounceIn">Not Approve</button>
                            @elseif ( $data->status == 0 )
                                <button class="btn btn-warning  animate__animated animate__bounceIn">Pending</button>
                            @elseif ( $data->status == 4 )
                                <button class="btn btn-sm btn-secondary  animate__animated animate__bounceIn">Penambahan
                                    cuti</button>
                            @endif

                        </td>
                        <td>{{ $data->keterangan }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>







    {{-- <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 600px; height: 650px;">
                        <div class="card bg-light text-dark"></div>
                        <div class="card-body">

                            <div class="form-group">
                                <input type="hidden" name="iduser" value="{{ $test->id }}">
                                <input type="hidden" name="status" value="gagal">

                            </div>
                            <div class="form-group">
                                <label for="nama">NIP:</label>
                                <input type="text" class="form-control" name="nip" readonly="true"
                                    value="{{ $test->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Alasan Cuti:</label>
                                <textarea class="form-control" rows="3" name="alasan" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="check-in">Jumlah Hari:</label>
                                <input type="text" class="form-control" name="jumlah" />
                            </div>

                            <div class="form-group">
                                <label for="check-in">Tanggal Mulai:</label>
                                <input type="date" class="form-control" name="mulai" required>
                            </div>
                            <div class="form-group">
                                <label for="check-in">Tanggal Berakhir:</label>
                                <input type="date" class="form-control" name="akhir" required>
                            </div>

                            <div class="form-group">
                                <br><br>
                                <button type="submit" class="btn btn-danger float-right"
                                    style="margin-left: 5px;">Cancel</button>
                                <a href="/karyawan/absenpulang/tabel" class="btn btn-primary float-right">Submit</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </div>

    </div>
    </form> --}}


    <div class="modal fade" id="modal-absenmasuk">
        <div class="modal-dialog">
            <div class="modal-content bg-default ">
                <form action="/karyawan/tabel" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->

                    <div class="modal-header">
                        <h4 class="modal-title">test</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col">

                                <div class="form-group " style="width: 400px">
                                    <input type="hidden" name="iduser" value="{{ $test->id_user }}">
                                    <input type="hidden" name="status" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="nama">NIP:</label>
                                    <input type="text" class="form-control" name="nip" readonly="true"
                                        value="{{ $test->id_user }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Alasan Cuti:</label>
                                    <textarea class="form-control" rows="3" name="alasan" required></textarea>
                                </div>

                                {{-- <div class="form-group">
                                    <label for="check-in">Jumlah Hari:</label>
                                    <input type="text" class="form-control" name="jumlah" />
                                </div> --}}


                                <div class="form-group">
                                    <label for="check-in">Tanggal Mulai:</label>
                                    <input type="date" class="form-control" name="mulai">
                                </div>
                                <div class="form-group">
                                    <label for="check-in">Tanggal Berakhir:</label>
                                    <input type="date" class="form-control" name="akhir">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn  btn-outline-primary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn  btn-primary">Yes</button>
                    </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>








    {{-- <div class="modal fade" id="modal-absenmasuk">
        <div class="modal-dialog ">
            <div class="modal-content bg-default modal-bg ">
                <form action="/karyawan/buattabel" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->

                    <div class="modal-header">
                        <h3 class="modal-title" style="text-align:center;color:black;font-weight:bolder;">Permohonan
                            Pengajuan Cuti</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="d-flex justify-content-center" style="margin-top: 10px">



                            <div class="row">
                                <div class="col">




                                    <div class="form-group " style="width: 400px">
                                        <input type="hidden" name="iduser" value="{{ $test->id }}">
                                        <input type="hidden" name="status" value="gagal">

                                    </div>
                                    <div class="form-group">
                                        <label for="nama">NIP:</label>
                                        <input type="text" class="form-control" name="nip" readonly="true"
                                            value="{{ $test->nama }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Alasan Cuti:</label>
                                        <textarea class="form-control" rows="3" name="alasan" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="check-in">Jumlah Hari:</label>
                                        <input type="text" class="form-control" name="jumlah" />
                                    </div>

                                    <div class="form-group">
                                        <label for="check-in">Tanggal Mulai:</label>
                                        <input type="date" class="form-control" name="mulai" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="check-in">Tanggal Berakhir:</label>
                                        <input type="date" class="form-control" name="akhir" required>
                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn  btn-outline-primary"
                                            data-dismiss="modal">cancel</button>
                                        <button type="submit" class="btn  btn-primary">submit</button>
                                    </div>


                                </div>
                            </div>


                        </div>

                    </div>


                </form>
            </div>

        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog --> --}}


@endsection
