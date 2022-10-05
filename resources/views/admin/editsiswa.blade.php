<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Siswa</title>
    <!-- Favicon -->
    @include('bagian.icon')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('admincss/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('admincss/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admincss/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admincss/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admincss/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('bagian.menuadmin')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Data Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Data Siswa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Input Nilai elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data Nilai Siswa</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    @foreach ($nilaia as $item)
                                    <div class="form-group row">
                                        <input type="name" class="form-control col-10 col-sm-8 col-md-6 col-xs-12" id="nama_siswa" placeholder="Masukan Nama Siswa" value="{{$item->nama_siswa}}">
                                        <input type="number" class="form-control col-sm-4 col-md-4 col-xs-12 col-form-label" id="nilai_siswa" placeholder="Masukan Nilai Siswa" value="{{$item->nilai_siswa}}">
                                        <div class=" col-10 col-sm-8 col-md-2 col-xs-12">
                                            <button type="button" data-toggle='modal' data-target='#editAnggota_{{$item->id}}' class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editAnggota_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('nilaisiswa-view.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    {{method_field("PUT")}}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="namee">Nama Siswa</label>
                                                            <input type="name" class="form-control" id="nama_siswa" name="nama_siswa" aria-describedby="namee" placeholder="Masukan Nama Siswa" value="{{$item->nama_siswa}}">
                                                            <input type="hidden" name="id_nilaii" class="form-control" id="id_nilaii">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="namee">Nilai Siswa</label>
                                                            <input type="name" class="form-control" id="nilai_siswa" name="nilai_siswa" aria-describedby="namee" placeholder="Masukan Nilai Siswa" value="{{$item->nilai_siswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <a type="button" href="{{ route('nilai-view.index') }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- ##### Footer Area Start ##### -->
        @include('bagian.footeradmin')
        <!-- ##### Footer Area Start ##### -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('admincss/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('admincss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{url('admincss/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('admincss/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('admincss/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('admincss/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('admincss/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('admincss/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('admincss/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $('body').on('click', '#delete-blog', function() {
            var blog_id = $(this).data('id');
            $.get('blog-view/' + blog_id + '/destroy', function(data) {
                $('#id_blog').val(data.id);
            })
        });
    </script>
    <script>
        $(function() {
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#selectStores").change(function() {
                // $('.businessSpecifics').remove();
                var number = $("#selectStores option:selected").text();
                // console.log(number);
                var htmlToInsert = "";
                for (var i = 1; i <= number; i++) {
                    htmlToInsert = '<div class="form-group"><label for="nama_krt">Nama Siswa ' + i + '</label></div><div class="form-group row"><input type="text" name="nama_siswa[]" class="form-control col-10 col-sm-8 col-md-8 col-xs-12" id="nama_siswa" placeholder="Masukan Nama Anggota Rumah Tangga  ' + i + '"><input type="number" name="nilai_siswa[]" class="form-control col-sm-3 col-md-3 col-xs-12" id="nilai_siswa" placeholder="Masukan Nilai Siswa  ' + i + '"></div>'
                    $(htmlToInsert).insertAfter("#selectStores");
                }
            });
        });
    </script>
</body>

</html>