@extends('master2')
@section('title','database topi')

    @section('judul_halaman')
    @php
        // function tersediatopi($tersediatopi)
        // {
        //     if ($tersediatopi == 1 ) {
        //         return 'Tersedia';
        //     } elseif ($tersediatopi == 0) {
        //         return 'Tidak Tersedia';
        //     } else {
        //         return 'Masukan angka (1) atau (0) saja';
        //     }
        // }
    @endphp
	<h2>www.malasngoding.com</h2>
	<h3>Data Topi</h3>

	<a href="/topi/tambah"> <input type="submit" value="Tambah topi Baru" class="btn btn-primary"></a>

	<br/>
	<br/>
    @endsection

    @section('konten')
    <p>Cari Data topi :</p>
	<form action="/topi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Topi Anda Disini" value="{{ old('cari') }}">
        <br>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stok</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($topi as $t)
		<tr>
			<td>{{ $t->merktopi }}</td>
			<td>{{ $t->stocktopi }}</td>
			<td>
                @if($t->tersedia == 1)
                Tersedia
                @elseif($t->tersedia == 0)
                Tidak Tersedia
                @else
                Invalid
                @endif
            </td>
			<td>
                <a href="/topi/view/{{ $t->kodetopi }}" class="btn btn-success">View</a>
                |
				<a href="/topi/edit/{{ $t->kodetopi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/topi/hapus/{{ $t->kodetopi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$topi->links()}}

 @endsection
