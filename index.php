<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script>  
function validateform(){  
var email=document.myform.email.value;  
var password=document.myform.password.value;  
  
if (email==null || email==""){  
  alert("username can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 
}
</script> 
    
</head>

<style>

.carousel-inner img{
   width:100%;
   height:100%;
   }
.card{
   background-color:rgba(100,180,71,0.4);
   color:white;
   padding:20px;
   margin-top:20px;
   }


.leftcolumn{
   float:left;
   width:55%;
    background-color:black;
   }
.rightcolumn{
   float:right;
   width:45%;
   padding-left:20px;
   background-color:darkgray;
   }
.row:after{
   content:"";
   display:table;
   clear:both;
   }
   video{
   outline-style:outset;
   outline-color:rgba(200,199,71,0.5);
   outline-width:10px;
   }
    i{
        color:white;
    }
   </style> 
    
    
    <body>
 
     
<nav class="navbar navbar-expand-sm bg-info navbar-dark justify-content-center fixed-top">
<a class="navbar-brand" href="vt.html"><img class="rounded-circle" src="vinansh.png" style="width:60px"></a><br><sub><b><u><p style="font-size:30px">OXYGEN</p></b></sub></u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ul class="navbar-nav">
    <li class="nav-item">
	  <a class="nav-link" href="#">Home</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<li class="nav-item">
	  <a class="nav-link" href="#">About Us</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<li class="nav-item">
	  <a class="nav-link" href="#">News</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<li class="nav-item">
	  <a class="nav-link" href="loginpage.php">Login</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<li class="nav-item">
	  <a class="nav-link" href="newform.php">Sign up</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<li class="nav-item">
	  <a class="nav-link" href="#">Contact Us</a>
	</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </ul></nav>




<div id="demo" class="carousel slide" data-ride="carousel">

<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
  <li data-target="#demo" data-slide-to="3"></li>
  <li data-target="#demo" data-slide-to="4"></li>
 
 </ul>
 
 <div class="carousel-inner">
   <div class="carousel-item active">
   <img src="gym.jpg"> 
    <div class="carousel-caption">
    <h1>OXYGEN</h1>
<p style="font-family:cursive"> Feel the energy in you</p></div>	</div>
   <div class="carousel-item">
   <img src="gym1.jpg">
   <div class="carousel-caption">
    <H1>Never Ever Give Up</h1>
     </div>	</div>
    <div class="carousel-item">
   <img src="muscleman.jpg"> 
    <div class="carousel-caption">
     <h1>Batch starting from <br>24 august 2019</h1></div>	</div>
    <div class="carousel-item">
   <img src="gym3.jpg">
    <div class="carousel-caption">
    <h1>Show Your Strength</h1>
      </div>	</div>
	<div class="carousel-item">
	<img src="oxygen.jpg">
	<div class="carousel-caption">
	<h1> Be Tough</h1></div></div>
   </div>
   
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
	   </a>
	   <a class="carousel-control-next" href="#demo" data-slide="next">
       <span class="carousel-control-next-icon"></span>
	   </a>
	   </div><br><br>
	   <div class="row">
	   <div class="leftcolumn">
	   <div class="card">
	   <h2>Glance</h2>
	   <p>Oxygen Gym is the best gym in india and is running since 1990, the best professional trainers are the most attractive feature of our gym. since 1990,we are providing the best training and producing a healthy nation.</p>
	   </div>
	   <div class="card">
	   	   
	   <h2><u>Gallery</u></h2>
	   <p>Here are some more images about our gym.</p>
	   <img src="gallery2.gif" class="rounded-circle" style="width:100%">
	   </div>
	   <div class="container">
	   <div class="card">
	   <h2>Feedbacks</h2>
	   <p>Give your feedback below to improve our services</p>
	   <div class="media border p-2">
	    <img src="avatar.png" class="rounded-circle" style="width:60px">
		<div class="media-body">
		<h4>Varsha Mam<small><i>  posted on july 9,2019</i></small></h4>
		<marquee><p>I feel very energetic and the female trainer helps me to gain proper weight and she is very nice by nature.....normally trainers are so arrogant in nature but she is mindblowing.</p></marquee>
</div>	</div>
<div class="media border p-2">
	    <img src="avatar1.png" class="rounded-circle" style="width:60px">
		<div class="media-body">
		<h4>Prabhas <small><i>  posted on july 8,2019</i></small></h4>
		<marquee><p>I feel very energetic and the male trainer helps me to gain proper weight and he is very nice by nature.....normally trainers are so arrogant in nature but he is excellent.</p></marquee></div>
		</div>
		</div></div></div>
           
		
		<div class="rightcolumn">
	
		<div class="card">
		<video width="100%" controls>
		<source src="trailor.mp4"></video>
		</div>
		

   

<div class="card">
<h2><U>Buy Our Merchandise Here</u></h2>
<img src="merchandise.jpg" style="height:400px">
</div>
</div>
           <marquee><b><span id="txt"></span></b></marquee>
<script>  
var today=new Date();  
document.getElementById('txt').innerHTML=today;  
           </script> </div>
<div class="card">
        </div>

		
		
	   
	   
	   
	   
	   