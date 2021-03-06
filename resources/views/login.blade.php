<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Compact Login Animation</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="materialContainer">


   <div class="box">

      <div class="title">LOGIN</div>
      <form class="" action="/handlelogin" method="get">
        <div class="input">
           <label for="name">Email</label>
           <input type="text" name="email" id="name">
           <span class="spin"></span>
        </div>

        <div class="input">
           <label for="pass">Password</label>
           <input type="password" name="password" id="pass">
           <span class="spin"></span>


        </div>

        <div class="button login">
           <button><span>GO</span> <i class="fa fa-check"></i></button>
        </div>
        @if (count($errors)>0)
          <div class="col-md-12">
            @foreach ($errors->all() as $error)
              <li class="error">{{$error}}</li>
            @endforeach
          </div>
        @endif

        {{-- <a href="" class="pass-forgot">Forgot your password?</a> --}}
      </form>


   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>
      <form class="" action="/users/" method="post">
        {{csrf_field()}}
        <div class="input">
           <label for="regname">Email</label>
           <input type="text" name="email" id="regname">
           <span class="spin"></span>
        </div>

        <div class="input">
           <label for="regpass">Password</label>
           <input type="password" name="password" id="regpass">
           <span class="spin"></span>
        </div>

        <div class="input">
           <label for="reregpass">Repeat Password</label>
           <input type="password" name="repassword" id="reregpass">
           <span class="spin"></span>
        </div>

        <div class="button">
           <button><span>Register</span></button>
        </div>
      </form>



   </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
