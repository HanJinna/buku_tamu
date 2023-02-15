@extends('layout')
@section('title','Pengunjung')
@section('content')


<div class="container" style="padding-left: 23px; padding-top: 15px">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4" style="background-color: rgba(0, 0, 0, 0.6); border-color: white; ">
                <div class="card-header justify-content-center" style="background-color: rgba(0, 0, 0, 0.5); " >{{ __('- . - . - .  - . - . - . - . - . - . - DATA PENGUNJUNG - . - . - . - . - . - . - . - . - . -') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <!-- button tambah tamu -->
                    <a href="{{ route ('Data_Pengunjung.create') }}" class="btn btn-success btn-md btn-rounded">Tambah Tamu</a>

                    <!-- search -->
                    
<h2>My Phonebook</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">


                    <!-- end of search -->

                    <table class="table" id="myTable" >
                    <table class="table table-bordered">
                        <thead>
                            <td style="width: 10px;">no.</td>
                            <td style="width: 100px;">Bulan & Tanggal</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>No. Tlp</td>
                            <td>Status Pengunjung</td>
                            <td>Keperluan</td>
                            <td style="width: 130px;">Action</td>
                        </thead>
                        <tbody>

                    @foreach ($data as $i => $item)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>Hari, {{$item -> bulan_tanggal}}</td>
                    <td>{{$item -> nama }}</td>
                    <td>{{$item -> alamat }} </td>
                    <td>{{$item -> no_tlp }}</td>
                    <td>{{$item -> status_pengunjung }}</td>
                    <td>{{$item -> keperluan }}</td>
                    <td style="margin-left: 5px;">
                    	<a href="{{ route('check_in.create', $item -> id) }}" class="btn btn-success btn-sm btn-rounded" style="width: 35px;">IN</a>
                        <a href="{{ route('check_out.edit', $item -> id) }}" class="btn btn-success btn-sm btn-rounded" style="width: 50px;">OUT</a> <br>
                        <a onclick="show({{ $item->id }})" class="btn btn-sm  btn-info btn-circle"><i class="fas fa-info"></i>
                        <a href="{{ route ('Data_Pengunjung.edit', $item -> id) }}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i>
                        <a href="{{route('Data_Pengunjung.hapus', $item -> id)}}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
					</td>
                    </tr>
                    @endforeach
                  </tbody>
                    </table>
                    </table>
                </div>
            </div>
        </div>

 
        </div>
    </div>
</div>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<!-- SHOW -->
     <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header">
          <h6 class="m-0 font-weight-bold text-primary"><i class=""></i>KETERANGAN PENGUNJUNG SAAT INI</h6>
          </div>
          <div id="data" class="card-body">
        <h6 class="text-center">SILAHKAN PILIH DATA ANDA TERLEBIH DAHULU</h6>
          </div>
        </div>   
     </div>
 </div>
 <script>
    function show(id){
        $.get('Data_Pengunjung/'+id, function(data){
            $('#data').html(data);
        });
    }
 </script>

@endsection