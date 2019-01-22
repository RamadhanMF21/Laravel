<h2>Tabel Employee</h2>
  <br />
@foreach ($employee as $employeelist)
  {{$employeelist->employee_id}}
  {{$employeelist->employee_name}}
  {{$employeelist->employee_address}}
  {{$employeelist->employee_phone_number}}
  <a href="/Employee/{{ $employeelist ->employee_id}}">Show</a>
  <a href="/Employee/{{ $employeelist ->employee_id}}/edit">Edit</a>
  <form class="" action="/Employee/{{$employeelist->employee_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}} <button>X</button>
  </form>
  <br />
@endforeach
<br>
<a href="{{ url('Employee/create')}}">Tambah Data</a>
