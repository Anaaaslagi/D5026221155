@extends('master2')

@section('konten')
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai"> <input type="submit" value="Kembali" class="btn btn-primary"></a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-4">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukan Nama Pegawai">
            </div>
        </div>

        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-4">
               <input name="jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukan Jabatan Pegawai">
            </div>
        </div>

        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-4">
               <input name="umur" type = "text" class = "form-control" id = "umur" placeholder = "Masukan Umur Pegawai">
            </div>
        </div>

        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-4">
               <textarea name="alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukan Alamat Pegawai"></textarea>
            </div>
        </div>

		<input type="submit" value="Tambah" class="btn btn-success">

	</form>
@endsection
