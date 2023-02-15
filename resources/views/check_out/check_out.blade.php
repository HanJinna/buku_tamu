@extends('layout')
@section('title','Check-Out')
@section('content')


<div class="container" style="width: 1000px; padding-top: 30px; background-color: rgba(0, 0, 0, 0.6); border-color: white; margin-top: 25px;" >
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4" style="background-color: rgba(0, 0, 0, 0.6); border-color: white; ">
                <div class="card-header">
                    <div class="card-body">
                        
                        <form method="post" enctype="multipart/form-data" action="{{ route('check_out.store', $data->id)}}">
                    @csrf

                    <input type="hidden" name="id_pengunjung" value="{{ $data->id }}"> 
                    <div class="form-group">
                    <label for="date">Bulan & Tanggal</label>
                    <input type="date" class="form-control" id="date" name='date' value="">
                    </div> 
                    <div class="col-lg-7" style="margin-left: 193px;">
                    <div class="card">
                        <div class="card-header" style="background-color: rgb(57, 158, 143); color: black;">NOTE :</div>

                            <div class="card-body text-dark" style="font-size: 87%;;">
                            <ul style="padding: 0px; justify-items: left;">
                                <li>Data Yang Anda Masukkan Tidak Akan Bisa Dirubah Lagi</li>
                                <li>Pastikan Anda Sudah Memasukkan Data Yang Benar</li>
                            </ul>
                            
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">
                            <input required type="checkbox"  class="" id="deskripsi" name="deskripsi" value="Anda Berhasil melakukan Check Out" style="box-sizing: 30%;"> Silahkan centang untuk melakukan check out
                        </label>
                        
                    </div> 

                    
                        <input type="submit" class="btn btn-success btn-md btn-rounded" value="Check Out">
                    
                    <a href="{{ route('Data_Pengunjung.index') }}" class="btn btn-success btn-sm btn-rounded">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection