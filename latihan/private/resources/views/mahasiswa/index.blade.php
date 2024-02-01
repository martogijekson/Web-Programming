@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div align = "right">
                <a href="{{URL('/mahasiswa/create')}}" class="btn btn-success">Tambah</a>
                <div>  &nbsp; <br/></div>
            </div>
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Mahasiswa's Page! Welcome to My Website.<br/>


                    <table class="table table-bordered">
                        <thead>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jurusan</th>
                        <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $d)
                            <tr>
                                <td class="text-center">{{ $d->nim }}</td>
                                <td class="text-center">{{ $d->nama }}</td>
                                <td class="text-center">{{ $d->jurusan }}</td>
                                <td>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <a class="btn btn-primary btn-block mb-1 btn-sm" href="{{ URL('/mahasiswa/'.$d->id.'/edit')}}">Edit</a>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <form action="{{ URL('/mahasiswa/'.$d->id)}}" method="post" id="formhapus">
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
