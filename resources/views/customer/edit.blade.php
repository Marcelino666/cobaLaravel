@extends('layout/main')

@section('title', 'Form Ubah data Layanan')

@section('container')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <h3 class="text-center">Ubah Customer</h3>
                        <div class="panel-body">
                            <form method="post" action="/customer/{{$customer->id_customer}}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Customer</label>
                                    <input type="text" class="form-control @error('nama_customer') is-invalid @enderror" id="nama" name="nama_customer" placeholder="Masukkan Nama" value="{{$customer->nama_customer}}">
                                    @error('nama_customer')
                                        <div class="ivalid-feedback text-danger">{{$message}}</div>
                                    @enderror
                                    <br>
                                    <label for="alamat">Alamat Customer</label>
                                    <input type="text" class="form-control @error('alamat_customer') is-invalid @enderror" id="alamat" name="alamat_customer" placeholder="Masukkan Alamat" value="{{$customer->alamat_customer}}">
                                    @error('alamat_customer')
                                        <div class="ivalid-feedback text-danger">{{$message}}</div>
                                    @enderror
                                    <br>
                                    <label for="tanggal lahir">Tanggal Lahir Customer</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{$customer->tanggal_lahir}}">
                                    @error('tanggal_lahir')
                                        <div class="ivalid-feedback text-danger">{{$message}}</div>
                                    @enderror
                                    <br>
                                    <label for="nomor telepon">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" value="{{$customer->nomor_telepon}}">
                                    @error('nomor_telepon')
                                        <div class="ivalid-feedback text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
