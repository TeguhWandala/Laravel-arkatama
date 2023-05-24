@extends('layouts.main')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Aksi</th>
                    <th>Avatar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tr>
                <td><?php echo '1'?></td>
                <td>
                    <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="{{route('edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="post" style="display: inline;">
        
                    </form>
                </td>
                <td><img src="avatar.jpg" alt="Avatar" width="50"></td>
                <td><?php echo 'Teguh Wandala'?></td>
                <td><?php echo 'teguhwandala@gmail.com'?></td>
                <td><?php echo '087765904262'?></td>
            </tr>

            <tr>
                <td><?php echo '2'?></td>
                <td>
                    <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="{{route('edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="post" style="display: inline;">
                    </form>
                </td>
                <td><img src="avatar.jpg" alt="Avatar" width="50"></td>
                <td><?php echo 'El Gatito'?></td>
                <td><?php echo 'gatitomachontos@gmail.com'?></td>
                <td><?php echo '0855467324155'?></td>
            </tr>
        </tr>
@endsection