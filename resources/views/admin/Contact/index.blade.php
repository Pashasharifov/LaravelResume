@extends('admin.layout.adminlayout')
@section('content')
<a href="{{route('contactCreate')}}" class="btn btn-success">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Social name</th>
      <th scope="col">Social url</th>
     
      
    </tr>
  </thead>
  <tbody>
    @foreach ($contact as $item )
      <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->social_name}}</td>
      <td>{{$item->social_url}}</td>
    
      
      <td><a href="{{route('contactEdit',$item->id)}}" class="btn btn-info">Update</a></td>
      <td>
        <form action="{{route('contactDelete',$item->id)}}" method="get">
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