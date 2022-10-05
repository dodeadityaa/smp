<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Blog</title>
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
                            <h1>Blog</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
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
                                    <h3 class="card-title">Edit Blog</h3>
                                </div>
                                <!-- Notif -->
                                @if(session('failed'))
                                <div class="alert alert-danger" role="alert">
                                    Data Tidak Berhasil Di Buat !!!
                                </div>
                                @endif
                                <!-- Notif -->
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="{{ route('blog-view.update',$blogga->id) }}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{method_field("PUT")}}
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="id_blog" class="form-control" id="id_blog" value="{{ $blogga->id }}">
                                                <input type="text" class="form-control" name="judul" id="judul" value="{{ $blogga->judul }}" placeholder="Judul" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Categori</label>
                                            <div class="col-sm-10">
                                                <select name="categori" id="categori" class="form-control input-lg dynamic1" data-dependent="categoriiw" required>
                                                    <option>Masukan Categori</option>
                                                    @foreach($categorii as $cate)
                                                    @if($cate->id == $blogga->id_categori )
                                                    <option value="{{ $cate->id }}" selected>{{ $cate->categori }}</option>
                                                    @else
                                                    <option value="{{ $cate->id }}">{{ $cate->categori }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl" id="tgl" value="{{ $blogga->tgl }}" placeholder="Masukan Tanggal" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Isi</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote" name="blog" required>{{ $blogga->blog }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Cover</label>
                                            <div class="col-sm-10">
                                                <img src="{{ URL::to('/') }}/fotoblog/{{ $blogga->foto_blog}}" class="img-thumbnail" width="200" />
                                                <input type="hidden" class="form-control" name="fotojudul" id="fotojudul" value="{{ $blogga->foto_blog }}" placeholder="Judul">
                                                <input type="file" class="form-control" id="avatarjudul" name="avatarjudul2">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a href="{{ route('blog-view.index') }}" class="btn btn-danger">Cancel</a>
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