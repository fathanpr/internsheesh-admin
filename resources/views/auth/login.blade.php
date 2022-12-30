<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>InternSheesh | Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="" method="POST">
        @csrf
		{{-- <div class="avatar mt-2"><i class="material-icons">&#xE7FF;</i></div> --}}
        <img src="{{ asset('img/logo-primary.png') }}" alt="">
    	{{-- <h4 class="modal-title">Sign In To Your Account</h4> --}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        {{-- <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div>  --}}
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="SIGN IN">              
        <div class="mb-3">
          </div>			
    </form>
</div>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
</body>
</html>       
  
  
  
  
  