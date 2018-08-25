<center>
 <h2>Student_Rank_details</h2>
<table border="2">
	<th>Student_id</th>
	<th>Student_name</th>
	<th>Email_id</th>
	<th>Total</th>
	<th>Rank</th>
<?php $i = 1; ?>
@foreach ($order as  $data)
<tr>
	<td>{{$data->student_id}}</td>
	<td>{{$data->Student_name}}</td>
	<td>{{$data->Email_id}}</td>

<td>{{$data->Total}}</td>
<td><?php if($data->Total!=0)
{
	echo $i++;
}
?></td>
</tr>

@endforeach
</table>
    <p><a href='{{ url("/List") }}'>Student_List</p>

</center>