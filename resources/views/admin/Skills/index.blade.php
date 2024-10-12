@extends('admin.layout.adminlayout')
@section('content')
<a href="{{route('skillsCreate')}}" class="btn btn-success">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Skills percent</th>
     
      
    </tr>
  </thead>
  <tbody>
    @foreach ($skills as $item )
      <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->skills_percent}}</td>
    
      
      <td><a href="{{route('skillsEdit',$item->id)}}" class="btn btn-info">Update</a></td>
      <td>
        <form action="{{route('skillsDelete',$item->id)}}" method="get">
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