@extends('tampilan.test')


@section('title', 'Absensi Karyawan')

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
        ABSENSI</h2>

    {{-- <p>Welcome to SIHURE</p> --}}

    <div class="col-sm-12">
        <div class="d-flex justify-content-center" style="margin-top: 10px">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div style="width: 500px; " class="card text-center">
                            <div class="card text-center">
                                <div style="background-color:#5882B7;" class="card-body">
                                    <h5 class="card-text">Nama : {{ Auth::user()->name }} </h5>
                                    <p class="card-text">NIP : {{ Auth::user()->nip }}</p>

                                    {{-- <a style="background-color:white; width: 300px; height: 45px;color:#343a40" class="btn btn-primary" name="todo" data-toggle="modal" data-target="#todo">Masuk</a><br><br>
                                <a style="background-color:white; width: 300px; height: 45px; color:#343a40" class="btn btn-primary">Pulang</a><br><br> --}}
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
                                            style="background-color:white; width: 300px; height: 45px;color:#343a40">
                                                Absen Pulang </a>
                                        @endif

                                    @else
                                        <button type="button" class="btn btn-bg btn-secondary" style="background-color:white; width: 300px; height: 45px;color:#343a40"
                                            data-toggle="modal" data-target="#todo">
                                            Absen Masuk
                                        </button>
                                    @endif

                                </div>
                                <div class="card-footer text-muted">
                                    SIHURE
                                </div>
                            </div>
                        </div>
                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });

                        </script>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- modals-->
    <div class="modal fade" id="todo">
        <div class="modal-dialog">
            <div class="modal-content bg-default ">
                <form action="/karyawan/todo" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->

                    <div class="modal-header">
                        <h4 class="modal-title">todo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input name="todo_kegiatan" class="form-control" placeholder="masukan kegiatan hari ini... " required>
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
