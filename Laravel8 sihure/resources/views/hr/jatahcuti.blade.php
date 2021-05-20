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

<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>JATAH CUTI</h1>
    <br>
    <br>

<!-- Table -->

<div class="container">
<div class="row">
<div class="col-12">
<table class="table table-bordered">
<!-- Header Table -->
  <thead style="background:  #5882B7;">
    <tr style="color:white;">
      <th style="text-align:center;">No.</th>
      <th style="text-align:center;">NIP</th>
      <th style="text-align:center;">Nama</th>
      <th style="text-align:center;">Jumlah Jatah Cuti</th>
      <th style="text-align:center;">Action</th>
    </tr>
  </thead>
  <!-- Konten Table -->
  <tbody>
    <tr>
      <th style="text-align:center;">1</th>
      <td>1202183361</td>
      <td>Anastassya Gustirani</td>
      <td>15</td>
      <td style="text-align:center;"><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
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
            <textarea class="form-control" id="id" name="id"></textarea>
          </div>
          <div class="form-group">
            <label for="jatahCuti" class="col-form-label">Jatah Cuti:</label>
            <input type="text" class="form-control" id="jatahCuti">
          </div>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn" style="background:  #5882B7;color:white;">Submit</button>
      </div>
    </div>
  </div>
</div>


@endsection
