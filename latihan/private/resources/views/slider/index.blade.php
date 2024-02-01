@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div align = "right">
                <a href="{{URL('/slider/create')}}" class="btn btn-success">Tambah</a>
                <a href="{{URL('/slider/cetak')}}" class="btn btn-info" target="_blank">Cetak</a>
                <div>  &nbsp; <br/></div>
            </div>
            <div class="card">
                <div class="card-header">Slider</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Slider's Page! Welcome to My Website.<br/>


                    <table class="table table-striped">
                        <thead>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Sub Judul</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($slider as $d)
                            <tr>
                                <td class="text-center">{{ $d->judul }}</td>
                                <td class="text-center">{{ $d->subjudul }}</td>
                                <td class="text-center"><img src="{{ URL($d->foto).'?p='.rand(0,100) }}" height="100" width="150"></td>
                                <td>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <a class="btn btn-primary btn-block mb-1 btn-sm" href="{{ URL('/slider/'.$d->id.'/edit')}}">Edit</a>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <form action="{{ URL('/slider/'.$d->id)}}" method="post" id="formhapus">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger btn-block btn-sm" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('jquery')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('submit','#formhapus',function(e){
                var tanya = window.confirm("apakah anda yakin ingin menghapus?");
                if(tanya){
                    return true;
                }else{
                    e.preventDefault();
                    return false;
                }
        });
    });

</script>
@endpush
