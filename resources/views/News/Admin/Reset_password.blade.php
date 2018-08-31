
<!DOCTYPE html>
<html>
<head>
	@include('News.Admin.head')
</head>
<body>
@include('News.Admin.header')
<form action="{{url('Reset_password_new')}}" method="post">
	{{csrf_field()}}
<center>
	<legend>Reset_password</legend>
 <table>
 	<tr><td><input type="hidden" name="token" value="{{Session::get('token')}}"></td></tr>
<tr><td>Current_Password:   </td><td><input type="password" name="Current_Password" placeholder="Enter the Current_Password"></td></tr>
<tr><td>New_password:   </td><td><input type="password" name="New_password" Placeholder="Enter the New Password"></td><td>
<tr><td>Confirm_Password:   </td><td><input type="password" name="Confirm_Password" Placeholder="Enter the Confirm Password"></td><td>
<tr><td><input type="submit" class="btn btn-accent" name="submit" value="submit"></td>
<td><input type="reset" class="btn btn-accent" name="Reset" value="Reset"></td></tr>
</table>	
</form>
</body>
</html>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

  <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

</div>

@endif