@extends('tampilan.test')


@section('title', 'admin')

@section('content')

<h6 style="text-align:right;color:black;"><span id="tanggal"></span></h6>
<h6 style="text-align:right;color:black;"><span id="waktu"></span></h6>
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
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
</script>
<br>
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>LEMBUR</h2>



{{-- <p>Welcome to SIHURE</p> --}}

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-primary float-left" style="background-color:#5882B7 ;" name="addlembur" data-toggle="modal" data-target="#addlembur">Ajukan Lembur</button>
            <a href="/admin/lembur/lihat" type="button" class="btn btn-primary float-left" style="background-color:#5882B7 ; margin-left : 20px">Lihat Lembur</a>
            <br><br>
            <table class="table table-bordered">
                <!-- Header Table -->
                <thead style= "background-color:#5882B7;color:white;">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Tanggal</th>
                        <th style="text-align:center;">Jumlah Jam</th>
                        <th style="text-align:center;">Status</th>

                    </tr>
                </thead>
                <!-- Konten Table -->
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


                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modals pengajuan-->
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
                    <label for="check-in">Tanggal = {{$data->tanggal}}</label><br>
                    <label for="check-in">Jam Mulai - Selesai = {{$data->jam_mulai}} - {{$data->jam_selesai}}</label><br>
                    <label for="check-in">Jumlah Jam = {{$data->jumlah_jam}}</label>
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
                        <input type="hidden" class="form-control" name="status" readonly="true" value="0">
                    </div>
                    <div class="form-group">
                        <label for="id"> nama :</label>
                        <input type="text" class="form-control" name="nama" id="id" value="{{ Auth::user()->name }}" readonly>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" style="background-color:#3c8dbc">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
