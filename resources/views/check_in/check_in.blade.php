@extends('layout')
@section('title','Check-In')
@section('content')

<div class="container" style="padding-left: 135px; padding-top: 20px;">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="card-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" enctype="multipart/form-data" action="{{ route('check_in.store')}}">

                    @csrf
                    <!--
                <div class="form-group">
                    <label for="id_pengunjung">Nama Pengunjung</label>
                    <input type="unsignedbiginteger" class="form-control" id="id_pengunjung" name='id_pengunjung' value="{{old('id_pengunjung')}}">
                </div> 
                    <div class="form-group">
                        <label for="date">Tanggal & Waktu</label>
                        <input type="date" class="form-control" id="date" name='date' value="{{old('date')}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-md btn-rounded" value="SIMPAN">
                    </div>
                    <a href="{{ route('Data_Pengunjung.index') }}" class="btn btn-success btn-sm btn-rounded" style="width: 35px; font-size: 0.4em;">Back</a>
                </form>  -->

                <main role="main">

            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-6">
                        <h2>Signature Canvas</h2>
                        <div id="signatureContainer" class="kbw-signature" >
                            <style>
                            .kbw-signature { 
                            width: 400px; height: 200px; 
                            display: inline-block;
                            border: 1px solid #a0a0a0;
                            -ms-touch-action: none;
                            }

                        .kbw-signature-disabled {
                            opacity: 0.35;
                        }
                            </style>
                        </div>
                        <p style="clear: both;" class="btn btn-group">
                            <button class="btn btn-outline-warning" id="disable">Disable</button>
                            <button class="btn btn-outline-danger" id="clear">Clear</button>
                            <button class="btn btn-outline-info" id="json">Save as JSON</button>
                            <button class="btn btn-outline-success" id="svg">Save as SVG</button>
                        </p>
                        <h2>Submit with Name</h2>
                        <form id="signatureForm">
                            <div class="form-group">
                                <label for="inputSignatureName">Name</label>
                                <input type="text" class="form-control" id="inputSignatureName" name="signatureName" required="">
                            </div>
                            <input type="hidden" id="inputSignatureID" name="signatureID">
                            <input type="hidden" id="action" name="action">
                            <button class="btn btn-outline-success" id="submitSignature">SUBMIT</button>
                            <button class="btn btn-outline-primary" id="updateSignature">UPDATE</button>
                            <br><br>
                        </form>
                    </div>
                    
                </div>

               

            </div>
            <!-- /container -->

        </main>

        <footer class="container">
            <p>Bootstrap 4 jQuery UI Signature &copy; 2020</p>
        </footer>

        <!--[if IE]>
<script src="excanvas.js"></script>
<![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.signature.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(function() {
                var b4sign = {
                dataTable:null,
                container: $('#signatureContainer').signature({ color: '#0080FF' }),
                initializeDatatable: function() {
                    this.dataTable = $('#signatureTable').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "order": [],
                        "ajax": {
                            url: "fetchTable.php",
                            type: "POST"

                        },
                        "columnDefs": [{
                            "targets": [0],
                            "orderable": false,
                        }, ],
                    });
                },
                disableContainer: function(selector){
                    var disable = $(selector).text() === 'Disable';
                    $(selector).text(disable ? 'Enable' : 'Disable');
                    this.container.signature(disable ? 'disable' : 'enable');
                },
                checkContainer:function(){
                    if (this.container.signature('isEmpty')) {
                         alert("Signature Canvas Is Empty");
                         return true;
                    }
                    return false;
                },
                svgSave:function(){
                    if (this.checkContainer()) return;
                    $.ajax({
                        url: "action.php",
                        method: 'POST',
                        data: {
                            action: "saveSVG",
                            signature: this.container.signature('toSVG')
                        },
                        dataType: 'json',
                        success: function(data) {
                            alert(data.msg);
                            b4sign.container.signature('clear');
                            b4sign.dataTable.ajax.reload();
                        }
                    });
                },
                jsonSave: function(){
                    if (this.checkContainer()) return;
                    $.ajax({
                        url: "action.php",
                        method: 'POST',
                        data: {
                            action: "saveJson",
                            signature: this.container.signature('toJSON')
                        },
                        dataType: 'json',
                        success: function(data) {
                            alert(data.msg);
                            b4sign.container.signature('clear');
                            b4sign.dataTable.ajax.reload();
                        }
                    });
                },
                formSave:function(formData){
                    formData.append("signature", b4sign.container.signature('toJSON'));
                       $.ajax({
                        url: "action.php",
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        success: function(data) {
                            alert(data.msg);
                            b4sign.dataTable.ajax.reload();
                        }
                    });
                },

                // function load (re-draw)
                load:function(id_pengunjung){
                    $('#inputSignatureID').val(id_pengunjung);
                    $.ajax({
                        url: "action.php",
                        method: 'POST',
                        data: {
                            action: "load",
                            "id_pengunjung": id_pengunjung
                        },
                        dataType: 'json',
                        success: function(data) {
                            $('#inputSignatureName').val(data.Name);
                            b4sign.container.signature('draw', data.Signature);
                        }
                    });
                },

                // function delete
                delete:function(id_pengunjung){
                    $.ajax({
                        url: "action.php",
                        method: 'POST',
                        data: {
                            action: "delete",
                            "id_pengunjung": id_pengunjung
                        },
                        dataType: 'json',
                        success: function(data) {
                            alert(data.msg);
                            b4sign.dataTable.ajax.reload();
                        }
                    });
                }};

                b4sign.initializeDatatable();
                b4sign.container;
                
                $('#disable').click(function() {
                    b4sign.disableContainer(this);
                });
                $('#clear').click(function() {
                    b4sign.container.signature('clear');
                });
                $(document).on('click', '#loadSignature', function() {
                    b4sign.load($(this).attr("data-id"));
                });
                
                $(document).on('click', '#submitSignature', function() {
                    $('#action').val('submit');
                });
                $(document).on('click', '#updateSignature', function() {
                    $('#action').val('update');
                });
                $(document).on('click', '#deleteSignature', function() {
                    b4sign.delete($(this).attr("data-id"));
                });
                $('#json').click(function() {
                    b4sign.jsonSave();
                });
                $('#svg').click(function() {
                    b4sign.svgSave();
                });
                $(document).on('submit', '#signatureForm', function(event) {
                    event.preventDefault(); 
                    if (b4sign.checkContainer()) return;
                    b4sign.formSave(new FormData(this));
                });
                window.addEventListener('scroll', function(e) {
                    console.log('scrolling');
                });
            });
           
        </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection