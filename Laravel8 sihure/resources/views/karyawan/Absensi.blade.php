@extends('tampilan.test')


@section('title', 'karyawan')

@section('content')

    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <div class="row">
            <div class="col">
                <div style="width: 500px; height: 300px" class="card text-center animate__animated animate__fadeIn">

                    <div style="background-color:#B0C4DE" class="card-body">
                        <h5 class="card-text">Nama : {{ Auth::user()->name }} </h5>
                        <p class="card-text">NIP : {{ Auth::user()->id }}</p>
                        {{-- @foreach ($absen_karyawan as $absen)
                            <p>Jam Masuk {{$absen->jam_masuk}}</p>
                        @endforeach --}}
                        @if ($data_absen)
                            <p>Anda sudah absen masuk pada : <span
                                    style="font-weight : bold">{{ $data_absen->jam_masuk }}</span></p>
                            <br>
                            @if ($data_absen->jam_keluar)
                                <p>Anda sudah absen keluar pada : <span
                                        style="font-weight : bold">{{ $data_absen->jam_keluar }}</span></p>
                                <h2></h2>
                            @else
                                <a type="button" href="/karyawan/absenpulang" class="btn btn-bg btn-primary"
                                    style="width: 300px">
                                    Absen Pulang </a>
                            @endif

                        @else
                            <button type="button" class="btn btn-bg btn-secondary" style="width: 300px" data-toggle="modal"
                                data-target="#modal-absenmasuk">
                                Absen Masuk
                            </button>
                        @endif

                    </div>
                    <div class="card-footer text-muted">
                        SIHURE
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-absenmasuk">
        <div class="modal-dialog">
            <div class="modal-content bg-default ">
                <form action="/karyawan/todo" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->

                    <div class="modal-header">
                        <h4 class="modal-title">test</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input name="todo_kegiatan" class="form-control" placeholder="masukan kegiatan hari ini... ">
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
