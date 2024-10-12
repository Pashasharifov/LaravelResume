@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('skillsStore')}}" method="post">
    @csrf
   
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-3">
    <label  class="form-label">Skills percent</label>
    <input type="number" class="form-control" name="skills_percent">
  </div>

 

 

  <button type="submit" class="btn btn-primary">Insert</button>
</form>
@endsection