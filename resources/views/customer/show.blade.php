apakah ini keluar bro??
  <br />
@foreach ($customer as $customerlist)
  {{$customerlist->customer_id}}
  {{$customerlist->name}}
  {{$customerlist->address}}
  <a href="/Customer/{{ $customerlist ->customer_id}}">Show</a>
  <br />
  <!--http://localhost:8000/Customer/3-->
@endforeach
<br>
<a href="{{ url('Customer/create')}}">Kembali</a>
