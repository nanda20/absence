<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://localhost/absence/bootstrap/format.css" >
<meta charset="UTF-8">

<title>Elegant Login - Designscrazed</title>
<style>
body {
    background: url('http://localhost/absence/bootstrap/img/wl1.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
    margin: 0px;
    padding:0px;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #2980b9;
    margin: 0 auto;
    margin-top: 8%;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://localhost/absence/bootstrap/img/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #3498db;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #2980b9;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #2980b9;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #3498db;
}

#search-container {
  position: relative;
  width: 100%;
  
}

#search-bg {
  /* Absolutely position it, but stretch it to all four corners, then put it just behind #search's z-index */
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  z-index: 99;
 
  background-position: center -70px;
  -webkit-filter: blur(10px);
  filter: url('/media/blur.svg#blur');
  filter: blur(10px);
}

#search {
  
  height:640px;
  position: relative;
  z-index: 100;
  padding: 20px;
  background: rgb(34,34,34); /* for IE */
  background: rgba(34,34,34,0.55);
}

.box1{
  padding: 10px;
  width: 400px;
  height: auto;
  margin-top: 80px;
  margin-left: 450px;
    -webkit-animation: play 1s ease-out;
            animation: play 1s ease-out;
} 

@-webkit-keyframes play {
   from { margin-top: 0px;
      opacity: 0.1;
      
    }
     to { margin-top: 80px;
      opacity:1}
}

@-moz-keyframes play {
 from { margin-top: 0px;
      opacity: 0.1
    }
     to { margin-top: 80px;
      opacity:1}
}
 
@keyframes play {
   from { margin-top: 0px;
      opacity: 0.1
    }
     to { margin-top: 80px;
      opacity:1}
}

</style>
</head>

<body>



    <div id="search-bg"></div>
    <div id="search">
      <div class="box1">
    <div class="login-block">
    <h1>LOGIN</h1>
    <form action="" method="POST">
    <input type="text" value="" placeholder="Username" id="username" name="username" />
    <input type="password" value="" placeholder="Password" id="password" name="password"/>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button>Submit</button>
	</form>
</div>
    </div>
  </div>

</body>
