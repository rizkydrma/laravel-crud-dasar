@extends('layout/main')

@section('title')
{{$title}}
@endsection

@section('container')
<div class="container">
  <h3>Daftar Mahasiswa </h3>

  <table class="table mt-3 text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nrp</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswa as $data)
      <tr>
        <th scope="row"> {{ $loop->iteration }} </th>
        <td> {{ $data->nama }} </td>
        <td> {{ $data->nim }} </td>
        <td> {{ $data->email }} </td>
        <td> {{ $data->jurusan }} </td>
        <td>
          <a href="#" class="badge badge-success p-2">Edit</a>
          <a href="#" class="badge badge-danger p-2">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
@endsection