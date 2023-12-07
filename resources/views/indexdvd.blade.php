@extends('master2')
@section('title','database dvd')

    @section('judul_halaman')
    @php
        function tersedia($tersedia)
        {
            if ($tersedia == 1 ) {
                return 'Tersedia';
            } elseif ($tersedia == 0) {
                return 'Tidak Tersedia';
            } else {
                return 'Masukan angka (1) atau (0) saja';
            }
        }
    @endphp
	<h2>www.malasngoding.com</h2>
	<h3>Data DVD</h3>

	<a href="/dvd/tambah"> <input type="submit" value="Tambah DVD Baru" class="btn btn-primary"></a>

	<br/>
	<br/>
    @endsection

    @section('konten')
    <p>Cari Data DVD :</p>
	<form action="/dvd/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari DVD Anda Disini" value="{{ old('cari') }}">
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
		@foreach($dvd as $d)
		<tr>
			<td>{{ $d->merkdvd }}</td>
			<td>{{ $d->stokdvd }}</td>
			<td>{{ tersedia($d->tersedia) }}</td>
			<td>
                <a href="/dvd/view/{{ $d->kodedvd }}" class="btn btn-success">View</a>
                |
				<a href="/dvd/edit/{{ $d->kodedvd }}" class="btn btn-warning">Edit</a>
				|
				<a href="/dvd/hapus/{{ $d->kodedvd }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$dvd->links()}}

 @endsection
