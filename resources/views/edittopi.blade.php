@extends('master2')

@section('judul_halaman')

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Topi</h3>

        <a href="/topi"> <input type="submit" value="Kembali" class="btn btn-primary"></a>

        <br/>
        <br/>
@endsection

@section('konten')
        @foreach($topi as $t)
        <form action="/topi/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->kodetopi }}">
            <div class = "form-group">
                <label for = "merk" class = "col-sm-2 control-label">Merk</label>
                <div class = "col-sm-4">
                    <input type="text" required="required" name="merk" value="{{ $t->merktopi }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stok" class = "col-sm-2 control-label">Stok</label>
                <div class = "col-sm-4">
                    <input type="text" required="required" name="stok" value="{{ $t->stocktopi }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group">
                <label for = "ketersediaan" class = "col-sm-2 control-label">ketersediaan</label>
                <div class = "col-sm-4">
                    <input type="number" required="required" name="ketersediaan" value="{{ $t->tersedia}}"
                        class="form-control">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
        @endforeach
@endsection

