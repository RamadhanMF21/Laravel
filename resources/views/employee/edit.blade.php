ini halaman edit <br />
@foreach ($employee as $employeelist)
<form class="" action="{{route('Employee.update',$employeelist->employee_id)}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}
  <input type="text" name="txt_id" value="{{$employeelist->employee_id}}">
  <br>
  <input type="text" name="txt_name" value="{{$employeelist->employee_name}}">
  <br>
  <input type="text" name="txt_address" value="{{$employeelist->employee_address}}">
  <br>
  <input type="text" name="txt_phone_number" value="{{$employeelist->employee_phone_number}}">
@endforeach
<br>
<button type="submit">Submit</button>
</form>

<a href="{{url('Employee')}}">Batal</a>
