<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br /> 
<a href="memberlist.php">Memberlist</a><br /> 
<a href="edit_account.php">Edit Account</a><br /> 
<p>NANA here is your dash board</p>
<head>
  <title>Dashboard</title>

<img src="outbox-logo.png" align="center" style="width:145px;height:126px;">


<style type="text/css">
  @font-face { font-family: Century; src: url('GOTHIC.ttf'); 
  } 
  body{ font-family: Century; 
    color: #fff; 
    padding:20px; 
    } 
    
    .pagina{ 
      width:auto; 
      height:auto; 
      }

    .linha{ 
        width:auto; 
        padding:5px; 
        height:auto; 
        display:table; 
      }

    .tile{ 
      height:100px; 
      width:100px; 
      float:left; 
      margin:0 5px 0 0; 
      padding:2px;
      transition: all 0.7s ease; 
      }

    .tile:hover{
      transform:scale(1.2);
    }

    .tileMido{
      width: 200px;
    }

    .tileMido:hover{
      transform:scale(1.2);

    }

    .amarelo{ 
      background-color: #009933 
      } 

    .vermelho{ 
      background:#0099FF; 
      } 

    .azul{ 
      background:#FF0000; 
      } 

    .verde{ 
      background-color: #9900CC; 
      }

    .verticalLine {
        border-left: thick solid #000000;
        float: left;
        padding-left: 10px;       
    } 
#dialogoverlay{
  display: none;
  opacity: .8;
  position: fixed;
  top: 0px;
  left: 0px;
  background: #FFF;
  width: 100%;
  z-index: 10;
}
#dialogbox{
  display: none;
  position: fixed;
  background: green;
  border-radius:7px; 
  width:550px;
  z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
#dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }
  </style>
    <link href="metro.css" rel="stylesheet"/> 
    <meta charset="UTF-8"/> 
    <script type="text/javascript" src="<http://code.jquery.com/jquery-1.7.2.min.js>"></script> 
    <script type="text/javascript" src="script.js"></script>
    </script> 
</head> 
<body> 
    <p style="color: black; font-size: 250%;"><b>Welcome</b></p>
    <pre><h4 style="color: #33CC33;">MY COURSE           OTHER COURSES</h4></pre>  
    <div class="pagina"> 
        <div class="linha">
        <a href="http://127.0.0.1/moodle/course/view.php?id=5"target="_blank">
           <div class="tile tileMido amarelo"><span class="titulo">TRAINING</span><br/></div>
           <div class="verticalLine">
           <div id="dialogoverlay"></div>
           <div id="dialogbox">
           <div>
           <div id="dialogboxhead"></div>
           <div id="dialogboxbody"></div>
           <div id="dialogboxfoot"></div>
           </div>
           </div>
           <button onclick="Alert.render('Feel free to contact your course Facilitator')">
           <div class="tile verde"><span class="titulo">INCUBATION</span><br/></div>
           <div class="tile azul"><span class="titulo">HACKATHON</span><br/></div>
           <div class="tile vermelho"><span class="titulo">APP DEV'T</span><br/></div>
           </button>
        </div>
        </div>
        </div>
    </div>
    </body>
<a href="logout.php">Logout</a>

