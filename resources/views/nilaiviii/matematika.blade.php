<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SMP DWIJENDRA BUALU</title>

    <!-- Favicon -->
    @include('bagian.icon')

    <!-- Stylesheet -->
    @include('bagian.css')

</head>

<body>

    <!-- ##### Loading ##### -->
    @include('bagian.loading')

    <!-- ##### Header Area Start ##### -->
    @include('bagian.menu')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1 class="text-center">Nilai Siswa</h1>
                    @foreach ($nilaii as $i => $item)
                    <div class="single-sermons style-3">
                        <div class="sermons-content d-flex align-items-center">

                            <!-- Sermons Thumbnail -->
                            <div class="event-date">
                                <h4>{{ $item->tgl->isoFormat('D') }}</h4> <span>{{ $item->tgl->isoFormat('MMM YYYY') }}</span>
                            </div>
                            <!-- Sermons Content -->
                            <div class="sermons-text">
                                <a href="#">
                                    <h1>{{ $item->judul_nilai }}</h1>
                                </a>
                                <p class="text">Kelas : {{$item->kelas}}</p>
                                <p class="text">Pelajaran :{{$item->pelajaran}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('bagian.filterr')
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('bagian.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/indexcss/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/indexcss/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/indexcss/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/indexcss/js/plugins/plugins.js"></script>
    <script src="/indexcss/js/plugins/audioplayer.js"></script>
    <!-- Active js -->
    <script src="/indexcss/js/active.js"></script>
</body>

</html>