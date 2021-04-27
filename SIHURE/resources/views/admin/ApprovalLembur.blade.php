@extends('adminlte::page')


@section('title', 'Lihat Jatah Cuti')

@section('content')
    <div class="row">
        <div class="col">
                <h3 style="text-align:center;color:black;font-weight:bolder;">LEMBUR</h3>
            
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
                            <td>Dhane</td>
                            <td>30/02/2020</td>

                            <td>
                                <button class="btn btn-success" role="button" data-toggle="modal" data-target="#edit">Edit</button>
                            </td>
                            
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Dhane</td>
                            <td>30/02/2020</td>

                            <td>
                                <button class="btn btn-success" role="button" data-toggle="modal" data-target="#edit">Edit</button>
                            </td>
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Dhane</td>
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
                            <h5 class="modal-title" id="exampleModalLabel">Edit Lembur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="nama">NIP:</label>
                                    <input type="text" class="form-control" name="nama" />
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" />
                                </div>

                                <div class="form-group">
                                    <label for="nama">Alasan Lembur:</label>
                                    <input type="text" class="form-control" name="nama" />
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
                                    <div class="modal-body">
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
                                                <div class="modal-body">
                                                   <center><h5> Your edit has been submitted </h5></center>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-secondary" href="/admin/approval_lembur" role="button">Close</a>
                                                    
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
@stop
