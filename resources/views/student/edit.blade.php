@extends('layout/main')

@yield('title')


@section('container')
<div class="container">
  <h3> {{$title}} </h3>
  <div class="row">
    <div class="col-7">
      <form method="POST" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama"
            placeholder="Enter nama" name="nama" value="{{ $student->nama }} ">
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Nim"
            name="nim" value="{{ $student->nim }}">
          @error('nim')
          <div class=" invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            placeholder="Enter email" name="email" value="{{ $student->email }}">
          @error('email')
          <div class=" invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jurusan">jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
            placeholder="jurusan" name="jurusan" value="{{ $student->jurusan }}">
          @error('jurusan')
          <div class=" invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection