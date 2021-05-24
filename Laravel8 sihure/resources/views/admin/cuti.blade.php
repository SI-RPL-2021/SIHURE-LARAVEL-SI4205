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
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>CUTI</h2>


{{-- <p>Welcome to SIHURE</p> --}}

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <!-- Header Table -->
                <thead style="background: #5882B7; color:white;">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Tanggal Mulai</th>
                        <th style="text-align:center;">Tanggal Selesai</th>
                        <th style="text-align:center;">Jumlah Hari</th>
                        <th style="text-align:center;">Status</th>
                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>

                    <?php $no = 1; ?>
                    @foreach ($data_all[0] as $data)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tanggalmulai  }}</td>
                            <td>{{ $data->tanggalberakhir }}</td>

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
        </div>
    </div>
</div>


<!-- modals edit-->
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


                <form action="/admin/approvecuti" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->
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
