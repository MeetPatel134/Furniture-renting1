<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <style>
    .popup-box{
        background-color:#DDD0C8;
    }
    .password{
        display: inline-block;
        position: relative;
        
    }
    .password input{
        padding: 10px 5px;
        outline: none;
        border: 5;
        color: black;

    }
    .pass-icon{
        position: absolute;
        top: 22px;
        right: 22px;
        width: 24px;
        cursor: pointer;
    }
    

  </style>
</head>
	 
  <form method="post" action="login.php">
  	
<body>
    <div class="popup-screen">
        <div class="popup-box">
			
            <h2>Login Form</h2>
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input style="padding: 8px; width: 250px;" type="text" name="username" placeholder="Username" >
            </div>
             <div class="input-group">
            <div class="password">
                <label>Password</label>
                <input  style="padding: 8px; width: 250px;" type="password" name="password" id="password" placeholder="Password">
                <img src="pass-hide.png" onclick="pass()"
                class="pass-icon" id="pass-icon">
            </div></div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p style="margin-top: 50px;">
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
 
        </div>
    </div>
    <div class="image">
        <img src="Screenshot (24).png" alt="">
    </div>
   <script>
        var a;
        function pass()
        {
            if(a==1)
            {
                document.getElementById('password').type='password';
                document.getElementById('pass-icon').src='pass-hide.png';
                a=0;
            }
            else{
                 document.getElementById('password').type='text';
                document.getElementById('pass-icon').src='pass-show.png';
                a=1;
            }
        }
    </script>
  </form>
</body>
</html>