<form action="{{url('student')}}" method="post">
{{csrf_field()}}
<fieldset>
    <table>
	       <center> 
              <h1>Enter Student Details</h1>
              <tr><td><input type="hidden" name="Student_id" placeholder="Enter the students name...." value="{{$table->id}}"></td></tr>
      <tr><td>Student_name;</td><td><input type="text" name="Student_rename" placeholder="Enter the students name...." value="{{$table->Student_name}}"></td></tr>
      <tr><td>Email_id;</td><td><input type="text" name="Email_id_rename" placeholder="Enter the Email_id..." value="{{$table->Email_id}}"></td></tr>
      <tr><td>City;</td><td><input type="text" name="City_rename" placeholder="Enter the City..." value="{{$table->City}}"></td></tr>
      <tr><td>State:</td><td><input type="text" name="State_rename" placeholder="Enter the State..."value="{{$table->State}}" ></td></tr>
      <tr><td><input type="submit" name="submit" value="submit"></td></tr>
      </center>
  </table>
</fieldset>