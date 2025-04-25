@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
                <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil" class="img-thumbnail rounded-circle" width="150">
            </div>
            <!-- ==================5================== -->
            <!-- Buat file tampilan yang akan menampilkan data mahasiswa dalam bentuk tabel. -->
            <!-- Gunakan tag <tr>, <th> dan <td> untuk baris dan kolom. -->
            <thead>
                <tr>
                    <th scope="col">nama</th>
                    <th scope=" col">NIM</th>
                    <th scope="col">email</th>
                    <th scope="col">jurusan</th>
                    <th scope=" col">fakulas</th>
                    
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>{{ $mahasiswa["nama"] }}</td>
                        <td>{{ $mahasiswa["NIM"] }}</td>
                        <td>{{ $mahasiswa["email"] }}</td>
                        <td>{{ $mahasiswa["jurusan"] }}</td>
                        <td>{{ $mahasiswa["fakultas"] }}</td>
        </table>
    </div>
</div>
@endsection
