
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
<html>
<head>
@include('News.Frontend.header')
</head>
<body>
	<fieldset>
<form action="{{url('Reset_Forget_password')}}" method="post">
{{csrf_field()}}
<center>
	
	<legend>New Password</legend>
 <table>
<tr><td><input type="hidden" name="token" value="{{$resetpassword_token}}"></td></tr>
<tr><td>New_password</td><td><input type="Password" name="New_password" placeholder="Please enter the new_password"></td></tr>
<tr><td>Confirm_password</td><td><input type="Password" name="New_Confirm_password" placeholder="Please enter the new_password"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="Reset" value="Reset"></td></tr>
</table>
</center>
</form>
</fieldset>
</body>
   @include('News.Frontend.footer')
</html>