@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('skillsUpdate', $skills->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$skills->name}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Skills percent</label>
    <input type="number" class="form-control" name="skills_percent"  value="{{$skills->skills_percent}}">
  </div>

  

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection