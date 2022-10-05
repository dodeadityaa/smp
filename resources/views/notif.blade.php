<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Duta Bina Bhuna Foundation</title>

    <!-- Favicon -->
    @include('bagian.icon')

    <!-- Stylesheet -->
    @include('bagian.css')

</head>

<body>
    <!-- ##### Search Wrapper Start ##### -->
    <div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url(indexcss/img/bg-img/bg-2.jpg);">
        <div class="close--icon">
            <i class="fa fa-times"></i>
        </div>
        <!-- Logo -->
        <a href="index.html" class="search-logo"><img src="/indexcss/img/core-img/logo2.png" alt=""></a>
        <!-- Search Form -->
        <div class="search-form">
            <form action="#" method="get">
                <input type="search" name="search" id="search" placeholder="Enter Your Keywords">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <!-- Copwrite Text -->
        <div class="copywrite-text">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> Duta Bina Bhuana Foundation</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
    <!-- ##### Search Wrapper End ##### -->

    <!-- ##### Loading ##### -->
    @include('bagian.loading')

    <!-- ##### Header Area Start ##### -->
    @include('bagian.menu')
    <!-- ##### Header Area End ##### -->
    <!-- ##### About Area Start ##### -->
    <section class="faith-about-area section-padding-100-0">
        <!-- ##### Education Start ##### -->
        <div class="faith-blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center mx-auto">
                            <h3>Verifikasi Email</h3>
                            <p>Silahkkan Verifikasi Email anda untuk bisa login dalam dashbord DBJ School</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Education End ##### -->
    </section>

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