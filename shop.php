<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
$link= mysqli_connect('localhost','root','','categories');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>shopify</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@600&family=Montserrat:ital,wght@0,400;1,300;1,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/85f09f485e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="shop.css">
 <script type="text/javascript">
 function fun(){
   alert("wants to know your location");
 }
 function ajax()
	{
		var a=document.frm.search.value;
    
		var strURL = "ajax.php"+"?val="+a;    
    
		var xmlHttpObj = new XMLHttpRequest();
            
	        if(xmlHttpObj)
	        {
	                xmlHttpObj.onreadystatechange = function()
	                {
	                    if(xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
	                    {
	                        document.getElementById('result').innerHTML = xmlHttpObj.responseText;
	                    }
	                }
	                
	                xmlHttpObj.open("GET",strURL,true);
	                xmlHttpObj.send();
	        }

	}
 </script>
  </head>
  <body>
    
    <div class="content">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
          <a class="navbar-brand" href="shop.html"><img src="SS.png" alt="" width="200px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form name="frm" action="#" method="post">
			<input type="text" name="search" list="mylistid" onkeyup="ajax()" >

			<span id="result"></span>

			
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >GO!!</button>

		</form>	        
        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#category">Categories</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
            
              </li>
          </ul>
        </nav>
     <h2>WELCOME <?php echo $_SESSION['name']; ?></h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="gro1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="groo.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="grof.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="ban">
      <div class="box">
        <img src="bag.jpg" width="680px" alt="">
      </div>
      <div class="box">
       <h1 align="center"> Super savings!!! </h1><br> <h3 align="center">delivered instantly</h3> <br> <h3 align="center"> <strong>60%</strong>  off on all products.</h3>
       </div>
        <div class="box">
          <img src="prod.jpg" height="450px" alt="">
        </div>
    </div>
    
    <a name="category"></a>
    <h1 align="center">SHOP BY CATEGORY</h1>
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <div class="card bg-danger mt-3">
          <img class="card-img-top" src="pul.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">DAL ATTA AND MORE</h5>
            <a href="c_01.php?id=c01&c=DAL ATTA AND MORE" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card bg-danger mt-3">
          <img class="card-img-top" src="bathi.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">BATH AND BODY</h5>
            <a href="c_01.php?id=c02&c=BATH AND BODY" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card bg-danger mt-3">
          <img class="card-img-top" src="food.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">FOOD & SNACKS</h5>
            <a href="c_01.php?id=c03&c=FOOD AND SNACKS" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card bg-danger mt-3" >
          <img class="card-img-top" src="clean.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">HOUSEOLD ITEMS</h5>
            <a href="c_01.php?id=c04&c=HOUSEOLD ITEMS" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card bg-danger mt-3" >
          <img class="card-img-top" src="fruits.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">FRUITS & VEGETABLES</h5>
            <a href="c_01.php?id=c05&c=FRUITS AND VEGETABLES" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card bg-danger mt-3" >
          <img class="card-img-top" src="drink.jpg" alt="Card image cap" height="500px">
          <div class="card-body">
            <h5 class="card-title">BEVERAGES</h5>
            <a href="c_01.php?id=c06&c=BEVERAGES" class="btn btn-warning btn-block">View Products</a>
          </div>
        </div>
      </div>
      </div>
    </div>
    
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">in news</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
         
          <div class="footer-col">
            <h4>get social with us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              
            </div>
          </div>
        </div>
      </div>
   </footer>
      
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>