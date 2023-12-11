@extends('master2')
@section('title','database kategori')

@section('konten')

<h2>Data Kategori</h2>

<br/>

<div class="row">

    <div class="col-8">
        <form action="/kategori" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Pilih Kategori</label>
                <br>
                <br>
                <div class="col-sm-10">
                    <select class="form-control" id="kategori" name="kategori">
                        @foreach($kategori as $k)
                            <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection
