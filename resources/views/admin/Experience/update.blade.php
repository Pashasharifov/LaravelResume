@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('experienceUpdate', $experience->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Job start</label>
    <input type="date" class="form-control" name="job_start" value="{{$experience->job_start}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Job finish</label>
    <input type="date" class="form-control" name="job_finish"  value="{{$experience->job_finish}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Company name</label>
    <input type="text" class="form-control" name="company_name" value="{{$experience->company_name}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Job description</label>
    <input type="text" class="form-control" name="job_description" value="{{$experience->job_description}}" >
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection