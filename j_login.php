<!DOCTYPE html>
<html>
<head>
	<title>Outbox E-learning</title>
	<style type="text/css">
      #tile{
      	position:absolute; left:400px;
      }

      fieldset{
      	position: absolute; top: 350px; left: 400px;
      	border-radius: 30px;
      	height: 200px;

      }
      label{
        display: inline-block;
        float: left;
        clear: left;
        width: 250px;
        text-align: right;
      }
      input {
        display: inline-block;
        float: left;
      }
	</style>
</head>
<body>

<img id="tile" src="outbox-logo.png" alt="OUTBOX LOGO" height="300px">
<form method="post" action="dasboard.php">
  <fieldset><h4 style="color: #33CC33;">SIGN IN</h4>
    <label for="username">Username:</label><input type="text" name="firstname" id="username" /><br><br>
    <label for="password">Password:</label><input type="text" name="surname" id="password" /></br><br>
    <input style="position: absolute;top:150px; left: 200px;" type="submit" value="Sign In"/> 
  </fieldset>
  </form>
</body>
</html>