<form action="{{ route('simpanPost') }}"  method="POST">
@csrf
<label >Nama</label>
<input type="text" name="nama">

<button type="submit">Kirim</button>
</form>