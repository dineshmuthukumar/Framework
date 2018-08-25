
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
<form action="{{url('studentForm')}}" method="post">
{{csrf_field()}}
<fieldset>
    <table>
	       <center> 
              <h1>Enter Student Details</h1>
      <tr><td>Student_name;</td><td><input type="text" name="Student_name" placeholder="Enter the students name...."></td></tr>
      <tr><td>Email_id;</td><td><input type="text" name="Email_id" placeholder="Enter the Email_id..."></td></tr>
      <tr><td>City;</td><td><input type="text" name="City" placeholder="Enter the City..."></td></tr>
      <tr><td>State:</td><td><input type="text" name="State" placeholder="Enter the State..."></td></tr>
      <tr><td><input type="submit" name="submit" value="submit"></td></tr>
      </center>
  </table>

</fieldset>
<p><a href='{{ url("/List") }}'>Cancel</a></p>