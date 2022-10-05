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
                    <div class="faith-blog-posts">
                        <div class="row">
                            <!-- Single Blog Area -->
                            @foreach ($blogs as $i => $item)
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-area mb-100">
                                    <div class="blog-thumbnail">
                                        <img src="{{ URL::to('/') }}/fotoblog/{{ $item->foto_blog}}" class="img-thumbnail" width="75" />
                                        <div class="post-date">
                                            <a href="#">{{ $item->tgl->toFormattedDateString() }}</a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <a href="/blog/detailblog/{{ $item->id }}" class="blog-title">{{ $item->judul }}</a>
                                        <p>{!! substr( $item->blog , 0, 100) !!}...</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pagination Area -->
                    <div class="pagination-area">
                        <nav aria-label="Page navigation">
                            @include('bagian.pagination', ['paginator' => $blogs->appends(Request::except('page'))])
                        </nav>
                    </div>
                </div>
                @include('bagian.categori')
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