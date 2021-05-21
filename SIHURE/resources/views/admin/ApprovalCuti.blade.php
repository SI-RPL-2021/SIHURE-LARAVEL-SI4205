@extends('adminlte::page')


@section('title', 'Lembur')

@section('content_header')
<h6 style="text-align:right;color:black;"><span id="tanggal"></span></h6>
<h6 style="text-align:right;color:black;"><span id="waktu"></span></h6>
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
<h2 style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>CUTI</h2>

@stop

@section('content')
{{-- <p>Welcome to SIHURE</p> --}}

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-12"> 

            <table class="table table-bordered">
                <!-- Header Table -->
                <thead class="bg-lightblue">
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
                    <tr style="text-align:center;">

                        <td>1</td>
                        <td>122082</td>
                        <td>Anas</td>
                        <td>30/02/2020</td>
                        <td>
                            <button class="btn btn-success" role="button" data-toggle="modal" data-target="#editLembur">Edit</button>
                        </td>

                    </tr>
                    <tr style="text-align:center;">
                        <td>1</td>
                        <td>122082</td>
                        <td>Anas</td>
                        <td>30/02/2020</td>
                        <td>
                            <button class="btn btn-success" role="button" data-toggle="modal" data-target="#editLembur">Edit</button>
                        </td>

                    </tr>
                    <tr style="text-align:center;">
                        <td>1</td>
                        <td>122082</td>
                        <td>Anas</td>
                        <td>30/02/2020</td>
                        <td>
                            <button class="btn btn-success" role="button" data-toggle="modal" data-target="#editLembur">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- modals edit-->
<div class="modal fade" id="editLembur" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLabel" style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:20px;'>Edit Status Cuti</h5>
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
                        <label for="nama"> Nama :</label>
                        <input type="text" class="form-control" name="nama" id="nama" />
                    </div>         
                    <div class="form-group">
                        <label for="TanggalMulai">Tanggal Mulai :</label>
                        <input type="date" class="form-control" name="TanggalMulai" id="TanggalMulai"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="TanggalSelesai">Tanggal Selesai :</label>
                        <input type="date" class="form-control" name="TanggalSelesai" id="TanggalSelesai"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="AlasanCuti"> Alasan Cuti :</label>
                        <input type="text" class="form-control" name="AlasanCuti" id="AlasanCuti" />
                    </div>
                    <div class="form-group">
                       
                        <div class="form-group">
                            <label for="status">Status:</label> <br>
                            <select name="status" id="status" style='width:465px; height:30px;'>
                              <option value="approved">Approved</option>
                              <option value="not approved">Not Approved</option>
                            </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan"> Keterangan :</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" />
                    </div>
                </form>
            </div>
           

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" name="submitcuti" data-toggle="modal" data-target="#submitcuti">Submit</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
{{-- @extends('adminlte::page')


@section('title', 'Lihat Jatah Cuti')

@section('content')
    <div class="row">
        <div class="col">
                <h3 style="text-align:center;color:black;font-weight:bolder;">CUTI</h3>
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tanggal Input</th>
                            <th>Status</th>
                                                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>

                            <td>
                                <button class="btn btn-success" role="button" data-toggle="modal" data-target="#edit">Edit</button>
                            </td>
                            
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>

                            <td>
                                <button class="btn btn-success" role="button" data-toggle="modal" data-target="#edit">Edit</button>
                            </td>
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>
                            <td>
                                <button class="btn btn-success" role="button" data-toggle="modal" data-target="#edit">Edit</button>
                            </td>
                                                        
                        </tr>
                    </tbody>
                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Cuti</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama">NIP:</label>
                                                <input type="text" class="form-control" name="nama" />
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama:</label>
                                                <input type="text" class="form-control" name="nama" />
                                            </div>
            
                                            <div class="form-group">
                                                <label for="nama">Alasan Cuti:</label>
                                                <input type="text" class="form-control" name="nama" />
                                            </div>
                                            <div class="form-group">
                                                <label for="check-in">Tanggal Mulai:</label>
                                                <input type="date" class="form-control" name="tanggal" />
                                            </div>
                                            <div class="form-group">
                                                <label for="check-in">Tanggal Selesai:</label>
                                                <input type="date" class="form-control" name="tanggal" />
                                            </div>
                                            <div class="form-group">
                                                <label for="check-in">Status:</label>
                                                <input type="text" class="form-control" name="nama" />
                                            </div>
                                            <div class="form-group">
                                                <label for="check-in">Keterangan:</label>
                                                <input type="text" class="form-control" name="nama" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" style="background-color:#042331" data-toggle="modal" data-target="#konfirmasi">Submit</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    {{-- <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to edit this form?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> --}}
                                                    {{-- <div class="modal-body">
                                                       <center><h5> Are you sure you want to edit this form? </h5></center>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yes">Yes</button>
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="yes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                {{-- <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to edit this form?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div> --}}
                                                                {{-- <div class="modal-body">
                                                                   <center><h5> Your edit has been submitted </h5></center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a class="btn btn-secondary" href="/admin/approval_cuti" role="button">Close</a>
                                                                    
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}} 

