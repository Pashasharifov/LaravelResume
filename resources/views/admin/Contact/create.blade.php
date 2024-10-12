@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('contactStore')}}" method="post">
    @csrf
   
  <div class="mb-3">
    <label  class="form-label">Social name</label>
    <input type="text" class="form-control" name="social_name">
  </div>

  <div class="mb-3">
    <label  class="form-label">Social url</label>
    <input type="text" class="form-control" name="social_url">
  </div>

 

 

  <button type="submit" class="btn btn-primary">Insert</button>
</form>
@endsection