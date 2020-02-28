@extends('layout/main')

@yield('title')
@section('container')
<div class="container">
  <h3>Daftar Students </h3>

  <a href="/students/create" class="btn btn-primary my-3">Tambah Student</a>


  <div class="row">
    <div class="col-7">
      {{-- FLASH DATA --}}
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <ul class="list-group">
        @foreach ($students as $data)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$data->nama}}
          <a href="/students/{{$data->id}}" class="badge badge-success p-2">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection