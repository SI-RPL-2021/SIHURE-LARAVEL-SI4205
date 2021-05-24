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
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "Nopember", "Desember");
        document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
            tahun;

        var dt = new Date();
        document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();

    </script>
    <br>

    <h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:40px; font-weight: 500;'>
        JATAH CUTI</h1>
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
                        <?php $no = 1; ?>
                            @foreach ($data_all[0] as $data)

                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->divisi }}</td>
                                    <td>{{ $data->jumlahcuti }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#delete{{ $data->id }}">
                                            Tambah Cuti
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </div>

    <!-- Modal -->
    @foreach ($data_all[0] as $data)
    <div class="modal fade" id="delete{{ $data->id }}">
        <div class="modal-dialog">
            <div class="modal-content bg-default ">
                <form action="/hr/jatahcuti/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- {{ csrf_field() }} -->

                    <div class="modal-header">
                        <h4 class="modal-title">Tambah jatah cuti</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group " style="width: 400px">
                            <input type="hidden" name="iduser" value="{{ $data->id }}">
                            <input type="hidden" name="status" value="3">
                            <input type="hidden" name="keterangan" value="penambahan jatah cuti">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input type="text" class="form-control" name="nama" readonly="true"
                                value="{{ $data->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jatah Cuti</label>
                            <input type="text" class="form-control" name="jatah" required >
                        </div>
                        {{-- <div class="form-group">
                            <label for="nama">Keterangan </label>
                            <input type="text" class="form-control" name="keterangan" required>
                        </div> --}}

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn  btn-outline-primary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn  btn-primary">tambah jatah cuti</button>
                    </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach

@endsection
