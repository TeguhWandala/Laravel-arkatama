@extends('layouts.main')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tr>
                <td><?php echo 'Teguh Wandala'?></td>
                <td><?php echo 'teguhwandala@gmail.com'?></td>
                <td><?php echo 'Admin'?></td>
            </tr>

            <tr>
                <td><?php echo 'El Gatito'?></td>
                <td><?php echo 'gatitomachontos@gmail.com'?></td>
                <td><?php echo 'Staff'?></td>
            </tr>
        </tr>
@endsection