
<!DOCTYPE html>
<html>
<head>
@include('News.Admin.head')
</head>
<body>
@include('News.Admin.header')
<form action="{{url('User_details')}}" method="post">
	{{csrf_field()}}
<center>
	<legend>User_Details_Edit</legend>
 <table>
  <tr><td><input type="hidden" name="User_id" value="{{$data->id}}"></td><td>
 	<tr><td>Name;   </td><td><input type="name" name="name" value="{{$data->name}}"></td></tr>
<tr><td>Email_id:   </td><td><input type="name" name="email_id" Placeholder="Enter Email_id" value="{{$data->email_id}}"></td><td>
<tr><td>Role_name:   </td>
  <td><select name="role" value="<?php $role->Role_name?>"/>
	<option value="0"> please select option</option>
 <option value="Admin"   <?php if($role->Role_name=='Admin') echo 'selected="selected"'?>>Admin</option>
 <option value="Editor" <?php if($role->Role_name=='Editor') echo 'selected="selected"'?>>Editor</option>
 <option value="develepor"<?php if($role->Role_name=="develepor") echo 'selected="selected"'?>>develepor</option></td></tr>
	<tr><td><input type="hidden" name="User_id" value="{{$data->id}}"></td><td>
<tr><td><input type="submit" class="btn btn-accent" name="submit" value="submit"></td>
<td><input type="reset" class="btn btn-accent" name="Reset" value="Reset"></td></tr>
</table>	
</form>
</body>
</html>
