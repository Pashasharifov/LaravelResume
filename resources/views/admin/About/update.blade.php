@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('update', $about->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$about->name}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone_number" value="{{$about->phone_number}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{$about->email}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Website</label>
    <input type="text" class="form-control" name="website" value="{{$about->website}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{$about->address}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection