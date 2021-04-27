@extends('adminlte::page')


@section('title', 'Dashboard Admin')

@section('content')
    <h3 style="text-align:center;color:black;font-weight:bolder;">LEMBUR</h3>
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 700px; height: 500px;">
                        {{-- <div class="card bg-light text-dark"></div> --}}
                        <div class="card-body">
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
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yes" data-dismiss="modal">Yes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

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
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
