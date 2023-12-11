@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Topi</h3>

    <a href="/topi"> <input type="submit" value="Kembali" class="btn btn-primary"></a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card" style="width:100%">
                <img src="{{ asset('assets\profilefix.png') }}">
                <div class="card-body">
                    <h4 class="card-title">Photo Topi Sample</h4>
                </div>
            </div>
        </div>
        <div class="col-8">
            @foreach ($topi as $t)
                <fieldset disabled>
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
                            <label for = "ketersediaan" class = "col-sm-2 control-label">Ketersediaan</label>
                            <div class = "col-sm-4">
                                <input type="ketersediaan" required="required" name="ketersediaan" value="{{ $t->tersedia }}"
                                    class="form-control">
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/topi" class="btn btn-success" style="margin-right:32%">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
