<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Guru</title>
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
                            <h1>Data Guru</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Guru</li>
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
                                    <h3 class="card-title">Guru</h3>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buatModal" data-whatever="@mdo">Daftar Guru</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>nama</th>
                                                <th>Email</th>
                                                <th>Nomber telepon</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($adminss as $i => $item)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->no_telp}}</td>
                                                <td>{{$item->alamat}}</td>
                                                <td><a href=# class="btn btn-success" id="edit-admin" data-toggle="modal" data-target="#editModal" data-id="{{ $item->id }}">Edit</a>
                                                    <form action="{{ route('guru-view.destroy', $item->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $item->name }} ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>nama</th>
                                                <th>Email</th>
                                                <th>Nomber telepon</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- Modal buat -->
                            <div class="modal fade" id="buatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Daftar Admin</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('guru-view.store') }}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="namee">Nama</label>
                                                    <input type="name" class="form-control" id="name" name="name" aria-describedby="namee" placeholder="Masukan Nama Admin">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="numberee">Number Telephone</label>
                                                    <input type="tel" class="form-control" id="no_telp" name="no_telp" aria-describedby="numberee" placeholder="Masukan Number Telephone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="avatar">file input</label>
                                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                                </div>
                                                <div class="form-group">
                                                    <label>Level Pegawai</label>
                                                    <select id="level" name="level" class="form-control input-lg dynamic67">
                                                        <option>Masukan Level Pegawai</option>
                                                        <option>guru</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="{{ old('password') }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Buat</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal buat -->
                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('guru-view.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            {{method_field("PUT")}}
                                            <div class="modal-body">
                                                <input type="hidden" name="id_admin" class="form-control" id="id_admin" value="{{ $item->id }}">
                                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                    <label for="namee">Nama</label>
                                                    <input type="name" class="form-control" id="name1" name="name" aria-describedby="namee" placeholder="Masukan Nama" value="{{ old('name') }}">

                                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                </div>
                                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                                </div>
                                                <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                                                    <label for="numberee">Number Telephone</label>
                                                    <input type="number" class="form-control" id="no_telp1" name="no_telp" aria-describedby="numberee" placeholder="Masukan Number Telephone" value="{{ old('no_telp') }}">
                                                    <div class="invalid-feedback">{{ $errors->first('no_telp') }}</div>
                                                </div>
                                                <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="alamat" class="form-control" id="alamat1" name="alamat" placeholder="Enter Alamat" value="{{ old('alamat') }}">
                                                    <div class="invalid-feedback">{{ $errors->first('alamat') }}</div>
                                                </div>

                                                <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}">
                                                    <label for="foto">file input</label>
                                                    <input type="hidden" class="form-control-file" id="fotologin1" name="fotologin">
                                                    <input type="file" class="form-control-file" id="foto1" name="foto">
                                                    <div class="invalid-feedback">{{ $errors->first('foto') }}</div>
                                                </div>
                                                <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                                                    <label>Level Pegawai</label>
                                                    <select name="level" id="level1" name="level" class="form-control input-lg dynamic2">
                                                        <option>Masukan Level Pegawai</option>
                                                        <option>guru</option>
                                                    </select>
                                                    <div class="invalid-feedback">{{ $errors->first('level') }}</div>
                                                </div>
                                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                                    <label for="paswordd">Password</label>
                                                    <input type="password" class="form-control" id="password1" name="password" placeholder="Masukan Password" value="{{ old('password') }}">
                                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
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
                            <!-- Modal Edit -->>
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
        @include('bagian.footeradmin')

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
        $('body').on('click', '#edit-admin', function() {
            var admin_id = $(this).data('id');
            $.get('guru-view/' + admin_id + '/edit', function(data) {
                $('#id_admin').val(data.id);
                $('#name1').val(data.name);
                $('#email1').val(data.email);
                $('#alamat1').val(data.alamat);
                $('#no_telp1').val(data.no_telp);
                $('#level1').val(data.level);
                $('#fotologin1').val(data.foto);
                $('#password1').val(data.password);
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
</body>

</html>