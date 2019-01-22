<h2>Isikan Data Customer</h2>
<form class="" action="{{route('Customer.store')}}" method="post">
  {{ csrf_field() }}

  <h5>Id</h5> <input type="text" name="txt_id" value=""> <br>
  <h5>Nama</h5> <input type="text" name="txt_name" value=""> <br>
  <h5>Alamat</h5> <input type="text" name="txt_address" value="">
  <br>
  <br>
  <button type="submit" name="sbm_save" id="sbm_save">Simpan</button>
</form>
