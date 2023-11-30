@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai"> <input type="submit" value="Kembali" class="btn btn-primary"></a>

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
                    <h4 class="card-title">Photo Sample</h4>
                </div>
            </div>
        </div>
        <div class="col-8">
            @foreach ($pegawai as $p)
                <fieldset disabled>
                    <form action="/pegawai/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                            <div class = "col-sm-4">
                                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                            <div class = "col-sm-4">
                                <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                            <div class = "col-sm-4">
                                <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                            <div class = "col-sm-4">
                                <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/pegawai" class="btn btn-success" style="margin-right:32%">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
