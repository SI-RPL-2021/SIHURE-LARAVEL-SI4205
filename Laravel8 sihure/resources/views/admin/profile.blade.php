@extends('tampilan.test')


@section('title', 'admin')

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card w-75">
        <div class="card-body">
            <h3 style="text-align:center; margin-top: 10px;">Profile</h3>

            <div class="row">
                <div class="col-sm">
                    <img src="{{ url('/foto/' . $data->foto) }}" style="margin-left: 57px" width="120" height="120"
                        class="d-inline-block align-top" alt="" loading="lazy">
                </div>

                <div class="col-sm-9">

                    @if ($data->status = "online")
                        <p style="color: green; font-size :20px"> {{ $data->status }} </p>
                    @else
                        <p style="color: red; font-size :20px"> {{ $data->status }} </p>
                    @endif

                </div>

            </div>
            <div class="form-group row" style="margin-left: 45px; margin-top: 10px;">
                <button type="submit" class="btn btn-primary col-sm-2" data-toggle="modal"
                    data-target="#modal-absenmasuk">ganti foto</button>
            </div>

        </div>
    </div>
</div>
<hr>

<form action="" method="post">
    <div class="form-group row" style="margin-left: 150px;">
        <label for="email anda" class="col-sm-2 col-form-label"><strong>Nama </strong></label>
        <div class="col-sm-10">
            <strong>: {{ $data->name }} </strong>
        </div>
    </div>
    <div class="form-group row" style="margin-left: 150px;">
        <label for="email anda" class="col-sm-2 col-form-label"><strong>Jabatan </strong></label>
        <div class="col-sm-10">
            <strong>: {{ $data->divisi }} </strong>
        </div>
    </div>
    <div class="form-group row" style="margin-left: 150px;">
        <label for="email anda" class="col-sm-2 col-form-label"><strong>Email </strong></label>
        <div class="col-sm-10">
            <strong>: {{ $data->email }} </strong>
        </div>
    </div>

    <div class="form-group row" style="margin-left: 150px;">
        <label for="nama" class="col-sm-2 col-form-label"><strong>No.HP</strong></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nama" name="hp" value="">
        </div>
    </div>
    <div class="form-group row" style="margin-left: 150px;">
        <label for="nama" class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nama" name="alamat" value="">
        </div>
    </div>


    <div class="form-group row" style="margin-left: 400px;">
        <button type="submit" class="btn btn-success col-sm-2" name="submit2">Update</button>
    </div>
</form>

<div class="modal fade" id="modal-absenmasuk">
    <div class="modal-dialog">
        <div class="modal-content bg-default ">
            <form action="/karyawan/todo" method="post" enctype="multipart/form-data">
                @csrf
                <!-- {{ csrf_field() }} -->

                <div class="modal-header">
                    <h4 class="modal-title">Upload Foto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input name="todo_kegiatan" class="form-control" placeholder="cari ">
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
