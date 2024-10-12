@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('contactUpdate', $contact->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Social name</label>
    <input type="text" class="form-control" name="social_name" value="{{$contact->social_name}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Social url</label>
    <input type="text" class="form-control" name="social_url"  value="{{$contact->social_url}}">
  </div>

  

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection