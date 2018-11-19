@extends("dashboard")
@section("content")
<div class="container">
<hr>
<hr>
<a href="{{url('emp-create')}}" class="btn btn-primary">create emp</a>
<hr>
 <table class="table table-bordered">
 <thead>
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
  <th>Action</th>
  </tr>
  @foreach($employees as $emp)
  <tr>
  <td>{{$emp->emp_name}}</td>
  <td>{{$emp->emp_email}}</td>
  <td>{{$emp->emp_pass}}</td>
  <td>
  <a href="{{url('emp-edit',$emp->id)}}" class="btn btn-success">edit</a>
  <a href="{{url('emp-delete',$emp->id)}}" class="btn btn-danger">delete</a>
  </td>
  </tr>
  @endforeach
 </thead>
 </table>
</div>
@endsection