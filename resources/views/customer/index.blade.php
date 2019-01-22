apakah ini keluar bro??
  <br />
@foreach ($customer as $customerlist)
  {{$customerlist->customer_id}}
  {{$customerlist->name}}
  {{$customerlist->address}}
  <a href="/Customer/{{ $customerlist ->customer_id}}">Show</a>
  <a href="/Customer/{{ $customerlist ->customer_id}}/edit">Edit</a>
  <form class="" action="/Customer/{{$customerlist->customer_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}} <button>X</button>
  </form>
  <br />
  <!--http://localhost:8000/Customer/3-->
@endforeach
<br>
<a href="{{ url('Customer/create')}}">Kembali</a>
