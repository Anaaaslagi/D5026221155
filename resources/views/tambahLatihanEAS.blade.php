@extends('master2')

@section('judul_halaman')
    <h3>Tambah Mahasiswa</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-12">
            <form action="/nilaikuliah/store" method="post" class="form-horizontal " role="form">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
                    <div class = "col-sm-10">
                        <input type="number" required="required" name="NRP" class="form-control">
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
                    <div class = "col-sm-10">
                        <input type="number" required="required" name="NilaiAngka" class="form-control">
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
                    <div class = "col-sm-10">
                        <input type="number" required="required" name="SKS" class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Simpan Data">
            </form>
        </div>
    </div>
@endsection
