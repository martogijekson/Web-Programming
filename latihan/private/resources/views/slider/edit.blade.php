@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Form Edit Slider</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Slider's Edit Page! <br/>
                    <hr/>
                    <form method="post" action="{{URl('/slider/'.$data->id)}}" class="" enctype= "multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name ="_method" value="PUT">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input name="judul" type="text" class="form-control" id="input" placeholder="Nomor Induk Judul" value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Sub Judul</label>
                            <div class="col-sm-10">
                                <input name="subjudul" type="text" class="form-control" id="input" placeholder="Nama Sub Judul" value="{{ $data->subjudul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                            <input type="file" name="foto">
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