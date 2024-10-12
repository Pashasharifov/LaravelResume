@extends('admin.layout.adminlayout')
@section('content')
<a href="{{route('educationCreate')}}" class="btn btn-success">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Starting education</th>
      <th scope="col">Ending education</th>
      <th scope="col">School Name</th>
      <th scope="col">School Description</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($education as $item )
      <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->start_edu}}</td>
      <td>{{$item->end_edu}}</td>
      <td>{{$item->school_name}}</td>
      <td>{{$item->school_description}}</td>
      
      <td><a href="{{route('educationEdit',$item->id)}}" class="btn btn-info">Update</a></td>
      <td>
        <form action="{{route('educationDelete',$item->id)}}" method="get">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>
@endsection