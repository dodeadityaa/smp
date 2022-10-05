<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Tugas</title>
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
                            <h1>Tugas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tugas</li>
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
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Input Tugas</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- Notif -->
                                @if(session('failed'))
                                <div class="alert alert-danger" role="alert">
                                    Data Tidak Berhasil Di Buat !!!
                                </div>
                                @endif
                                <!-- Notif -->
                                <!-- form start -->
                                <form class="form-horizontal" action="{{ route('tugas-view.update',$tugasa->id) }}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{method_field("PUT")}}
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="judul_tugas" class="col-sm-2 col-form-label">Judul Tugas</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="id_tugas" class="form-control" id="id_tugas" value="{{ $tugasa->id }}">
                                                <input type="text" class="form-control" name="judul_tugas" id="judul_tugas" value="{{ $tugasa->judul_tugas }}" placeholder="Masukan Judul Tugas" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detail_tugas" class="col-sm-2 col-form-label">Detail Tugas</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote" name="detail_tugas">{{ $tugasa->detail_tugas }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl" id="tgl" value="{{ $tugasa->tgl }}" placeholder="Masukan Tanggal" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kelas" id="kelas">
                                                    <option>Masukan Kelas</option>
                                                    <option {{$tugasa->kelas == '7' ? 'selected' : ''}}>7</option>
                                                    <option {{$tugasa->kelas == '8' ? 'selected' : ''}}>8</option>
                                                    <option {{$tugasa->kelas == '9' ? 'selected' : ''}}>9</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pelajaran" class="col-sm-2 col-form-label">Pelajaran</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pelajaran" id="pelajaran">
                                                    <option>Masukan Pelajaran</option>
                                                    <option {{$tugasa->pelajaran == 'Matematika' ? 'selected' : ''}}>Matematika</option>
                                                    <option {{$tugasa->pelajaran == 'Informatika' ? 'selected' : ''}}>Informatika</option>
                                                    <option {{$tugasa->pelajaran == 'PKN' ? 'selected' : ''}}>PKN</option>
                                                    <option {{$tugasa->pelajaran == 'IPS' ? 'selected' : ''}}>IPS</option>
                                                    <option {{$tugasa->pelajaran == 'IPA' ? 'selected' : ''}}>IPA</option>
                                                    <option {{$tugasa->pelajaran == 'PAB' ? 'selected' : ''}}>PAB</option>
                                                    <option {{$tugasa->pelajaran == 'BHS. Indonesia' ? 'selected' : ''}}>BHS. Indonesia</option>
                                                    <option {{$tugasa->pelajaran == 'BHS. Inggris' ? 'selected' : ''}}>BHS. Inggris</option>
                                                    <option {{$tugasa->pelajaran == 'Seni Budaya' ? 'selected' : ''}}>Seni Budaya</option>
                                                    <option {{$tugasa->pelajaran == 'BHS. Bali' ? 'selected' : ''}}>BHS. Bali</option>
                                                    <option {{$tugasa->pelajaran == 'PJOK' ? 'selected' : ''}}>PJOK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Tugas</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="upload_tugas" name="upload_tugas">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a href="{{ route('tugas-view.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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