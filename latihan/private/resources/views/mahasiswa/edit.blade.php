@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Form Edit Mahasiswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Mahasiswa's Edit Page! <br/>
                    <hr/>
                    <form method="post" action="{{URl('/mahasiswa/'.$data->id)}}" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name ="_method" value="PUT">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input name="nim" type="text" class="form-control" id="input" placeholder="Nomor Induk Mahasiswa" value="{{ $data->nim }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input name="nama" type="text" class="form-control" id="input" placeholder="Nama Mahasiswa" value="{{ $data->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input name="jurusan" type="text" class="form-control" id="input" placeholder="Jurusan Mahasiswa" value="{{ $data->jurusan }}">
                            </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <input type="submit" name= "simpan" class="btn btn-success" value="Update">
                            <input type="reset" name="kosongkan" class="btn btn-default" value="Kosongkan">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection