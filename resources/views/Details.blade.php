<form action="{{url('markupdate')}}" method="post">
{{csrf_field()}}
<fieldset>
    <table>
	       <center> 
              <h1>Enter Student Mark Details</h1>
               <tr><td><input type="hidden" name="id" value='{{$results->id}}'></td></tr>
           <tr><td><input type="hidden" name="Student_id" value='{{$results->student_id}}'></td></tr>
           <tr><td>Tamil_Mark</td><td><input type="number" name="Tamil_Mark_update" placeholder="Enter the Tamil Mark"value="{{$results->Tamil}}"></td></tr>
           <tr><td>English_Mark</td><td><input type="number" name="English_Mark_update"placeholder="Enter the English Mark..." value="{{$results->English}}" ></td></tr>
           <tr><td>Maths</td><td><input type="number" name="Maths_mark_update"placeholder="Enter the Maths Mark...." value="{{$results->Maths}}"></td></tr>
<tr><td>SocialScience</td><td><input type="number" name="SocialScience_Mark_update" placeholder="Enter the Socialcience Mark" value="{{$results->Socialscience}}"></td><tr>
           <tr><td><input type="Submit" name="Submit" value="Submit"></td></tr>
       </center>
   </table>
</fieldset>



