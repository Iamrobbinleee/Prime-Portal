<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRIME Portal</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #199eb6;">

  <div class="parent clearfix">
    <div class="bg-illustration d-none d-sm-inline-block d-md-none d-lg-block" style="background-color: whitesmoke;">
      {{-- <img src="{{asset('img/fclogo.png')}}" alt="logo" style="height: 70px; width: 210px;" class="d-none d-sm-inline-block"> --}}

      {{-- <div class="burger-btn">
        <span></span>
        <span></span>
        <span></span>
      </div> --}}
        {{-- <p style="margin-top: 100px; color: black; font-size: 14px;">
            Copyright &copy; PRIME Portal 2025
        </p> --}}

    </div>
    
    <div class="login">
      <div>
        {{-- <img src="{{asset('img/ccitrackfoxlogo.png')}}" class="d-block d-sm-none" style="display: block; margin-left: auto; margin-right: auto; padding-top: 30px; margin-bottom: -100px; height: 95px; width: 85px;"> --}}
      </div>
      <div class="container">
        <h1 style="text-align: center; margin-top: 170px; margin-bottom: -60px; color: whitesmoke;">Sign-In</h1>
    
        <div class="login-form">

            <!-- Flash Message -->
            {{-- <div>
                @if (session()->has('xpass'))
                <div  class="p-3 mb-2 bg-danger text-white" >
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span id="close" onclick="this.parentNode.parentNode.remove(); return false;" aria-hidden="true">×</span>
                    </button>
                    {{session()->get('xpass')}}
                </div>
                @endif
            </div> --}}
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email" style="color: black; background-color: #f2f2f2;" :value="old('email')" required autofocus autocomplete="email">
            <input type="password" placeholder="Password" id="password" name="password" style="color: black; background-color: #f2f2f2;" required>

            <div class="col-md-12">
                <div class="row">
                    <!-- Left side -->
                    <div class="col-md-6 d-flex align-items-center">
                        <a href="#" style="text-decoration: none; color: whitesmoke; font-size: 15px;">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Right side -->
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <input id="checkbox" type="checkbox" style="margin-right: 5px; width: auto; height: auto;" />
                        <label for="checkbox" style="color: whitesmoke; font-size: 15px; margin: 0;">
                            Show Password
                        </label>
                    </div>
                </div>
            </div>


            <!-- Centered login -->
            <div style="text-align: center; margin-top: -20px;">
                <button style="letter-spacing: 3px;">{{ __('LOGIN') }}</button>
                <p style="margin-top: 100px; color: whitesmoke; font-size: 14px;">
                    Copyright &copy; PRIME Portal 2025
                </p>
            </div>
        </form>

        </div>
      </div>
      </div>
  </div>

<style type="text/css">
    * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  background-color: #fff;
  font-family: Montserrat;
  overflow-x: hidden;
}

article,
aside,
details,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
a {
  -ms-word-wrap: break-word;
  word-wrap: break-word;
  text-decoration: none;
}

img {
  border: none;
}

*:focus {
  outline: none;
}

.clearfix::after {
  content: "";
  display: table;
  clear: both;
}

.bg-illustration {
  position: relative;
  height: 100vh;
  width: 1194px;
  background: url('img/ccitrackfoxandletter.png') no-repeat center center scroll;
 /* background-size: cover;*/
  float: left;
  -webkit-animation: bgslide 2.3s forwards;
          animation: bgslide 2.3s forwards;
}
.bg-illustration img {
  width: 248px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  height: auto;
  margin: 19px 0 0 25px;
}

/* @-webkit-keyframes bgslide {
  from {
    left: -100%;
    width: 0;
    opacity: 0;
  }
  to {
    left: 0;
    width: 1194px;
    opacity: 1;
  }
}

@keyframes bgslide {
  from {
    left: -100%;
    width: 0;
    opacity: 0;
  }
  to {
    left: 0;
    width: 1194px;
    opacity: 1;
  }
} */


