<center>
	<h2>Student_Details</h2>
<table border='5' width="100" height="100">
<th>ID</th>
<th>Student_Name</th>
<th>Email_id</th>
<th>City</th>
<th>State</th>
<th>Edit</th>
<th>Detele</th>
@foreach ($data as  $stu)
<tr>
 	<td>{{$stu->id}}</td>
    <td><a href='{{ url("/mark/$stu->id") }}'>{{$stu->Student_name}}</td>
 	<td>{{$stu->Email_id}}</td>
    <td>{{$stu->City}}</td>
    <td>{{$stu->State}}</td> 
    <td><a href='{{ url("/update/$stu->id") }}'>Edit</a></td>
    <td><a href='{{   url("/delete/$stu->id") }}'>delete</a></td>
</tr>
@endforeach
</table>
<table>
<tr><td><a href='{{   url("/Student") }}'style="position:absolute; top:310px; left:518px;" >Student_Add</a></td><br>
<td><a href='{{   url("/Ranklist") }}'style="position:absolute; top:310px; left:818px;">Score_Card</a></td></tr>
</table>
</center>