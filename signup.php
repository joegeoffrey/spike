<?php
 $db = mysqli_connect("127.0.0.1","root",""); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
?>

<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url("http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
@import url("http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700");
*{margin:0; padding:0}
body{background:#294072; font-family: 'Source Sans Pro', sans-serif}
.form{width:400px; margin:0 auto; background:#1C2B4A; margin-top:150px}
.header{height:44px; background:#17233B}
.header h2{height:44px; line-height:44px; color:#fff; text-align:center}
.login{padding:0 20px}
.login span.un{width:10%; text-align:center; color:#0C6; border-radius:3px 0 0 3px}
.text{background:#12192C; width:90%; border-radius:0 3px 3px 0; border:none; outline:none; color:#999; font-family: 'Source Sans Pro', sans-serif} 
.text,.login span.un{display:inline-block; vertical-align:top; height:40px; line-height:40px; background:#12192C;}

.btn{height:40px; border:none; background:#0C6; width:100%; outline:none; font-family: 'Source Sans Pro', sans-serif; font-size:20px; font-weight:bold; color:#eee; border-bottom:solid 3px #093; border-radius:3px; cursor:pointer}
.btn:hover{
  background-color: #006600;
}
ul li{height:40px; margin:15px 0; list-style:none}
.span{display:table; width:100%; font-size:14px;}
.ch{display:inline-block; width:50%; color:#CCC}
.ch a{color:#CCC; text-decoration:none}
.ch:nth-child(2){text-align:right}
/*bottom*/
.sign{width:90%; padding:0 5%; height:50px; display:table; background:#17233B}
.sign div{display:inline-block; width:50%; line-height:50px; color:#ccc; font-size:14px}
.up{text-align:right}
.up a{display:block; 
  background:#096; 
  text-align:center; 
  height:35px; 
  line-height:35px; width:50%; 
  font-size:16px; text-decoration:none; 
  color:#eee; border-bottom:solid 3px #006633; 
  border-radius:3px; font-weight:bold; 
  margin-left:50%
  transition: all 0.7s ease; 
}
.up:hover{
        transform:scale(1.2);
}
@media(max-width:480px){ .form{width:100%}}
.logo{position: absolute; left: 580px; top: 20px;}
.gender{
  width: 320px; height: 40px; background-color: #12192C; color: #D1D1D5; border: none;
}
.date{
  width: 320px; height: 40px; background-color: #12192C; color: #D1D1D5; border: none;
}
</style>
</head>
<body>
<img class="logo" src="outbox-logo.png" width="auto" height="auto">
<div class="form">
<div class="header"><h2>Sign Up</h2></div>
<div class="login">
<form action="dashboard.php">
<ul>
<li>
<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="User Name"/></li>
<li>
<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="User Password"/></li>
<li>
<span class="un"><i class="fa fa-envelope"></i></span><input type="email" required class="text" placeholder="Email"/></li>
<li><h4>Gender</h4>
<span class="un"><i class="fa fa-square"></i></span><select name="sex" class="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select></li><br>
<li><h4>Date of birth</h4>
<span class="un"><i class="fa fa-birthday-cake"></i></span>
    <input type="date" name="bday" class="date"/>
</li><br>
<li>
<input type="submit" value="SIGN UP" class="btn">
</li>
</ul>
</form>
</div><br/>
</div>
</body>
</html>