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
				<img class="logo" src="logo1.png">Green Task Force</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="far fa-bell"></i></a></li>
				<li><a href="#"><i class="far fa-user"></i></a></li>
			</ul>	
		</div>
	</nav>	
	<div class="col-sm-12">
		<h3>Reported incidents</h3>

	</div>	
		<div class="col-sm-12" title="map">
			<div id="map"></div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu_OkPMjRPFRdukUbVE9x0ajJTXah9Ow8&callback=initMap"
    ></script>			
		</div>
		
		<div class="well">
			<div class="col-sm-12">
			<h3 class="artHead">Add article</h3>
		</div>
			<div class="col-sm-12">
				<form action="" method="">
		<div class="col-sm-2">
				<div class="form-group">
					<label for="heading">Article heading</label>
				</div>
		</div>
		<div class="col-sm-10">
				<div class="form-group">
					<input type="text" class="form-control" id="heading"/>
				</div>
		</div>	
		<div class="col-sm-2">
				<div class="form-group">
					<label for="p1">Paragraph</label>
				</div>
		</div>
		<div class="col-sm-10">
				<div class="form-group">
					<input type="text" class="form-control" id="p1"/>
				</div>
		</div>
		<button type="button" id="btn-post">Post</button>
		</div>
		<script>
		$('document').ready(function(){
		  $('#btn-post').click(function (event) {
			  var title = $('#heading').val();
			  var paragraph = $('#p1').val();
			$.ajax({
				method:"post",
				url:"article.php",
				data:{
					title:title,
					paragraph:paragraph
				},
				async:true
			}).done(function(response){
				console.log(response);
				if(response) {
					alert("Your article has been posted");
				} else {
					alert("Sorry something went wrong");
				}
			});
		  });
	  });
			function initMap(){
			var options = {
				zoom:13,
				center:{lat: 6.9271, lng: 79.8612}
			}
			var map = new google.maps.Map(document.getElementById('map'),options);
			
			var i=0;
var marker=[];
  
  $.ajax({
	  method: "get",
	  url: "marker.php?action=markers",
	  async:false
  }).done(function(response) {
	  if(!response) {
		  return;
	  } 
	  console.log(response);
	  response.forEach(function(resp){
		  var myLat={ lat : parseFloat(resp['lat']) , lng : parseFloat(resp['lng']) };
		 marker[i] = new google.maps.Marker({
    	position: myLat,
    	map: map,
    	title: resp['description'],
		id: resp['locID']
  });
  i++;
	  });
  });
  google.maps.event.addListener(map,'click', function(event){
	clickLat = event.latLng.lat();
	clickLng = event.latLng.lng();
	city = $('#city').val();
	console.log(city);
	description = $('#des').val();
	var fd = new FormData();
	if(!confirm("Are you sure to add the marker?")){
		return;
	}
	var imageFile = $('#image')[0].files[0];
	fd.append('image',imageFile);
	$.ajax({
		url: 'marker.php',
            type: 'post',
            data: {
				city: city,
				desc: description,
				lat: clickLat,
				lng: clickLng
			},
            // processData: false,
			// async: false
	}).done(function (response) {
		console.log(response);
		if(response) {
			alert("Marker added successfully.");
		} else{
			alert("Adding marker failed.");
		}
	})
})
		}
		</script>
</body>
</html>