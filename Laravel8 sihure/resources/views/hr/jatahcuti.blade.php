@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>JATAH CUTI</strong>
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
                        <th style="text-align:left; padding-left:20px;">No.</th>
                        <th style="text-align:center;">NIP</th>
                        <th style="text-align:center; padding-left:40px; padding-right:40px;">Nama</th>
                        <th style="text-align:center;">Jumlah Jatah Cuti</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data_all[0] as $data)

                    <tr>
                        <td style="text-align: left; padding-left:20px;">{{ $no++ }}</td>
                        <td style="text-align: center;">{{ $data->name }}</td>
                        <td style="text-align: center;">{{ $data->divisi }}</td>
                        <td style="text-align: center;">{{ $data->jumlahcuti }}</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-sm" 
                            style="background-color: #296CD9; border-radius:22px; width:116px; height:40px; font-size:14px; color:white;" 
                            data-toggle="modal" data-target="#delete{{ $data->id }}"><strong>
                                Edit
                           </strong> </button>
                        </td>
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
                        <input type="hidden" name="iduser" value="{{ $data->id }}">
                        <input type="hidden" name="status" value="3">
                        <input type="hidden" name="keterangan" value="penambahan jatah cuti">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input type="text" class="form-control" name="nama" readonly="true" value="{{ $data->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Jatah Cuti</label>
                        <input type="text" class="form-control" name="jatah" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" style="border-radius: 22px; height: 40px; width: 96px;" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn  btn-success" style="border-radius: 22px; height: 40px; width: 96px;">Submit</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

@endsection