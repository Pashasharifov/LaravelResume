@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('educationUpdate', $education->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Starting education</label>
    <input type="date" class="form-control" name="start_edu" value="{{$education->start_edu}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Job finish</label>
    <input type="date" class="form-control" name="end_edu"  value="{{$education->end_edu}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Company name</label>
    <input type="text" class="form-control" name="school_name" value="{{$education->school_name}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Job description</label>
    <input type="text" class="form-control" name="school_description" value="{{$education->school_description}}" >
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection