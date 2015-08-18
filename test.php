<?php
 $db = mysqli_connect("127.0.0.1","root",""); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }

 $db_select = mysql_select_db("spike",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
?>
<html>
 <head>
 <title>Step 1</title>
 </head>
 <body>
 <p> Hey what's up ? </p>
</body>
</html>
 