<html>
<title> H&F </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 3px 5px;
    overflow: hidden;
    background-color: #333;
  text-decoration: none;
  }

li {
    float: left;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
  text-decoration: none;
    color: white;

}

#container{
position: relative;
text-decoration: none;

}
#container a{
text-decoration: none;

}
.center {
    position: absolute;
    top: 13%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 60px;
    color: black;
}
.center1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;

}
.center2 {
    position: absolute;
    top: 168%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;

text-decoration: none;

}
  
.button {

  display: inline-block;
  border-radius: 4px;
  background-color: Transparent;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border: 1px solid black;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.logo-small {
    color: #f4511e;
    font-size: 70px;
}
.bg-grey1{
background-color: #F5EBEB;
}

.logo {
    color: #f4511e;
    font-size: 200px;
}
   .containerr{
      padding: 50px 80px;
        background-image: url("1.jpg");
    background-color: white;
        background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 50%;
      height: 40%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
    .container-fluid {
      padding: 30px 70px;         
    background-image: url("p1.jpg");
       background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    

  }
  .containerr1-fluid {
      padding: 30px 50px;
          background-image: url("c2.jpg");
              background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
    .container-fluid1{
      padding: 30px 70px;
	  	        background-image: url("ll.jpg");

    animation: mymove 2s infinite;

	  color: blue;
	  font-style: italic;
	  background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	  

  }
  @keyframes mymove {
    from {color: darkblue;}
    to {color: red;}
}
  .containerr1-fluid {
      padding: 30px 50px;
	        background-image: url("c2.jpg");
				      background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	  
  }
  .contact{
	  font-size: 25px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }

   footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
</style>
</head>
<body>
<div id="home">
<ul>
  <li><a href="#home" ><span class="glyphicon glyphicon-home"></span>&nbsp;HEALTH & FITNESS</a></li>
  <li><a href="#container" >Home</a></li>
  <li><a href="#ins" >Instructors</a></li>
  <li><a href="#con" >Contact</a></li>
  <li style="float:right"><a href="index.php" data-toggle="collapse"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
</ul>
</div>
<div id="container">
  <img src="2.jpg" alt="" width="100%" height="100%" data-toggle="collapse">
  <div class="center">&nbsp;&nbsp;Balanced mind in a<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;balanced body
  <div class="center1"><br><br><br><br><br><br><br>&nbsp;&nbsp;POWERHOUSE FITNESS</div>
  <div class="center2"><form action="index.php" method="POST"><button class="button" style="vertical-align:middle" type="submit" name="sign_up"><span>Sign up</span></button></form></div>
</div>

<?php
  if(isset($_POST['sign_up'])){
    header("location: index.php");
  }
  ?>
<!-- Container (Instructors Section) -->

<div id="ins">
<div class="containerr text-center">
<h1>INSTRUCTORS</h1><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="#demo" data-toggle="collapse">
        <img src="bb.jpg" class="img-circle person" alt="Random Name" width="55" height="45">
      </a>
      <div id="demo" class="collapse">
        <p><b>Anne D'souza</b></p>
       <p>Dietician</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo2" data-toggle="collapse">
        <img src="cc.jpg" class="img-circle person" alt="Random Name" width="55" height="45">
      </a>
      <div id="demo2" class="collapse">
        <p><b>Ruthvik Shah</b></p>
        <p>Personal Trainer</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo3" data-toggle="collapse">
        <img src="aa.jpg" class="img-circle person" alt="Random Name" width="100%" height="55">
      </a>
      <div id="demo3" class="collapse">
        <p><b>Ananya R</b></p>
        <p>Dietician</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div></div>

<!-- Container (Services Section) -->

<div class="container-fluid1 text-center">
<h2> “A journey of a thousand miles 
begins with a single step” </h2><br>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>We offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
    <a href="index (1).html"><h4>FOOD</h4></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
    <a href="spo.html"><h4>EXERCISE</h4></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
    <a href="mud.html"><h4>MUDRAS</h4></a>
    </div>
  </div>
    </div>
  </div>



<!-- Container (Contact Section) -->
<div class="containerr1-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2><br><br>
  <div class="contact">
    <center>  <p><span class="glyphicon glyphicon-map-marker"></span> India&nbsp;&nbsp;|&nbsp;&nbsp;
      <span class="glyphicon glyphicon-phone"></span> +91 9888844411&nbsp;&nbsp;|&nbsp;&nbsp;
      <span class="glyphicon glyphicon-envelope"></span> thehealthcare@gmail.com</p>
    </div>
 </div>

<!-- Footer -->
<div id="con">
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy;&nbsp;Health & Fitness Website Made By 115a1014,115a1015,115a1016</a></p> 
</footer>


<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>
</div>
<script>

</body>
</html>
