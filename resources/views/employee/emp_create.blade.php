
@extends("dashboard")
@section('content')
<div class="container col-md-offset-2 col-md-6" >
<hr>
<br>
<br>
<br>
    <form action="{{url('emp-save')}}" method="post">
    @csrf
        <div class="form-group">
            Emp name 
            <input type="text" name="emp_name" id="" class='form-control'>
        </div>
        <div class="form-group">
            email 
            <input type="text" name="emp_email" id="" class='form-control'>
        </div>
        
        <div class="form-group">
            Password
            <input type="password" name="emp_pass" id="" class='form-control'>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit_name" id="" value="Save" class='form-control btn-primary'>
        </div>
    </form>
</div>
@endsection
