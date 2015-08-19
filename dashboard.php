<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#header {
    background-color:#000033;
    color:white;
    text-align:center;
    padding:5px;
}

#header2 {
    background-color:#191947;
    color:white;
    text-align:center;
    padding:5px;
    height: 40px;
}
#nav {
    line-height:30px;
    background-color: #33335C;
    height:999px;
    width:120px;
    float:left;
    padding:5px;
    color: #003366;        
}
#section {
    width: 91%; height: 999px;
    float:left;
    padding:30px;
    background-color: #808099;   
}
#footer {
    background-color:#000033;
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
    height:150px; 
    width:100px; 
    margin:10px 5px 0 20px; 
    padding:120px;
    float: left;
    transition: all 0.9s ease;
        }

.tile:hover{
        transform:scale(1.1);
    }

.amarelo{ 
        background-image: url(student.png);
        background-repeat: no-repeat;
        position: absolute; left: 200px;
        }

.vermelho{ 
        background-image: url(teacher.png);
        position: absolute; left: 550px; top: 500px;
        } 

.azul{ 
background-image: url(kidz.png); 
position: absolute; left: 970px; top: 800px;
            }
.logo{
    position: absolute; left:5px; top:-30px;
}
.titulo{
  color: #003300;
  font-size: 20px;
}
.student{
position: absolute; left:500px;}
.teacher{
  position: absolute;left: 200px; top: 500px;
}
.lessons{
  position: absolute;left:80%; top: 780px;
}
.p1{
  position: absolute; left:500px; top: 250px;
  color: white;
  width: 600px;
}
.p2{
  position: absolute; left: 200px; top: 550px;
  color: white;
  width: 300px;
}
.p3{
  position: absolute; left: 900px; top: 500px;
  color: white;
  width: 300px;
}
.p4{
  position: absolute; left: 200px; top: 800px;
  color: #FFFFFF;
  width: 600px;
}
</style>
</head>
<body>

<div id="header">
<img class="logo" src="outbox-logo.png" alt="OUTBOX LOGO">
<h1 style="">THE HUB</h1>
</div>

<ul id="header2">
  <li><a href="#home">HOME</a></li>
  <li><a href="#news">NEWS</a></li>
  <li><a href="#contact">CONTACTS</a></li>
</ul>

<div id="nav">
  <button type="button" class="btn">MENU</button>
  <button type="button" class="btn">TOPICS</button>
  <button type="button" class="btn">REFERENCE</button>
</div>

<div id="section">
<h3>Welcome! </h3>
  <div class="pagina"> 
    <div class="linha">
      <div class="tile amarelo"></div>
        <h4 class="student">STUDENT</h4>
        <p class="p1">
          An ex-president of this institution, when it was a college with an enrollment of several thousand, was asked how many students the school had. He quipped "Oh, perhaps a dozen." He was making a joke that is as old as the hills. The president of a large corporation used it when he was asked by a reporter (during a strike) how many workers there were in his plant.

          Most of us begin our education with an "egocentric" view, expecting everything to have some relevance to our needs or desires. We even impose such interpretations on things we learn, and avoid learning some things because they don't seem important at the time. Education can broaden that view, encouraging us to set our egos aside and objectively evaluate facts and interpretations. We find out that mere unsupported personal opinions have no value in an academic discussion. We learn to recognize the validity of facts and ideas that we may not like.
        </p>
      <div class="tile vermelho"></div>
      <h4 class="teacher">TEACHER</h4>
      <p class="p2">An ex-president of this institution, when it was a college with an enrollment of several thousand, was asked how many students the school had. He quipped "Oh, perhaps a dozen." He was making a joke that is as old as the hills. The president of a large corporation used it when he was asked by a reporter (during a strike) how many workers there were in his plant.
      </p>

      <p class="p3">Most of us begin our education with an "egocentric" view, expecting everything to have some relevance to our needs or desires. We even impose such interpretations on things we learn, and avoid learning some things because they don't seem important at the time. Education can broaden that view, encouraging us to set our egos aside and objectively evaluate facts and interpretations. We find out that mere unsupported personal opinions have no value in an academic discussion. We learn to recognize the validity of facts and ideas that we may not like.
      </p>
      <div class="tile azul"></div>
      <h4 class="lessons">LESSONS</h4>
      <p class="p4">
        An ex-president of this institution, when it was a college with an enrollment of several thousand, was asked how many students the school had. He quipped "Oh, perhaps a dozen." He was making a joke that is as old as the hills. The president of a large corporation used it when he was asked by a reporter (during a strike) how many workers there were in his plant.

          Most of us begin our education with an "egocentric" view, expecting everything to have some relevance to our needs or desires. We even impose such interpretations on things we learn, and avoid learning some things because they don't seem important at the time. Education can broaden that view, encouraging us to set our egos aside and objectively evaluate facts and interpretations. We find out that mere unsupported personal opinions have no value in an academic discussion. We learn to recognize the validity of facts and ideas that we may not like.
      </p>
    </div>
    </div>
</div>

<div id="footer">
Copyright © outbox.co.ug
</div>

</body>
</html>