.login {
  max-height: 100vh;
  overflow-Y: auto;
  float: left;
  margin: 0 auto;
  width: calc(100% - 1194px);
}
.login .container {
  width: 505px;
  margin: 0 auto;
  position: relative;
}
.login .container h1 {
  margin-top: 100px;
  font-size: 35px;
  font-weight: bolder;
}
.login .container .login-form {
  margin-top: 112px;
}
.login .container .login-form form {
  display: -ms-grid;
  display: grid;
}
.login .container .login-form form input {
  font-size: 16px;
  font-weight: normal;
  background: rgba(57, 57, 57, 0.07);
  margin: 12.5px 0;
  height: 68px;
  border: none;
  padding: 0 30px;
  border-radius: 10px;
}
.login .container .login-form form button {
  background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
  background: #4e5551;
  border: none;
  margin-top: 124px;
  margin-bottom: 20px;
  width: 100%;
  height: 48px;
  text-transform: uppercase;
  color: white;
  border-radius: 10px;
  position: relative;
  z-index: 2;
  font-weight: bold;
  font-size: 20px;
}
.login .container .login-form form button:hover::after {
  opacity: 1;
}
.login .container .login-form form button::after {
  content: "";
  position: absolute;
  z-index: -1;
  border-radius: 10px;
  opacity: 0;
  top: 0;
  left: 0;
  -webkit-transition: 0.3s ease-in-out;
  -o-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
  right: 0;
  bottom: 0;
  background: -webkit-gradient(linear, left bottom, left top, from(#14992a), to(#c6fac0));
  background: -webkit-linear-gradient(bottom, #14992a 0%, #c6fac0 100%);
  background: -o-linear-gradient(bottom, #14992a 0%, #c6fac0 100%);
  background: linear-gradient(to top, #14992a 0%, #c6fac0 100%);
}
.login .container .remember-form {
  position: relative;
  margin-top: -30px;
}
.login .container .remember-form input[type=checkbox] {
  margin-top: 9px;
}
.login .container .remember-form span {
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  top: 32px;
  color: #3B3B3B;
  margin-left: 15px;
}
.login .container .forget-pass {
  position: absolute;
  right: 0;
  margin-top: 189px;
}
.login .container .forget-pass a {
  font-size: 16px;
  position: relative;
  font-weight: normal;
  color: #918F8F;
}
.login .container .forget-pass a::after {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  border-radius: 100px;
  background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
  bottom: -4px;
  left: 0;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  opacity: 0;
  right: 0;
}
.login .container .forget-pass a:hover::after {
  opacity: 1;
}

@media only screen and (min-width: 1024px) and (max-width: 1680px) {
  .bg-illustration {
    width: 50%;
    -webkit-animation: none;
            animation: none;
  }

  .login {
    width: 50%;
  }
}
/* Display 12", iPad PRO Portrait, iPad landscape */
@media only screen and (max-width: 1024px) {
  body {
    overflow-x: hidden;
  }

  /* @-webkit-keyframes slideIn {
    from {
      left: -100%;
      opacity: 0;
    }
    to {
      left: 0;
      opacity: 1;
    }
  } */

  /* @keyframes slideIn {
    from {
      left: -100%;
      opacity: 0;
    }
    to {
      left: 0;
      opacity: 1;
    }
  } */
  .bg-illustration {
    float: none;
    background: url('img/ccitrackfoxandletter.png') center center;
    background-size: cover;
    /* -webkit-animation: slideIn 0.8s ease-in-out forwards;
            animation: slideIn 0.8s ease-in-out forwards; */
    width: 100%;
    height: 110px;
    text-align: center;
  }
  .bg-illustration img {
    width: 100px;
    height: auto;
    margin: 20px auto !important;
    text-align: center;
  }
  .bg-illustration .burger-btn {
    left: 33px;
    top: 29px;
    display: block;
    position: absolute;
  }
  .bg-illustration .burger-btn span {
    display: block;
    height: 4px;
    margin: 6px;
    background-color: #fff;
  }
  .bg-illustration .burger-btn span:nth-child(1) {
    width: 37px;
  }
  .bg-illustration .burger-btn span:nth-child(2) {
    width: 28px;
  }
  .bg-illustration .burger-btn span:nth-child(3) {
    width: 20px;
  }

  .login {
    float: none;
    margin: 0 auto;
    width: 100%;
  }
  .login .container {
    -webkit-animation: slideIn 0.8s ease-in-out forwards;
            animation: slideIn 0.8s ease-in-out forwards;
    width: 85%;
    float: none;
  }
  .login .container h1 {
    font-size: 25px;
    margin-top: 40px;
  }
  .login .container .login-form {
    margin-top: 90px;
  }
  .login .container .login-form form input {
    height: 45px;
  }
  .login .container .login-form form button[type=submit] {
    height: 45px;
    margin-top: 100px;
  }
  .login .container .login-form .remember-form {
    position: relative;
    margin-top: -14px;
  }
  .login .container .login-form .remember-form span {
    font-size: 16px;
    margin-top: 22px;
    top: inherit;
  }

  .forget-pass {
    position: absolute;
    right: inherit;
    left: 0;
    bottom: -40px;
    margin: 0 !important;
  }
  .forget-pass a {
    font-size: 16px;
    position: relative;
    font-weight: normal;
    color: #918F8F;
  }
  .forget-pass a::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 100%;
    border-radius: 100px;
    background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
    background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
    background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
    bottom: -4px;
    left: 0;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    opacity: 0;
    right: 0;
  }
  .forget-pass a:hover::after {
    opacity: 1;
  }
}

label,input[type="checkbox"]{
    display: inline-block;
    vertical-align: middle;
}
</style>
{{-- scripts --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script></script>

</body>
</html>