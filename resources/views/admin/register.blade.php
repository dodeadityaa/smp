<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginn/css/util.css">
    <link rel="stylesheet" type="text/css" href="/loginn/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    @if(session('failed'))
    <div class="alert alert-danger" role="alert">
        Nama atau Email Sudah Ada !!
    </div>
    @endif
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/indexcss/img/bg-img/bgbualu.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                {{csrf_field()}}
                <span class="login100-form-title">
                    Register
                </span>
                <div class="wrap-input100 validate-input" data-validate="Nama lengkap belum terpenuhi">
                    <input class="input100" type="name" id="name" name="name" placeholder="Masukan Nama Lengkap">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="email tidak valid harus berisi abc@gmail.com">
                    <input class="input100" type="text" id="email" name="email" placeholder="Masukan Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nomber Telepon lengkap belum terpenuhi">
                    <input class="input100" type="number" id="no_telp" name="no_telp" placeholder="Masukan No. Telepon">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Alamat lengkap belum terpenuhi">
                    <input class="input100" type="text" id="alamat" name="alamat" placeholder="Masukan Alamat">
                    <input class="input100" type="hidden" id="level" name="level" value="guru">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Foto tidak ada">
                    <input class="input100" type="hidden" id="foto" name="foto" placeholder="Masukan Foto" value="orang.png">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="password salah">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="password salah">
                    <input class="input100" type="password" id="password" name="cpassword" placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-30">
                    <a class="txt2" href="/login">
                        Login ?
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>




    <!--===============================================================================================-->
    <script src="/loginn/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/loginn/vendor/bootstrap/js/popper.js"></script>
    <script src="/loginn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/loginn/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/loginn/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="/loginn/js/main.js"></script>

</body>

</html>