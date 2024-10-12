@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('educationStore')}}" method="post">
    @csrf
   
  <div class="mb-3">
    <label  class="form-label">Starting education</label>
    <input type="date" class="form-control" name="start_edu">
  </div>

  <div class="mb-3">
    <label  class="form-label">Ending education</label>
    <input type="date" class="form-control" name="end_edu">
  </div>

  <div class="mb-3">
    <label  class="form-label">School name</label>
    <input type="text" class="form-control" name="school_name">
  </div>

  <div class="mb-3">
    <label  class="form-label">School description</label>
    <input type="text" class="form-control" name="school_description" >
  </div>

 

  <button type="submit" class="btn btn-primary">Insert</button>
</form>
@endsection