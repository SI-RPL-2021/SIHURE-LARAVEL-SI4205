@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<br>
    <h1 style='text-align:center; color:#6F7D87; font-family:Open Sans,Arial,sans-serif; font-size:50px; font-weight: 500;'>WELCOME TO SIHURE</h1>
    <br>
    <br>
    <img src="vendor/adminlte/dist/img/Logo SIHURE white.png" style='margin-left:auto; margin-right:auto; display:block; width:40%;'>
@stop

@section('content')
    {{-- <p>Welcome to SIHURE</p> --}}
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
