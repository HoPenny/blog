

<!DOCTYPE html>
<html lang="en" >
<head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{asset('grid_layout/style.css')}}">
</head>

<body>
  <div class="wrapper">

  <header >@yield('header')</header>
  </div>
  <nav >
       <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:800' >
       <link rel="stylesheet"  href="{{asset('login/style.css')}} ">
      <div class="login-wrap" style="width: 272px ">
        <div class="login-html" >
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" >Sign In</label>
          <input id="tab-2" type="radio" name="tab " class="sign-up">
          <label for="tab-2" class="tab" >Sign Up</label>
          <div class="login-form">
            <div class="sign-in-htm" >
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Keep me Signed in</label>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign In">
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
              </div>
            </div>
            <div class="sign-up-htm">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password">
              </div>
              <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass" type="password" class="input" data-type="password">
              </div>
              <div class="group">
                <label for="pass" class="label">Email Address</label>
                <input id="pass" type="text" class="input">
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign Up">
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <label for="tab-1">Already Member?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </nav>

    <section style="width: 1300px;">
      <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="{{asset('gallery/style.css')}}">
      <div class="container" >
      <h1 align="center" >Gallery</h1>

      <div class="gallery-wrap" style="width: 1240px;">
        <div class="item item-1"></div>
        <div class="item item-2"></div>
        <div class="item item-3"></div>
        <div class="item item-4"></div>
        <div class="item item-5"></div>
      </div>
    </div>
    </section>

</body>

<!-- partial -->


{{-- </html> --}}
