@extends('tampilan.test')


@section('title', 'hr')

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

<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>APPROVAL CUTI</h1>
<br>
<br>

<!-- Table -->

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <!-- Header Table -->
        <thead style="background: #5882B7; color:white;">
          <tr>
            <th style="text-align:center;">No.</th>
            <th style="text-align:center;">NIP</th>
            <th style="text-align:center;">Nama</th>
            <th style="text-align:center;">Tanggal Input</th>
            <th style="text-align:center;">Status</th>
          </tr>
        </thead>
        <!-- Konten Table -->
        <tbody>
          <tr>
            <th style="text-align:center;">1</th>
            <td>1202183361</td>
            <td>Anastassya Gustirani</td>
            <td>15-01-2021</td>
            <td style="text-align:center;"><button type="button" class="btn btn-success">Approved</button></td>
          </tr>
          <tr>
            <th style="text-align:center;">2</th>
            <td>1202180000</td>
            <td>ABCDE</td>
            <td>15-01-2021</td>
            <td style="text-align:center;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Pending</button></td>
          </tr>
          <tr>
            <th style="text-align:center;">3</th>
            <td>1202180001</td>
            <td>ABCDEF</td>
            <td>15-01-2021</td>
            <td style="text-align:center;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit">Not Approved</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" role="dialog" aria-labelledby="Edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">Edit Jatah Cuti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="Nama" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="Nama">
          </div>
          <div class="form-group">
            <label for="NIP" class="col-form-label">NIP:</label>
            <input type="text" class="form-control" id="NIP"></textarea>
          </div>
          <div class="form-group">
            <label for="alasanCuti" class="col-form-label">Alasan Cuti:</label>
            <textarea class="form-control" id="alasanCuti"></textarea>
          </div>
          <div class="form-group">
            <label for="Start" class="col-form-label">Tanggal Mulai:</label>
            <input type="date" class="form-control" id="Start"></textarea>
          </div>
          <div class="form-group">
            <label for="End" class="col-form-label">Tanggal Selesai:</label>
            <input type="date" class="form-control" id="End"></textarea>
          </div>
          <div class="form-group">
            <label for="status">Status:</label> <br>
            <select name="status" id="status" style='width:465px; height:30px;'>
              <option value="approved">Approved</option>
              <option value="not approved">Not Approved</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Keterangan" class="col-form-label">Keterangan:</label>
            <textarea type="text" class="form-control" id="Keterangan"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn" style="background: #5882B7; color:white;">Submit</button>
      </div>
    </div>
  </div>
</div>

@endsection
