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
                    <h1 class="text-center">Detail Nama Dan Nilai Siswa</h1><br><br>

                    <div>
                        <h3>Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$detailnilai->judul_nilai}}</h3>
                        <h4>Tanggal Post &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$detailnilai->tgl->toFormattedDateString()}}</h4>
                        <h3>Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$detailnilai->kelas}}</h3>
                        <h3>Pelajaran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$detailnilai->pelajaran}}</h3>
                        <h3>Jumlah Siswa &nbsp;&nbsp;&nbsp;: {{$detailnilai->jumlah_siswa}}</h3>
                        <h3>Nilai Siswa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="{{ route('nilai-siswavii.index',$detailnilai->id) }}" class="btn btn-primary"> Lihat Nilai</a></h3>
                    </div>
                </div>
                @include('bagian.filter')
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