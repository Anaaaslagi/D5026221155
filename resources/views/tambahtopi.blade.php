@extends('master2')

@section('konten')
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Topi</h3>

	<a href="/topi"> <input type="submit" value="Kembali" class="btn btn-primary"></a>

	<br/>
	<br/>

	<form action="/topi/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "merk" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-4">
               <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukan Merk Topi">
            </div>
        </div>

        <div class = "form-group">
            <label for = "stok" class = "col-sm-2 control-label">Stok</label>
            <div class = "col-sm-4">
               <input name="stok" type = "text" class = "form-control" id = "stok" placeholder = "Masukan Jumlah Stok">
            </div>
        </div>

        <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
            <div class = "col-sm-6">
               <input name="tersedia" type = "text" class = "form-control" id = "tersedia" placeholder = "Masukan angka (1) kalau tersedia, angka (0) kalau tidak tersedia">
            </div>
        </div>

		<input type="submit" value="Tambah" class="btn btn-success">

	</form>
@endsection
