<h1>Data Kategori</h1>

 <ul>

    @foreach ($kategori as $item)
    @if ($id == $item['id'])
    <li>{{ $item['id'] ." ". $item['nama_kategori']}}</li>
    @break
    @endif
    @endforeach
    @if ($id != $item['id'])
    {{"ID tidak ditemukan"}}
    @endif
 
 </ul>