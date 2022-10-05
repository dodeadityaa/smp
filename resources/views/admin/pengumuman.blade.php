<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengumuman</title>
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
                            <h1>Pengumuman DJB School</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pengumuman</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Input Pengumuman</h3>
                                </div>
                                <!-- Notif -->
                                @if(session('suksesssss'))
                                <div class="alert alert-success" role="alert">
                                    Data Berhasil Di Buat !!!
                                </div>
                                @endif
                                <!-- Notif -->
                                <!-- Notif -->
                                @if(session('suksesedit'))
                                <div class="alert alert-success" role="alert">
                                    Data Berhasil Di Ubah !!!
                                </div>
                                @endif
                                <!-- Notif -->
                                <!-- Notif -->
                                @if(session('deletee'))
                                <div class="alert alert-danger" role="alert">
                                    Data Telah Di Hapus !!!
                                </div>
                                @endif
                                <!-- Notif -->
                                <div class="card-header">
                                    <a href="{{ route('pengumuman-view.create') }}" class="btn btn-primary">Input Pengumuman Baru</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Pengumuman</th>
                                                <th>Detail Pengumuman</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengumumans as $i => $item)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{$item->judul_pengumuman}}</td>
                                                <td>{!!$item->detail_pengumuman!!}</td>
                                                <td>{{$item->tgl}}</td>
                                                <td><a href="{{ route('pengumuman-view.edit',$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                    <form action="{{ route('pengumuman-view.destroy', $item->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $item->judul_pengumuman }} ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Pengumuman</th>
                                                <th>Detail Pengumuman</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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
</body>

</html>