<!DOCTYPE html>
<html>
<head>
@include('News.Frontend.header')
</head>
<body>
	<fieldset>
<form action="{{url('new_password')}}" method="post">
{{csrf_field()}}
<center>
	
	<legend>Forget Password</legend>
 <table>
<tr><td>Email_id</td><td><input type="text" name="Forget_Emailid" placeholder="Please enter the Email_id"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="Reset" value="Reset"></td></tr>
</table>
</center>
</form>
</fieldset>
</body>
   @include('News.Frontend.footer')
</html>