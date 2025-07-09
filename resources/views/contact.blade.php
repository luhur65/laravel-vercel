@extends('layouts.app')

@section('content')

{{-- start content --}}
@if (session('success'))
<div class="alert alert-success">
    <strong>{{ session('success') }}</strong>
</div>
@endif

<form action="{{ route('kirimdoa') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email anda</label>
    <input type="text" class="form-control" id="email" placeholder="JohnDoe@gmail.com" name="email">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama anda</label>
    <input type="text" class="form-control" id="nama" placeholder="John Doe" name="nama">
  </div>
  <div class="mb-3">
    <label for="doa" class="form-label">Topik Doa</label>
    <textarea class="form-control" id="doa" rows="3" name="doa"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">
    Kirim Doa
  </button>
</form>
    
@endsection