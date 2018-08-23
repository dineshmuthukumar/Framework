@foreach ($data as $key => $value)
 <tr>
    <li> {{ $data }};</li>
@endforeach

{{$table=DB::table('student')->where('id', '=', 1)->get();
$table;}}