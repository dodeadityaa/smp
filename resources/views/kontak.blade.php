<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contact</title>

    <!-- Favicon -->
    @include('bagian.icon')

    <!-- Stylesheet -->
    @include('bagian.css')

</head>

<body>
    <!-- ##### Search Wrapper Start ##### -->
    <div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url(/indexcss/img/bg-img/bg-2.jpg);">
        <div class="close--icon">
            <i class="fa fa-times"></i>
        </div>
    </div>
    <!-- ##### Search Wrapper End ##### -->

    <!-- ##### Preloader ##### -->
    @include('bagian.loading')

    <!-- ##### Header Area Start ##### -->
    @include('bagian.menu')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-info-area">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-6">
                                <div class="contact-information">
                                    <h5>Kontak Kami</h5>
                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-10">
                                        <p>Alamat:</p>
                                        <span><a href="https://goo.gl/maps/ia67f7QyTzad8YdM8" class="fa fa-map-pin"> &nbsp;Jl. By Pass I Gusti Ngurah Rai, Kuta Selatan, Benoa, Badung, Kabupaten Badung, Bali 80361 </a></span>
                                    </div>

                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-10">
                                        <p>Nomber Telepon:</p>
                                        <span><a href="tel://62361773886" class="fa fa-phone"> &nbsp;(0361) 773886</a></span>
                                    </div>

                                    <!-- Single Contact Area -->
                                    <div class="single-contact-area mb-10">
                                        <p>Email:</p>
                                        <span> <a class="fa fa-envelope-o" href="mailto:smpdwijendrabualu@gmail.com?"> &nbsp;smpdwijendrabualu@gmail.com</a></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-6">
                                <div class="contact-form-area">
                                    <h5>Tinggalkan Pesan</h5>
                                    @if(session('message'))
                                    <div class="alert alert-success" role="alert">
                                        Email Send
                                    </div>
                                    @endif
                                    <form action="#" method="post">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Pesan"></textarea>
                                        @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <button class="btn faith-btn" type="submit">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <section class="faith-about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

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