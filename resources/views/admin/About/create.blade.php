@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('store')}}" method="post">
    @csrf
   
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone_number">
  </div>

  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="mb-3">
    <label  class="form-label">Website</label>
    <input type="text" class="form-control" name="website" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" name="address" >
  </div>

  <button type="submit" class="btn btn-primary">Insert</button>
</form>
@endsection