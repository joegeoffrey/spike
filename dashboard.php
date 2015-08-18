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


<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
<style type="text/css">
  body{ 
    color: #fff; 
    padding:20px; 
    }

    .tile:hover{
        transform:scale(1.2);
    }
    
    .tileLargo:hover{
        transform:scale(1.2);
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
    .tileLargo{ 
        width:210px;
        transition: all 0.7s ease; 
 
    }

    .amarelo{ 
        background-color: #000099;
        background-repeat: no-repeat;
        }

    .vermelho{ 
        background:#CD0000; 
        } 

    .azul{ 
            background:#4682B4; 
            } 

    .verde{ 
            background-color: #2E8B57; 
        }

  </style>
    <link rel="stylesheet" href="estilo.css"/> 
    <meta charset="UTF-8"/> 
    <script type="text/javascript" src="<http://code.jquery.com/jquery-1.7.2.min.js>"></script> 
    <script type="text/javascript" src="script.js"></script> 
</head> 
<body>
    <img src="outbox-logo.png" alt="OUTBOX LOGO" width="auto" height="auto">
    <h3 style="color:blue;">Welcome </h3>
    <div class="pagina"> 
        <div class="linha">
           <div class="tile amarelo">
              <span class="titulo">TRAINEE</span><br/></div>
           <div class="tile tileLargo vermelho">
               <span class="titulo">FACILITATOR</span><br/></div>
           <div class="tile azul">
               <span class="titulo">HACKATHON</span><br/>
        </div>
        <div class="tile verde">
               <span class="titulo">ACIA</span><br/>
           </div>
        </div> 
        <div class="linha">
           <div class="tile tileLargo amarelo">
               <span class="titulo">I HAVE A PRODUCT</span><br/>
           </div>
           <div class="tile azul">
               <span class="titulo">I HAVE AN IDEA</span><br/>
           </div>
           <div class="tile verde">
               <span class="titulo">INTERNSHIP</span><br/>
           </div>
           <div class="tile vermelho">
               <span class="titulo">SERVICES</span><br/>
           </div>
        </div> 
    </div>
    </body>
    </html>