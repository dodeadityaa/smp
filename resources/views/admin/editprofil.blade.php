<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profil</title>
    @include('bagian.icon')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('admincss/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admincss/dist/css/adminlte.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('admincss/plugins/summernote/summernote-bs4.min.css')}}">
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
                            <h1>Edit Data Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Profil</li>
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
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data Profil</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('dashboard-view.update',$adminss->id) }}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{method_field("PUT")}}
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- left column -->
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="hidden" name="id_users" class="form-control" id="id_users" value="{{ $adminss->id }}">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Nama" value="{{ $adminss->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ $adminss->email }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_telp">Nomber Telepon</label>
                                                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Enter Nomber Telepon" value="{{ $adminss->no_telp }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" value="{{ $adminss->alamat }}" required>
                                                    <input type="hidden" class="form-control" name="level" id="level" value="{{ $adminss->level }}" placeholder="login">
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="hidden" class="form-control" name="fotologin" id="fotologin" value="{{ $adminss->foto }}" placeholder="login">
                                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                                            <label class="custom-file-label" for="foto">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <center> <img src="{{ URL::to('/') }}/fotologin/{{ $adminss->foto}}" class="img-thumbnail" width="200" /></center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <!-- form start -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
    <!-- bs-custom-file-input -->
    <script src="{{url('admincss/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{url('admincss/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('admincss/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('admincss/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
</body>

</html>