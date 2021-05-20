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
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
</script>
<br>
<h2 style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>AJUKAN CUTI</h2>
<h2 style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:20px; font-weight: 500;'>Jatah Cuti : 00</h2>

{{-- <p>Welcome to SIHURE</p> --}}

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12">
        <button type="button" class="btn float-left" style="background-color:#5882B7; color:white;" name="addcuti" data-toggle="modal" data-target="#addcuti">Ajukan Cuti</button> <br>
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
                        <th style="text-align:center;">Keterangan</th>
                    </tr>
                </thead>
                <!-- Konten Table -->
                <tbody>
                    <tr style="text-align:center;">
                        <th>1</th>
                        <td>3</td>
                        <td>08/05/2021</td>
                        <td>10/05/2021</td>
                        <td>Approved</td>
                        <td>Lanjutkan</td>
                    </tr>
                    <tr style="text-align:center;">
                        <th>2</th>
                        <td>2</td>
                        <td>08/05/2021</td>
                        <td>09/05/2021</td>
                        <td>Rejected</td>
                        <td>Ajukan Ulang</td>
                    </tr>
                    <tr style="text-align:center;">
                        <th>3</th>
                        <td>1</td>
                        <td>10/05/2021</td>
                        <td>10/05/2021</td>
                        <td>Pending</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   
    <!-- modals -->
    <div class="modal fade" id="addcuti" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLabel" style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:20px;'>Pengajuan Cuti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="id"> NIP :</label>
                            <input type="text" class="form-control" name="id" id="id" />
                        </div>
                        <div class="form-group">
                            <label for="AlasanCuti">Alasan Cuti :</label>
                            <textarea class="form-control" rows="3" name="AlasanCuti" id="AlasanCuti"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="TanggalMulai">Tanggal Mulai:</label>
                            <input type="date" class="form-control" name="TanggalMulai" id="TanggalMulai" />
                        </div>
                        <div class="form-group">
                            <label for="TanggalSelesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control" name="TanggalSelesai" id="TanggalSelesai" />
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" style="background-color:#5882B7"; name="submitcuti" data-toggle="modal" data-target="#submitcuti">Submit</button>
                </div>
            </div>
        </div>
    </div>

@endsection 