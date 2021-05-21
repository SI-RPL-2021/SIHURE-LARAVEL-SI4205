@extends('adminlte::page')


@section('title', 'Lihat Absen')

@section('content')
    {{-- <p>Welcome to SIHURE</p> --}}
    <div class="row">

        <div class="row">
            <div class="col">
                <div style="margin-top:50px; margin-right:300px;width: 950px; height: 400px;">
                    <h3 style="text-align:center;color:black;font-weight:bolder;">ABSENSI</h3>
                    {{-- <?= $idd ?>
                    <?= $userid ?> --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Rizalrasyd Dwiselia Ridwanah</td>
                            <td>1202183322</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        {{-- <?php $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["id"]; ?></td>
                                <td>
                                    <?php while ($row1 = mysqli_fetch_assoc($result2)) : ?>

                                        <?= $row1["todo"]; ?>

                                    <?php endwhile; ?>
                                </td>
                            </tr>

                            <?php $no++; ?>

                        <?php endwhile; ?> --}}


                    </table>

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
