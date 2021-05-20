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
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
</script>
<br>
<h2 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>ABSENSI</h2>

{{-- <p>Welcome to SIHURE</p> --}}

<div class="col-sm-12">
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div style="width: 500px; height: 300px" class="card text-center">
                        <div class="card text-center">
                            <div style="background-color:#5882B7;" class="card-body">
                                <h5 class="card-text" style="color:white" ;>Nama: @nama</h5>
                                <p class="card-text" style="color:white">NIP: @id</p>
                                <a style="background-color:white; width: 300px; height: 45px;color:#343a40" class="btn btn-primary" name="todo" data-toggle="modal" data-target="#todo">Masuk</a><br><br>
                                <a style="background-color:white; width: 300px; height: 45px; color:#343a40" class="btn btn-primary">Pulang</a><br><br>
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
<div class="modal fade" id="todo" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLabel" style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:20px;'>To Do List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="8" id="todo" name="todo"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" style="background-color:#5882B7;">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
