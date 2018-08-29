
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
<!DOCTYPE html>
<html>
<head>
@include('News.Frontend.header')
</head>
<body>
	<fieldset>
<form action="{{url('User_register')}}" method="post">
{{csrf_field()}}
<center>
	
	<legend>Register</legend>
 <table>
<tr><td>Name:      </td><td><input type="text" name="name" placeholder="Enter the name...." ></td></tr>
<tr><td>Email_id:   </td><td><input type="text" name="Email_id" placeholder="Enter the Email_id"></td></tr>
<tr><td>Password:   </td><td><input type="password" name="Password" Placeholder="Vaild Password"></td><td>
<tr><td>Confirm_Password:  </td><td><input type="password" name="Confirm_Password" Placeholder="Vaild Password"></td><td>
<tr><td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="Reset" value="Reset"></td></tr>
</table>
</center>
</form>
</fieldset>
</body>
   @include('News.Frontend.footer')
</html>