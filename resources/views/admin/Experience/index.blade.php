@extends('admin.layout.adminlayout')
@section('content')
<a href="{{route('experienceCreate')}}" class="btn btn-success">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Job Start</th>
      <th scope="col">Job Finish</th>
      <th scope="col">Company Name</th>
      <th scope="col">Job Description</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($exp as $item )
      <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->job_start}}</td>
      <td>{{$item->job_finish}}</td>
      <td>{{$item->company_name}}</td>
      <td>{{$item->job_description}}</td>
      
      <td><a href="{{route('experienceEdit',$item->id)}}" class="btn btn-info">Update</a></td>
      <td>
        <form action="{{route('experienceDelete',$item->id)}}" method="get">
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