@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Rumah Sakit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/rumahsakit/tambah"> + Tambah List Baru</a>
                    
                    <br/>
                    <br/>

                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{ $rs['id'] }}</td>
                            <td>{{ $rs['name'] }}</td>
                            <td>{{ $rs['address'] }}</td>
                            <td>{{ $rs['email'] }}</td>
                            <td>{{ $rs['telp'] }}</td>
                            <td>
                                <a href="/pegawai/edit/{{ $rs['id'] }}">Edit</a>
                                |
                                <a href="/pegawai/hapus/{{ $rs['id'] }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
