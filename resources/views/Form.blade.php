<form action="{{url('Formnew')}}" method="post">
{{csrf_field()}}
<center>
 <table>
 <center> 
	           <table>
              <h1>Enter Your  Details</h1>
 <tr> <td>FirstName</td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....."  /></td></tr>
 <tr> <td>LastName</td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...." /> </td></tr>
<tr><td> Gender: </td><td> <input type="radio" name="gender" value="male" > male
<input type="radio"  name="gender" value="female"  > female </td> </tr>
<tr><td> Born Dater: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996"  /> </td></tr>
 <tr> <td> Address: </td> <td> <textarea rows="4" cols="50" name="Address" ></textarea></td> </tr>
 <tr> <td>City: </td><td> <select name="City" />
 <option value="0"> please select option</option>
 <option value="chennai" >Chennai</option>
 <option value="madurai" >Madurai</option>
 <option value="Trichy">Trichy</option>
 <option value="Virudhunagar" >Virudhunagar</option>  </select> </td></tr>
 <tr> <td>State: </td><td>
 <input type="checkbox" name="State"     value="Tamil_nadu"   >Tamil_nadu<br>
 <input type="checkbox" name="State"     value="kerala"> kerala<br>
 <input type="checkbox" name="State"     value="karnataka" > karnataka<br>
<tr><td>country : </td><td><input type="text"     name="country" /> </td> </tr>
	<tr><td> zip_code: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..."  > </td></tr>
	<tr><td> Email_id:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." > </td></tr>
    <tr><td> Mobile_number:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..."> </td></tr>
	<tr><td>  <input type="submit" name="submit" value="submit"> </td>
    <td> <input type="reset" name="reset" value="reset"> </td></tr> 
          </form>
		</table>
	</center>	
		</fieldset>
		 </body>
