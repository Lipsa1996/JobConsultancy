<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SinhasjobConsultancy &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class="admin_login">
  <form method="POST" action="\admin_submit">
     <input type="text" name="username" id="username" placeholder="Enter username"><br><br>
     <input type="password" name="password" id="password" placeholder="Enter password"><br><br>
     <input type="hidden" name="_token" value="{{csrf_token() }}">
     <input type="submit" value="Login" id="submit"><br><br>
     <a href="forgot-password">Forgot Password?</a>
  </form>
  </div>
  @if(session()->has('message'))
    <div style="width:500px; text-align:center; margin-left:auto;margin-right:auto;color:red">
        {{ session()->get('message') }}
    </div>
@endif
</body>
  <style>
  body{
    font-family:Arial;
  }
  ::placeholder{color:#969595; padding:20px;font-size:17px;}	 
  .admin_login{
      margin-left:600px;
      width:400px;
      background-color:#26baee;
      text-align:center;
      height:auto;
	  margin:100px auto;
	  padding:30px;
      box-shadow:0px 0px 8px black;
  }
  input[type=text]{height:40px;border:2px solid red;
         width:300px;border-radius:6px;
		 }
	input[type=password]{height:40px;border:2px solid red;
         width:300px;border-radius:6px;
		 }	 
		input[type=submit] {height:40px;border:none;border-radius:6px;
		 background-color:red;width:300px;
		 color:white;
		 }	

  </style>
</html>