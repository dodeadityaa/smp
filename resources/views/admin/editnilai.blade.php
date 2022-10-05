<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Nilai</title>
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
                            <h1>Edit Nilai</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Nilai</li>
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
                                    <h3 class="card-title">Data Nilai</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('nilai-view.update',$nilaia->id) }}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{method_field("PUT")}}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul_nilai">Judul Nilai</label>
                                            <input type="hidden" name="id_nilaii" class="form-control" id="id_nilaii" value="{{ $nilaia->id }}">
                                            <input type="text" class="form-control" name="judul_nilai" id="judul_nilai" value="{{ $nilaia->judul_nilai }}" placeholder="Masukan Judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas">
                                                <option>Masukan Kelas</option>
                                                <option {{$nilaia->kelas == '7' ? 'selected' : ''}}>7</option>
                                                <option {{$nilaia->kelas == '8' ? 'selected' : ''}}>8</option>
                                                <option {{$nilaia->kelas == '9' ? 'selected' : ''}}>9</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pelajaran</label>
                                            <select class="form-control" name="pelajaran" id="pelajaran">
                                                <option>Masukan Pelajaran</option>
                                                <option {{$nilaia->pelajaran == 'Matematika' ? 'selected' : ''}}>Matematika</option>
                                                <option {{$nilaia->pelajaran == 'Informatika' ? 'selected' : ''}}>Informatika</option>
                                                <option {{$nilaia->pelajaran == 'PKN' ? 'selected' : ''}}>PKN</option>
                                                <option {{$nilaia->pelajaran == 'IPS' ? 'selected' : ''}}>IPS</option>
                                                <option {{$nilaia->pelajaran == 'IPA' ? 'selected' : ''}}>IPA</option>
                                                <option {{$nilaia->pelajaran == 'PAB' ? 'selected' : ''}}>PAB</option>
                                                <option {{$nilaia->pelajaran == 'BHS. Indonesia' ? 'selected' : ''}}>BHS. Indonesia</option>
                                                <option {{$nilaia->pelajaran == 'BHS. Inggris' ? 'selected' : ''}}>BHS. Inggris</option>
                                                <option {{$nilaia->pelajaran == 'Seni Budaya' ? 'selected' : ''}}>Seni Budaya</option>
                                                <option {{$nilaia->pelajaran == 'BHS. Bali' ? 'selected' : ''}}>BHS. Bali</option>
                                                <option {{$nilaia->pelajaran == 'PJOK' ? 'selected' : ''}}>PJOK</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Tanggal</label>
                                            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Siswa</label>
                                        </div>
                                        <a href="{{ route('nilaisiswa-view.index',$nilaia->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
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