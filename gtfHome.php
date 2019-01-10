<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Garbage Collection System</title>
	<link rel="stylesheet" href="css/style2.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<img class="logo" src="img/2.png">Green Task Force</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Login</a></li>
			</ul>	
		</div>
	</nav>	


	<div class="col-sm-8">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
 	<li data-target="#myCarousel" data-slide-to="3"></li> 
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/coast.jpg" alt="Los Angeles">
      <div class="carousel-caption">
      	<h2>Header</h2>
      	<h3>Lorem ipsum lorem ipsum lorem ipsum</h3>			
	  </div>    
    </div>

    <div class="item">
      <img src="img/grnPath.jpg" alt="Chicago">
		<div class="carousel-caption">
      	<h2>Header</h2>
      	<h3>Lorem ipsum lorem ipsum lorem ipsum</h3>			
	  </div>    
    </div>
    <div class="item">
      <img src="img/garbage.jpg" alt="Los Angeles">
    	<div class="carousel-caption">
      	<h2>Header</h2>
      	<h3>Lorem ipsum lorem ipsum lorem ipsum</h3>			
	  </div>
    </div>
    <div class="item">
      <img src="img/signup2.jpg" alt="New York">
      <div class="carousel-caption">
	  <button type="button" class="btn btn-success" onclick="window.location.href='register.php'">Sign up</button>			
	  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>

	</div>
	<div class="col-sm-4">
			<div class="Content">
			<article class="topcontent">
				<header>
					<h2><a href="#" title="First article">Article #1</a></h2>
				</header>
				<footer>
					<p class="post-info">This post is written by @author admin</p>
				</footer>
				<content>
					<p>Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem</p> 
					<p>ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum</p>
				</content>				
			</article>
			<article class="secondcontent">
			<header>
				<h2><a href="#" title="Second article">Article #2</a></h2>
			</header>
			<footer>
				<p class="post-info">This post is written by @author admin</p>
			</footer>
			<content>
				<p>Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem</p> 
					<p>ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum</p>
			</content>
			</article>
			<article class="secondcontent">
			<header>
				<h2><a href="#" title="Second article">Article #2</a></h2>
			</header>
			<footer>
				<p class="post-info">This post is written by @author admin</p>
			</footer>
			<content>
				<p>Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem</p> 
					<p>ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum</p>
			</content>
			</article>
			<article class="secondcontent">
			<header>
				<h2><a href="#" title="Second article">Article #2</a></h2>
			</header>
			<footer>
				<p class="post-info">This post is written by @author admin</p>
			</footer>
			<content>
				<p>Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem</p> 
					<p>ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum</p>
			</content>
			</article>
			<article class="secondcontent">
			<header>
				<h2><a href="#" title="Second article">Article #2</a></h2>
			</header>
			<footer>
				<p class="post-info">This post is written by @author admin</p>
			</footer>
			<content>
				<p>Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem</p> 
					<p>ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsumLorem Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem iosum lorem ipsum lorem ipsum lorem ipsum</p>
			</content>
			</article>
	    </div>
	</div>	
</body>
</html>
