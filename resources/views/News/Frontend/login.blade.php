<!DOCTYPE html>
<html>
<head>
	@include('Frontend.header');
</head>
<body>
<form action="{{url('Formnew')}}" method="post">
{{csrf_field()}}
<center>
 <table>
<tr><td>Name: </td><td><input type="text" name="name" placeholder="Enter the name...." value></td></tr>
<tr><td>Email_id </td><td><input type="text" name="Email_id" placeholder="Enter the Email_id"></td></tr>
<tr><td>Password</td><td><input type="password" name="Password" Placeholder="Vaild Password"></td><td>
<tr><td>Confirm_Password</td><td><input type="password" name="Confirm_Password" Placeholder="Vaild Password"></td><td>
<tr><td><input type="submit" name="submit" value="submit"></td><tr>
</table>
</center>
</form>

</body>
</html>