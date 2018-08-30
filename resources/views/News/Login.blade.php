
@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

  <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

</div>

@endif
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<!DOCTYPE html>
<html>
<head>
@include('News.Frontend.header')
</head>
<body>
	<fieldset>
<form action="{{url('User_Login')}}" method="post">
{{csrf_field()}}
<center>
	
	<legend>Login</legend>
 <table>
<tr><td>Email_id:   </td><td><input type="text" name="Emailid" placeholder="Enter the Email_id"></td></tr>
<tr><td>Password:   </td><td><input type="password" name="password" Placeholder="Enter the Current Password"></td><td>
<tr><td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="Reset" value="Reset"></td></tr>
<tr><td><a href="{{url('Forget_Password')}}" >Forget Password</a></td>
</table>
</center>
</form>
</fieldset>
</body>
@include('News.Frontend.footer')
</html>