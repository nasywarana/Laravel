D A T A B U K U
<br />
<br />
@foreach($buku as $bukulist)

   {{$bukulist->buku_id}}
   {{$bukulist->nama_buku}}
   {{$bukulist->pengarang}}
   {{$bukulist->harga}}
    <br />
@endforeach 
<br>
<br>
<a href="{{ url('Buku/create') }}">
touch me
</a>