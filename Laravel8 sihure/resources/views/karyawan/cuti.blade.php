@extends('tampilan.test')


@section('title', 'Jatah dan Status Cuti')

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
    <h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>
        AJUKAN CUTI</h2>
    <h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:20px; font-weight: 500;'>
        Jatah Cuti : @if ($test->jumlahhari <= 0)
            <p>
                Jatah telah habis
            </p>
    @else ()
            {{ $test->jumlahhari }} hari
              @endif</h2>

    {{-- <p>Welcome to SIHURE</p> --}}

    <!-- Table -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                @if ($test->jumlahhari <= 0)
                <button type="button" class="btn float-left" style="background-color:red; color:white;" name="addcuti"
                data-toggle="modal"">Ajukan Cuti</button> <br>
                @else ()
                <button type="button" class="btn float-left" style="background-color:#5882B7; color:white;" name="addcuti"
                    data-toggle="modal" data-target="#addcuti">Ajukan Cuti</button> <br>
                @endif
                <br>
                <table class="table table-bordered">
                    <!-- Header Table -->
                    <thead style="background-color:#5882B7;color:white;">
                        <tr>
                            <th style="text-align:center;">No.</th>
                            <th style="text-align:center;">Jumlah Hari</th>
                            <th style="text-align:center;">Tanggal Mulai</th>
                            <th style="text-align:center;">Tanggal Selesai</th>
                            <th style="text-align:center;">Status</th>
                            <th style="text-align:center;">Alasan</th>
                        </tr>
                    </thead>
                    <!-- Konten Table -->
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $data)

                            <tr>
                                <td>{{ $no++ }}</td>

                                @if ($data->jumlahhari < 0)
                                    @if ($data->status == 1) <td style="color:
                                    rgb(245, 37,
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
                                        <button
                                            class="btn btn-success  animate__animated animate__bounceIn">Approved</button>
                                    @elseif ( $data->status == 2 )
                                        <button class="btn btn-danger  animate__animated animate__bounceIn">Not
                                            Approve</button>
                                    @elseif ( $data->status == 0 )
                                        <button
                                            class="btn btn-warning  animate__animated animate__bounceIn">Pending</button>
                                    @elseif ( $data->status == 3 )
                                        <button
                                            class="btn btn-sm btn-secondary  animate__animated animate__bounceIn">Penambahan
                                            cuti</button>
                                    @endif

                                </td>
                                <td>{{ $data->alasan }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- modals -->
        <div class="modal fade" id="addcuti">
            <div class="modal-dialog">
                <div class="modal-content bg-default ">
                    <form action="/karyawan/tabel" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ csrf_field() }} -->

                        <div class="modal-header">
                            <h4 class="modal-title">Ajukan Cuti</h4>
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
                                        <input type="hidden" name="jumlahcuti" value="{{$test->jumlahhari}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" name="name" readonly="true"
                                            value="{{ Auth::user()->name }}" required>
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
                                        <label for="check-in">Tanggal Selesai:</label>
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

    @endsection
