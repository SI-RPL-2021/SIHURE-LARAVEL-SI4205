
<p style='text-align:left;font-family:Open Sans,Arial,sans-serif; font-size:16px;'><strong>BUAT AKUN</strong></p>
<form action="/daftar" method="post" enctype="multipart/form-data">
    @csrf
    <!-- {{ csrf_field() }} -->
    <!-- BUAT AKUN -->

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Divisi</label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="divisi">
        <option selected>Pilih Role</option>
        <option value="karyawan">Karyawan</option>
        <option value="hr">HR</option>
        <option value="admin">Admin</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn  btn-success"><strong>Submit</strong></button>
</form>

</div>
