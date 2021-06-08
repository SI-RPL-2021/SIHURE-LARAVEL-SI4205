@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>DATA KARYAWAN</strong>
</h1>
<br>
<div class="container">
    <div class="btn-group">
        <td style="text-align:center;"><a href="/hr/addKaryawan" button type="button" class="btn btn" 
        style="background-color:#5882B7; color:white; border-radius: 22px; box-shadow: -2px 3px 5px #84868A; height:40px; width: 160px;"><strong>
                    Tambah Karyawan
                </strong></a></td>

        <!-- <button type="button" class="btn float-left" style="background-color:#5882B7; color:white; border-radius: 22px; box-shadow: -2px 3px 5px #84868A; height:40px; width: 160px;" name="addKaryawan" href="/hr/addKaryawan"><strong>Tambah Karyawan</strong></button> <br> -->
    </div>
</div>
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
                        <th style="text-align:center;">Divisi</th>
                        <th style="text-align:center;">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align:left;">1</td>
                        <td style="text-align:center;">Anastassya Gustirani</td>
                        <td style="text-align:center;">Karyawan</td>
                        <td style="text-align:center;"><a href="/hr/editkaryawan" button type="button" class="btn btn" style="background-color: #296CD9; border-radius:22px; width:116px; height:40px; font-size:14px; color:white;"><strong>
                                    Edit
                                </strong></a></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection