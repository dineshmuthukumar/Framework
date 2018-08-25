<form action="{{url('markinsert')}}" method="post">
{{csrf_field()}}
<fieldset>
	<center> 
      <table>
	       
              <h1>Enter Student Mark Details</h1>
           <tr><td><input type="hidden" name="Student_id" value='{{$id}}'></td></tr>
           <tr><td>Tamil_Mark</td><td><input type="number" name="Tamil_Mark" placeholder="Enter the Tamil Mark"></td></tr>
           <tr><td>English_Mark</td><td><input type="number" name="English_Mark"placeholder="Enter the English Mark..."></td></tr>
           <tr><td>Maths</td><td><input type="number" name="Maths_mark"placeholder="Enter the Maths Mark...."></td></tr>
           <tr><td>SocialScience</td><td><input type="number" name="SocialScience_Mark" placeholder="Enter the SocialScience Mark"></td></tr>
           <tr><td><input type="Submit" name="Submit" value="Submit"></td></tr>
       
       </table>
   </center>
</fieldset>
<p><a href='{{ url("/List") }}'>Cancel</a></p>



