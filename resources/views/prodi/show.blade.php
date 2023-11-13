@extends('layout.master')
@section('title', 'Halaman Profil Prodi')

@section('content')
<div class="row pt-4">
    <div class="col">
        <table class="table table-striped">
            <tr>
                <td>Kode Prodi</td>
                <td>{{ $prodi->id }}</td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
