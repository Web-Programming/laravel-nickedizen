{{-- @include('layout.header', ['title' => 'Halaman Fakultas']) --}}

@extends('layout.master')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>
  {{--$ilkom--}} 
<ul>
    @if (count($fakultas) > 0)
        @foreach ($fakultas as $item)
            <li> {{$loop->iteration}}. {{$item}} </li>
        @endforeach
    @else 
        <l1>Belum ada data</li>
    @endif
</ul>

{{-- <x-alert :message="Ini Pesan Sukses"/> --}}
{{-- <x-form.input/> --}}
@endsection

{{-- @include('layout.footer') --}}