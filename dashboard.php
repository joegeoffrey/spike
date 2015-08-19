<!DOCTYPE html>
<html>
<head>
<style>
#header {
    background-color:#0066CC;
    color:white;
    text-align:center;
    padding:5px;
}

#header2 {
    background-color:#6699FF;
    color:white;
    text-align:center;
    padding:5px;
    height: 40px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:400px;
    width:100px;
    float:left;
    padding:5px;
    color: #003366;        
}
#section {
    width:350px;
    float:left;
    padding:10px;   
}
#footer {
    background-color:#0066CC;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;    
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    padding: 10px;
}

a {
    display: block;
    width: 60px;
    text-decoration: none;
    color: #FFFFFF;
    text-align: center;
}

.tile{ 
    height:200px; 
    width:100px; 
    margin:0 5px 0 0; 
    padding:2px;
    float: left;
    transition: all 0.7s ease;
        }

.tile:hover{
        transform:scale(1.2);
    }

.amarelo{ 
        background-image: url('outbox2.png');
        background-repeat: no-repeat;
        }

.vermelho{ 
        background:#CD0000; 
        } 

.azul{ 
        background:#4682B4; 
            }
.logo{
    position: absolute; left:5px; top:-15px;
}
</style>
</head>
<body>

<div id="header">
<img class="logo" src="outbox-logo.png" alt="OUTBOX LOGO">
<h1 style="">OUTBOX HUB</h1>
</div>

<ul id="header2">
  <li><a href="#home">HOME</a></li>
  <li><a href="#news">NEWS</a></li>
  <li><a href="#contact">CONTACTS</a></li>
</ul>

<div id="nav">
MENU<br>
TOPICS<br>
LOG OUT<br>
</div>

<div id="section">
<h3>Welcome! </h3>
    <div class="pagina"> 
        <div class="linha">
           <div class="tile amarelo">
              <span class="titulo">STUDENT</span><br/></div>
           <div class="tile vermelho">
               <span class="titulo">TEACHER</span><br/></div>
           <div class="tile azul">
               <span class="titulo">LESSONS</span><br/></div>
        </div>
    </div>
</div>

<div id="footer">
Copyright © outbox.co.ug
</div>

</body>
</html>
