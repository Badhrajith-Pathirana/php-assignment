<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Garbage Collection System</title>
	<link rel="stylesheet" href="style2.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#map{
		height:630px;
		width:100%;
	}
</style>
</head>
<body>
	<header class="header">
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<img class="logo" src="logo.jpg">Green Task Force</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="far fa-bell"></i></a></li>
				<li><a href="#"><i class="far fa-user"></i></a></li>
				
		
	</nav>	
	<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="spotDetails">
			<div class="col-sm-2">
				<div class="spots">
				<h3>Karadiyana Garbage dump</h3>
				<p>ranking</p>	
				<p>Description</p>
				<!--Buttons to approve or refuse  -->
				</div>
				<div class="spots">
				<h3>Ratmalana Garbage dump</h3>
				<p>ranking</p>	
				<p>Description</p>
				<!--Buttons to approve or refuse  -->
				</div>
				<div class="spots">
				<h3>Meethotamulla Garbage dump</h3>
				<p>ranking</p>	
				<p>Description</p>
				<!--Buttons to approve or refuse  -->
				</div>
				<div class="spots">
				<h3>Karadiyana Garbage dump</h3>
				<p>ranking</p>	
				<p>Description</p>
				<!--Buttons to approve or refuse  -->
				</div>
			</div>
			<div class="col-sm-2">
				<div class="spotImg">
				<img src="#">
				</div>
				<div class="spotImg">
				<img src="#">
				</div>
				<div class="spotImg">
				<img src="#">
				</div>
				<div class="spotImg">
				<img src="#">
				</div>	
			</div>	
			</div>
		</div>	
		<div class="col-sm-8" title="map">
			<div id="map"></div>
	<script>
	var marker = [];
		function initMap(){
			var i = 0;
			var options = {
				zoom:13,
				center:{lat: 6.9271, lng: 79.8612}
			}
			var map = new google.maps.Map(document.getElementById('map'),options);

$.ajax({
	  method: "get",
	  url: "marker.php?action=markers",
	  async:false
  }).done(function(response) {
	  if(!response) {
		  return;
	  }
	  response.forEach(function(resp){
		  var infoWindowText = '<div id="content">'+
		  '<div id="title">'+resp["title"]+'</div>'+
		  '<div id="content">'+resp["description"]+'</div>'+
		  '<div id="buttonForm"><button type="button" id="agreeBtn">Confirm</button> <button type="button" id="defuseBtn">Defuse</button></div>'+
		  '</div>';
		  var myLat={ lat : parseFloat(resp['lat']) , lng : parseFloat(resp['lng']) };
		 marker[i] = new google.maps.Marker({
    	position: myLat,
    	map: map,
    	title: resp['description']
  });
  var infoWindow = new google.maps.InfoWindow({
	  content: infoWindowText
  });
  marker[i].addListener('click', function(event) {
	infoWindow.open(map,marker[i]	);
  });
  i++;
	  });
  });
	
		}
	</script>	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu_OkPMjRPFRdukUbVE9x0ajJTXah9Ow8&callback=initMap"
    ></script>			
		</div>
	</div>
	</div>		
</body>
</html>

<!--AIzaSyCu_OkPMjRPFRdukUbVE9x0ajJTXah9Ow8-->