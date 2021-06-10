@extends('tampilan.test')


@section('title', 'hr')

@section('content')
<h1 style='text-align:center; color:#525A63; font-family:Open Sans,Arial,sans-serif; font-size:36px; font-weight: 500;'>
    <strong>MASTER DATA GAJI</strong>
</h1>
<br>
<br>

<div class="container" style="background-color: white; border-radius:25px; box-shadow: -4px 5px 10px #84868A;">
    <br>
    <form style="padding-bottom: 80px; padding-left:40px; padding-right:40px;">
        <!-- TUNJANGAN -->
        <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
            <strong>TUNJANGAN</strong>
        </p>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label" style="color:#525A63;">Tunjangan Anak/anak</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="nama">
            </div>
        </div>
        <!-- INSENTIF-->
        <p style='text-align:left; font-family:Open Sans,Arial,sans-serif; font-size:16px;'>
            <strong>INSENTIF</strong>
        </p>

        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label" style="color:#525A63;">Lembur/jam</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="inputEmail">
            </div>
        </div>
        <td style="text-align:center;"><a href="/hr/EditmasterdataGaji" button type="button" class="btn btn-primary" style="border-radius: 22px; height: 40px; width: 116px; box-shadow: -2px 3px 5px #84868A; float:right;"><strong>
                    Edit
                </strong></a></td>
    </form>
</div>
@endsection