<?php
session_start();
error_reporting(0);required
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photograpy Website</title>
    <link rel="icon" href="img/icon.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
		body{
            width:100%;
        }

			.container1{
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100vh;
				animation: animate 16s ease-in-out infinite;
				background-size: cover;
			}

			.outer{
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100vh;
				background: rgba(0,0,0,0.5)
			}

			.details{
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				text-align: center;
			}

			.details h1{
				font-size: 4em;
				color: #fff;
			}

			.details h2{
				text-transform: capitalize;
				color: #fff;
			}

			.details h2 span:nth-child(1){
				color: red;
			}

			.details h2 span:nth-child(2){
				color: yellow;
			}


			@keyframes animate{
				0%,100%{
					background-image: url(a.jpg);
				}
				25%{
					background-image: url(b.jpg);
				}
				50%{
					background-image: url(c.jpg);
				}
				75%{
					background-image: url(d.jpg);
				}
			}

            .s{
            color: darkblue;
        }
   
         h5{
             color:rgb(255, 0, 0);
             font-size: 60px;
             font-weight: 600;
             text-transform: uppercase;
    
                letter-spacing: 5px;
                   word-spacing: 3px;
             
         }

         .t{
             margin-bottom:10px;
             color:darkblue
            
         }
      


		</style>
</head>
<body>
    <!--header-->
    <header class="header">
        <div class="container">
            <div class="row justify-content-bw  align-items-center">
                <div class="brand-name">
                    <a href="index.html"></a>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#albums">Albums</a></li>
                        
                        <li><a href="u.php">Contact Us</a></li>
                       
                        <li><a href="adminform.html"><button class="button"> Admin </button></a></li>
        
            
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<!--Home-->
<section class="home-section" id="home">
        <div class="container">
    <div class="row  align-items-center">
                <div class="home-content">
                <div class="container1">
			<div class="outer">
				<div class="details">
					<h1>PICXELLECENC</h1>
					
				</div>
			</div>
		</div>
	</div>
    </div>
</div>
        
    </section>

    
    <!--SERVICE SLIDER-->

    <section class="service-section" id="service">
        <div class="container">
            <div class="row">
                <div class="section-title">
               
                </div>
            </div>

            <center>    <h2 class="t">SERVICE</h2>  </center>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/service/6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 >CANDID PHOTOGRAPHY</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/service/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>WEDDING PHOTOGRAPHY</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/service/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>3D PHOTOGRAPHY</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/service/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ID CARDS</h5>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/service/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PORTRAIT PHOTOGRAPHY</h5>
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



      </div>
        </div>
    </section>





    <!--album section-->
   
           
               
        <section class="service-section" id="albums">
        <div class="container">
            <div class="row">
                <div class="section-title">
                   
                </div>
            </div> 

            <center>         <h2 class="t" >ALBUMS</h2> </center>
            <div class="row">
                <!--album item start-->
                <div class="service-item">
                <a href="display.php">
                    <div class="service-item-inner">
                        <img src="an.jpg" alt="service"> 
                        <div class="overlay">
                            <h4>Animals</h4>
                        </div>
                    </div>
                    </a>
                </div>
                
                
                <!--album item end-->
                
                <!-- album item start-->
                
                <div class="service-item">
                <a href="display1.php">
                    <div class="service-item-inner">
                    <img src="n.jpg"  alt="service"> 
                        <div class="overlay">
                            <h4>nature</h4>
                        </div>
                    </div>
                    </a>
                </div>
                
                <!--album item end-->
                <!--album item start-->
                <div class="service-item">
                    <a href="display2.php">
                    <div class="service-item-inner">
                   <img src="w.jpg" alt="service">
                     <div class="overlay">
                            <h4>Wedding</h4>
                        </div>
                    </div>
                    </a>
                </div>
                
                
                <!--album item end-->
    
          

    </body>
</html>