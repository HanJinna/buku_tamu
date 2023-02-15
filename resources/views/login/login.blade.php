@extends('layout')
@section('title','LOGIN')
@section('content')


<div class="container" style="width: 1000px; padding-top: 30px; background-color: rgba(0, 0, 0, 0.6); border-color: white; margin-top: 25px;" >
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4" style="background-color: rgba(0, 0, 0, 0.6); border-color: white; ">
                <div class="card-header">
                	SILAHKAN LOGIN KE AKUN ANDA
                </div>
                           <div class="card-body">
                            	<form method="post" enctype="multipart/form-data" action="">
                    		@csrf
			                <div class="form-group">
			                    <label for="bulan_tanggal">Nama :</label>
			                    <input type="text" class="form-control" id="bulan_tanggal" name='bulan_tanggal' value="">
			                </div> 
			                <div class="form-group">
			                    <label for="bulan_tanggal">email :</label>
			                    <input type="text" class="form-control" id="bulan_tanggal" name='bulan_tanggal' value="">
			                </div> 
			                <div class="form-group">
			                    <label for="Password">Password :</label>
			                    <input type="Password" class="form-control" id="Password" name='Password' value="">
			                </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection