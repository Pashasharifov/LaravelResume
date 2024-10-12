@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('experienceStore')}}" method="post">
    @csrf
   
  <div class="mb-3">
    <label  class="form-label">Job start</label>
    <input type="date" class="form-control" name="job_start">
  </div>

  <div class="mb-3">
    <label  class="form-label">Job finish</label>
    <input type="date" class="form-control" name="job_finish">
  </div>

  <div class="mb-3">
    <label  class="form-label">Company name</label>
    <input type="text" class="form-control" name="company_name">
  </div>

  <div class="mb-3">
    <label  class="form-label">Job description</label>
    <input type="text" class="form-control" name="job_description" >
  </div>

 

  <button type="submit" class="btn btn-primary">Insert</button>
</form>
@endsection