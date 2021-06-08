@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>APPROVAL CUTI</strong>
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
                        <td style="text-align:left;">{{ $no++ }}</td>
                        <td style="text-align:center;">{{ $data->nama }}</td>
                        <td style="text-align:center;">{{ $data->tanggalmulai  }}</td>
                        <td style="text-align:center;">{{ $data->tanggalberakhir }}</td>
                        <td style="text-align:center;">{{ $data->jumlahhari * -1 }} Hari</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-sm btn-warning" 
                        style="border-radius: 22px; height:40px; width: 100px; font-size:16px;" 
                        data-toggle="modal" data-target="#delete{{ $data->id }}"><strong>
                                Pending
                            </strong></button></td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
@foreach ($data_all[0] as $data)
<div class="modal fade" id="delete{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
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
                        <input type="hidden" class="form-control" name="id" readonly="true" value="{{ $data->id }}">
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
                        <input type="date" class="form-control" readonly="true" value="{{ $data->tanggalmulai }}">
                    </div>
                    <div class="form-group">
                        <label for="check-in">Tanggal Selesai:</label>
                        <input type="date" class="form-control" readonly="true" value="{{ $data->tanggalberakhir }}">
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
                    <button type="button" class="btn btn-danger" style="border-radius: 22px; height: 40px; width: 96px;" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 96px;">Submit</button>
                </div>

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