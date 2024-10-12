@extends('admin.layout.adminlayout')
@section('content')
<a href="{{route('create')}}" class="btn btn-success">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($about as $item )
      <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phone_number}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->website}}</td>
      <td>{{$item->address}}</td>
      <td><a href="{{route('edit',$item->id)}}" class="btn btn-info">Update</a></td>
      <td>
        <form action="{{route('delete',$item->id)}}" method="get">
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