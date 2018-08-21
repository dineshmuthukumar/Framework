<form action="{{url('Formnew')}}" method="post">
{{csrf_field()}}
 <center> 
	           <table>
              <h1>Enter Your Update Details</h1>
 <tr> <td>FirstName</td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....." value="{{$Firstname}}" /></td></tr>
 <tr> <td>LastName</td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...." value="{{$Lastname}}" /> </td></tr>
<tr><td> Gender: <?php echo $gender; ?></td><td> <input type="radio" name="gender" value="male" <?php if($gender =="male") { echo "checked"; }?>  male
<input type="radio"  name="gender" value="female" <?php if($gender == "female") { echo "checked"; }?> > female </td> </tr>
<tr><td> Born Dater: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996" value="<?php  echo strftime('%Y-%m-%d',strtotime($borndate)); ?>" /> </td></tr>
 <tr> <td> Address: </td> <td> <textarea rows="4" cols="50" name="Address" ><?php echo $Address; ?></textarea></td> </tr>
 <tr> <td>City: </td><td> <select name="City" value="<?php echo $city?>"/>
 <option value="0"> please select option</option>
 <option value="chennai" <?php if($city=="chennai") echo 'selected="selected"'?>>Chennai</option>
 <option value="madurai" <?php if($city=="madurai") echo 'selected="selected"'?>>Madurai</option>
 <option value="Trichy"<?php if($city=="Trichy") echo 'selected="selected"'?>>Trichy</option>
 <option value="Virudhunagar" <?php if($city=="Virudhunagar") echo 'selected="selected"'?>>Virudhunagar</option>  </select> </td></tr>
 <tr> <td>State: </td><td>
 <input type="checkbox" name="State[]"  <?php if($State=="Tamil_nadu")  echo 'checked="checked"'; ?>value="Tamil_nadu">Tamil_nadu<br>
 <input type="checkbox" name="State[]" <?php if($State=="kerala")  echo 'checked="checked"'; ?> value="kerala"> kerala<br>
 <input type="checkbox" name="State[]" <?php if($State="karnataka")  echo 'checked="checked"'; ?> value="karnataka" > karnataka<br>
<tr><td>country : </td><td><input type="text"     name="country" value="<?php echo $country ?>"/> </td> </tr>
	<tr><td> zip_code: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..." value="<?php echo $zipcode ?>" > </td></tr>
	<tr><td> Email_id:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." value="<?php echo $Emailid ?>"> </td></tr>
    <tr><td> Mobile_number:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..." value="<?php echo $mobileno ?>"> </td></tr>
	<tr><td>  <input type="submit" name="submit" value="Update"> </td>
    <td> <input type="reset" name="reset" value="reset"> </td></tr> 
          </form>
		</table>
	</center>	
		</fieldset>
