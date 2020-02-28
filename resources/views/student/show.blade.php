@extends('layout/main')

@section('title')
{{$title}}
@endsection

@section('container')
<div class="container">
  <h3> {{$title}} </h3>

  <div class="row">
    <div class="col-7">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> {{$student->nama}} </h5>
          <h6 class="card-subtitle mb-2 text-muted"> {{$student->nim}} </h6>
          <p class="card-text"> {{$student->email}} </p>
          <p class="card-text"> {{$student->jurusan}} </p>

          <div class="row justify-content-between">
            <div class="col">
              <a href="{{$student->id}}/edit" class="btn btn-success mr-3">Edit</a>
              <form action="{{$student->id}} " method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
            <div class="col text-right">
              <a href="/students" class="card-link">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection