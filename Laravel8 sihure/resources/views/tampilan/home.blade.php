@extends('tampilan.test')


@section('title', 'home')

@section('content')

    <br>

    <div class="d-flex justify-content-center" style="margin-top:0px">

            <div class="card" style="background-color: ;">

                <div class="card-body" style="width: 500px;">

                    <h3 style="text-align:center; margin-top: 10px; font-weight:stronger; font-size:40px; color:#525A63;">WELCOME</h3>

            <!--TANGGAL WELCOME-->

            <h6 style="text-align:center; color:#525A63;"><span id="tanggal"></span></h6>
            <h6 style="text-align:center; color:#525A63;"><span id="waktu"></span></h6>
            <script>
            var tw = new Date();
            if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
            else (a=tw.getTime());
            tw.setTime(a);
            var tahun= tw.getFullYear ();
            var hari= tw.getDay ();
            var bulan= tw.getMonth ();
            var tanggal= tw.getDate ();
            var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
            var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
            document.getElementById("tanggal").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

            var dt = new Date();
            document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
            </script>
                    <hr style="width: 50%;">
                    <div class="form-group" style="width: 500px; margin-left: 35px;">
                        <img src="{{ 'foto/logosihure.jpg' }}" alt="">
                    </div>
                    <br><br>

                </div>
            </div>

    </div>



@endsection
