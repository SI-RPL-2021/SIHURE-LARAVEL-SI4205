@extends('adminlte::page')


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
                            <th>Jumlah Jatah Cuti</th>
                            <th>Status</th>
                                                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>
                            <td>2</td>
                            <td>
                                <a class="btn btn-success" href="#" role="button">Edit</a>
                            </td>
                            
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>
                            <td>2</td>
                            <td>
                                <a class="btn btn-success" href="#" role="button">Edit</a>
                            </td>
                                                    
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>122082</td>
                            <td>Anas</td>
                            <td>30/02/2020</td>
                            <td>2</td>
                            <td>
                                <a class="btn btn-success" href="#" role="button">Edit</a>
                            </td>
                                                        
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
