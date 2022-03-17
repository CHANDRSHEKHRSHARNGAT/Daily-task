<!DOCTYPE html>
<html lang="en">

<head>

<title>Apna Shop</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Apna Shop">


	<!-- font Awesome Cdn -->
	<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />

<style>
@charset "utf-8";


/* 1. Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
*{

margin:0;
padding:0;

}
body{

font-family: 'poppins',sans-sarif;
font-size: 14px;
line-height: 23px;
font-weight: 400;
background: white;
color: #1e1e27;
}
div{

display: block;
position: relative;
box-sizing: border-box;

}
ul{


list-style: none;
margin-bottom: -50px;
}
p{

font-family: 'poppins' sans-serif;
font-size: 14px;
line-height: 1.7;
font-weight: 500;
color: #989898;
-webkit-font-smoothing:antialiased;
text-shadow:rgba(0,0,0,.01)0 0 1px;
}

p a{

display: inline;
position: relative;
color: inherit;
border-bottom: solid 2px #fde0fd;
transition: all 200ms ease;
}
a, a:hover,a:active,a:link{


text-decoration: none;
-web-font-smoothing:antialiased;
text-shadow: rgb(0,0,0,.01) 0 0  1px;
}

p a:active{

position: relative;
color: rgb(0, 255, 42);
}
p a:hover{

color: rgb(0, 255, 21);
background: white;

}
p a:hover::after{
opacity: 0.2;

}
::selection{

background: white;
color: rgb(0, 255, 170);

}


p ::selection{

background: white;
}
h1{font-size: 72px;}
h2{font-size: 40px;}
h3{font-size: 28px;}
h4{font-size: 24px;}
h5{font-size: 16px;}
h6{font-size: 14px;}
h1,h2,h3,h4,h5,h6{

color: #282828;
-web-font-smoothing:antialiased;
text-shadow: rgb(0,0,0,.01)0 0 1px,;
}

.trans_300{

transition: all 300ms ease;
}
::input-placeholder{

font-size: 16px !important;
font-weight: 500;
color: #777777;

}

.clearfix::before,   .clearfix::after{

content: "";
}
.clearfix::after{
clear: both;
}
.clearfix{
zoom: 1;
}

.super_container{
width: 100%;
overflow: hidden;

}

.fill-hight{

height: 100;
}

/* 3 Home */
/* 3.1 main navigation  */

.main_nav_container{

	background: #FEF0A0;
width: 100%;

box-shadow: 0 0 16px rgba(0,0,0, .015);
}

.navbar{
width: auto;
background: #FEF0A0;
height: 100px;
float: right;
padding-left: 0px;
padding-right: 0px;

}
.navbar_menu li{

display: inline-block;

}
.navbar_menu li a{

display: block;
color: 	#800000;
font-size: 15px;
font:bold;
font-weight: 500;
text-transform: uppercase;
padding: 20px;
transition:color 0.3s ease;

}
.navbar_menu li a:hover{

color: white;

}
.navbar_user{

margin-left: 37px;

}
.navbar_user li{
display: inline-block;
text-align: center;

}
.navbar_user li a{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
position: relative;
width: 40px;
height: 40px;
color: #1e1e27;
transition: color 0.3s ease;

}
.navbar_user li a:hover{

color: #b5aeb5;

}

.checkout{
color: #b5aeb5;
}
.checkout a{

background: #eceff6;
border-radius: 50%;
}
.checkout_items{

display: flex;
flex-direction: coloumn;
justify-content: center;
align-items: center;
position: absolute;
top: -9px;
left: 22px;
width: 20px;
height: 20px;
border-radius: 50%;
background: red;
font-size: 12px;
color: white;


}

/* 3.2 logo conatainer  */

.logo_container{

position: absolute;
top: 70%;
transform: translateY(-50%);
left: 15px;

}
.logo_container a{

font-size: 25px;
color: #f022a8;
font-weight: 700;
text-transform: uppercase;
}

/*-----new arrivals-------*/

.new_arrivals{

width: 100%;
}
.new_arrivals_title{

margin-top: 54px;

}


.favorite{

position: absolute;
top: 15px;
right: 15px;
color: #b9b4b9;
width: 17px;
height: 17px;
visibility: hidden;
opacity: 0;
}
.favorite_left{

left: 15px;
}
.favorite.active{
visibility:visible;
opacity: 1;

}
.product-item:hover .favorite{

visibility: visible;
opacity: 1;
}

.favorite.active::after{

font-family: 'FontAwesome';
content: '\f004';
color: red;
}
.favorite::after{

font-family: 'FontAwesome';
content: '\f004';
}
.favorite:hover::after{

color: red;
}

.card-img-top {
    width: 100%;
    height: 15vw;
	
}
/*
.product-grid-item .row my-4 .hover-img img {
    width: auto !important;
    height: 200px; /* Height of grid or slider prduct image 
	display:block;
	margin:auto;
}
.product-image-inner{
	height:500px; /* Height of single product box 
}

*/










</style>

</head>

<body>

		<!-- Header -->

		<header class="header trans_300">

<!---Main Navigation-->

<div class="main_nav_container">
	<div class="container">

	<div class="row">
	<div class="col_lg_10 text_right">
		<div class="logo_container">
            <a href="#">apna shop</a>
		</div>
		<nav class="navbar">
         <ul class="navbar_menu">
			 <li><a href="http://127.0.0.1:8000/post">Home</a></li>
			 <li><a href="http://127.0.0.1:8000/post?page=3">Shop</a></li>
			 <li><a href="#">Promotion</a></li>
			 <li><a href="#">Pages</a></li>
			 <li><a href="#">Blog</a></li>
			 <li><a href="#">Contact</a></li>

		 </ul>
		 <ul  class="navbar_user">
			 <li><a href="#"><i class="fa fa-search" arial-hidden="true"></i></a></li>
			 <li><a href="http://127.0.0.1:8000/post"><i class="fa fa-user" arial-hidden="true"></i></a></li>
		     <li class="checkout">
				 <a href="#">
					 <i class="fa fa-shopping-cart" arial-hidden="true"></i>
					 <span id="checkout_items" class="checkout_items"> 2 </span>
				  </a>
			   </li>	
			 </ul>
		  </nav>
	    </div>
	   </div>	
	</div>
  </div>
 
<!--apna shop end-->


<div class="container">
<div class="super_container">
    <div class="row my-2">
      <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
        <div>
          <h4 class="text-primary">Big Billion Day Sale</h4>
        </div>
        <div>
          <a href="@yield('link')" class="btn btn-primary rounded-pill">Add New Product</a>
        </div>

      </div>
    </div>
    <hr class="my-2">

    @yield('content')
    <div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>New Arrivals</h2>
				</div>

  </div>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>

</html>