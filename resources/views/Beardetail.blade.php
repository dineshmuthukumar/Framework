<form action="{{url('Bear')}}" method="post">
{{csrf_field()}}
<center>
 <table>
 <center> 
	           <table>
              <h1>Enter Your Bear Details</h1>
 <tr> <td>Name</td> <td><input type='text' name="name" placeholder="Enter the First_name....."  /></td></tr>
 <tr> <td> type: </td> <td> <textarea rows="4" cols="50" name="type" ></textarea></td> </tr>
    <tr><td> danger_level:</td><td><input type="number" name="danger_level"  placeholder="Enter danger_level..."> </td></tr>
	<tr><td>  <input type="submit" name="submit" value="submit"> </td>
    <td> <input type="reset" name="reset" value="reset"> </td></tr> 
          </form>
		</table>
	</center>	
		</fieldset>
		 </body>