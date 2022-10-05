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

    <!-- ##### Slide Bar Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(indexcss/img/lainnya/banner1.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">
                        <div class="col-12 col-lg-7">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(indexcss/img/lainnya/banner2.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">
                        <div class="col-12 col-lg-7">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(indexcss/img/lainnya/banner3.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Slide Bar End ##### -->
    <!-- ##### seputar dwijendra Start ##### -->
    <div class="faith-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h3>Seputar DJB School</h3>
                        <p>berikut adalah kegiatan seputar DJB School</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                @foreach ($blogs as $i => $item)
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <div class="blog-thumbnail">
                            <img src="{{ URL::to('/') }}/fotoblog/{{ $item->foto_blog}}" class="img-thumbnail" width="75" />
                            <div class="post-date">
                                <a href="#">{{ $item->tgl->toFormattedDateString() }}</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <a href="/blog/detailblog/{{ $item->id }}" class="blog-title">{{ $item->judul }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <center>
        <a href="/blog" class="btn btn-warning mb-100">Lihat Berita Lainnya</a>
    </center>
    <!-- ##### seputar dwijendra Start ##### -->
    <!-- ##### pengumuman Area Start ##### -->
    <section class="donate-our-charities section-padding-100 bg-img bg-overlay" style="background-color: #0415b4;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white text-center mx-auto">
                        <h4>Pengumuman DJB School</h4>
                    </div>
                </div>
            </div>
            @foreach ($pengumumans as $i => $item)
            <div class="row">
                <div class="col-12 col-lg-1">
                    <div class="fa fa-bullhorn fa-4x" style="color:white">
                    </div>
                </div>

                <div class="col-12 col-lg-11">
                    <h4 style="color: white">{{ $item->judul_pengumuman }}</h4>
                    <h5 style="color: white">{{ $item->tgl->toFormattedDateString() }}</h5>
                    <p style="color: white">{!!$item->detail_pengumuman!!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <section class="section-padding-100 bg-img bg-overlay" style="background-image: url(indexcss/img/lainnya/siswa.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faith-cool-facts-area">
                        <div class="row">

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-cool-fact text-center mb-100">
                                    <h3><span class="counter">11</span></h3>
                                    <h6>Guru</h6>
                                </div>
                            </div>

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-cool-fact text-center mb-100">
                                    <h3><span class="counter">456</span></h3>
                                    <h6>siswa</h6>
                                </div>
                            </div>

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-cool-fact text-center mb-100">
                                    <h3><span class="counter">7</span></h3>
                                    <div class="line"></div>
                                    <h6>Pegawai</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>
        </div>
    </section>

    <!-- ##### pengumuman Area Start ##### -->


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