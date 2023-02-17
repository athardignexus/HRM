<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/vendor.css"> --}}


<style>
    body{
        padding:0px;
        background-color: #101930;
    }
</style>
  <title>Login</title>
</head>

<body>
  <section>

    <div class="container-fluid">
      <div class="row eq-height-row">
        <div class="col-md-5 col-sm-5 hidden-xs left-col eq-height-col">
          <div class="left-col-content login-header">
            <div style="margin-top: 50%;">
              <a href="/">
                Ultimate POS

              </a>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12  right-col eq-height-col">
          <div class="row">
            {{-- <div class="col-md-3 col-xs-4" style="text-align: left;">
              <select class="form-select input-sm" aria-label="Default select example" id="change_lang" style="margin: 10px;">
                <option selected>English</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div> --}}
            <div class="col-md-9 col-xs-8 " style="text-align: right;padding-top: 30px;">
              <!-- Register Url -->
              <a href="https://pos.ultimatefosters.com/business/register" class="btn bg-maroon btn-flat"><b>Not yet
                  registered?</b> Register Now</a>
              <!-- pricing url -->
            </div>

            <div class="login-form col-md-12 col-xs-12 right-col-content " style="padding-top: 100px">
              <p class="form-header text-white">Login</p>
              <form method="POST" action="{{ route('loginaction') }}" id="login-form">
                @csrf
                  <div class="form-group has-feedback ">
                  <input id="username" type="text" class="form-control" name="username" value="admin" required=""
                    autofocus="" placeholder="Username">
                  <span class="form-control-feedback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#525f7f" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                  </span>
                </div>
                <div class="form-group has-feedback ">
                  <input id="password" type="password" class="form-control" name="password" value="123456" required=""
                    placeholder="Password">
                  <span class=" form-control-feedback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#525f7f" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                  </span>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember_me"  id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Remerber me
                    </label>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-flat btn-login">Login</button>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>


</body>

</html>
