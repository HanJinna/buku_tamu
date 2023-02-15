@extends('layout')
@section('title','Edit-Tamu')
@section('content')



<div class="container" style="padding-left: 23px;">
    <div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card shadow mb-4" style="background-color: rgba(0, 0, 0, 0.6); border-color: white; ">
            <div class="card-header justify-content-center"style="background-color: rgba(0, 0, 0, 0.5); ">{{ __('SILAHKAN MENGISI DATA YANG ADA DI BAWAH INI') }}</div>
            <div class="card-body">
                <form action="{{ route('Data_Pengunjung.update', $pengunjung->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                <div class="form-group">
                    <label for="bulan_tanggal">Bulan & Tanggal</label>
                    <input type="date" class="form-control" id="bulan_tanggal" name='bulan_tanggal' value="{{$pengunjung->bulan_tanggal}}">
                </div> 
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name='nama' value="{{$pengunjung->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name='alamat' value="{{$pengunjung->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">No. Tlp</label>
                        <input type="text" class="form-control" id="no_tlp" name='no_tlp' value="{{$pengunjung->no_tlp}}">
                    </div>
                    <div class="form-group">
                        <label for="status_pengunjung">Status Pengunjung</label>
                        <input type="text" class="form-control" id="status_pengunjung" name='status_pengunjung' value="{{$pengunjung->status_pengunjung}}">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <textarea type="text" class="form-control" id="keperluan" name='keperluan' >{{$pengunjung->keperluan}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-md btn-rounded" value="SIMPAN">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
</div>

@endsection