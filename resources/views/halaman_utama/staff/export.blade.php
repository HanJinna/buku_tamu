<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- tabel eksport -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">

    <title></title>
</head>
<body>

<table id="data" class="display nowrap" style="width:100%">
  <thead>
            <tr>
                <th>No.</th>
                <th>Bulan & Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Tlp</th>
                <th>Status Pengunjung</th>
                <th>Keperluan</th>
                <th>Check In</th>
                <th>Check Out</th>
            </tr>
  </thead>
    <tbody>
        @foreach ($data as $item)    
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>Hari, {{$item -> bulan_tanggal}}</</td>
                <td>{{$item -> nama }}</td>
                <td>{{$item -> alamat }} </td>
                <td>{{$item -> no_tlp }}</td>
                <td>{{$item -> status_pengunjung }}</td>
                <th>{{$item -> keperluan }}</th>
                @foreach($check_in as $cin)
                <th>{{$cin->created_at}}</th>
                @endforeach
                <th>Check Out</th>
            </tr>
        @endforeach
            
    </tbody>
        <!-- <tfoot style="color: rgba(0, 0, 0, 0);">
            <tr>
                <th>No.</th>
                <th>Bulan & Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Tlp</th>
                <th>Status Pengunjung</th>
                <th>Keperluan</th>
                <th>Check In</th>
                <th>Check Out</th>
            </tr>
        </tfoot> -->
    </table>

<!-- script eksport tabel -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
    

    </body>
</html>
