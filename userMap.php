<?php
include_once 'gtfMember.html';
include_once 'locations_model.php';
//get_unconfirmed_locations
?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu_OkPMjRPFRdukUbVE9x0ajJTXah9Ow8&callback=initMap"
    ></script>

<div id="map"></div>
<!--include in head tag of admin-->
<script>
	var map;
	var marker;
	var infowindow;
	var red_icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
	var purple_icon = "http://maps.google.com/mapfiles/ms/icons/purple-dot.png";
	var locations = <?php get_all_locations() ?>;

	var myOptions = {
		zoom:7,
		center: new google.maps.Latlng(6.9271,-79.8612),
		mapTypeId: 'roadmap'
	};

	map = new google.maps.Map(document.getElementById('map'), myOptions);

	var markers = {};

	var getMarkerUniqueId = function(lat,lng){
		return new google.maps.Latlng(lat,lng);
	};

	var addMarker = google.maps.event.addListener(map,'click',function(e){

			var lat = e.latlng.Lat(); //lat of clicked point
			var lng = e.latlng.Lng(); //lng of clicked point
			var markrId = getMarkerUniqueId(lat,lng);
			var marker = new google.maps.Marker({
				position: getLatLng(lat,lng),
				map:map,
				animation:google.maps.Animation.DROP,
				id: 'marker_' + markerId,
				html: " <div id='info_" +markerId"'>\n" + " <table class=\"map1\">\n" + " <tr>\n" + "<td><a>Description:</a></td>\n" + "<td><textarea id='manual_decription' placeholder='Description''></textarea></td>" + "<tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+" </table>\n" + "</div>"
			});
			markers[markerId] = marker;
			bindMarkerEvents (marker);
			bindMarkerinfo (marker);			
	});

	var bindMarkerinfo = function(marker){
		google.maps.event.addListener(marker,"click",function (point){
			var markerId = getMarkerUniqueId(point.latLng.lat(),point.latLng.lng();
			var marker = markers[markerId];
			removeMarker (marker,markerId);	
		});
	};
			
	var removeMarker = function(marker,markerId){
		marker.setMap(null);
		delete markers[markerId];
	};
	

		var i; var confirmed =0;
		for (i=0; i<locations.length; i++){

			marker = new google.maps.Marker({
				position: new google.maps.Latlng(locations[i][1],locations[i][2]),
				map:map,
				icon: locations[i][4] === '1' ? red_icon : purple_icon,
				html: "<div>\n" +
				"<table class=\"map1\">\n" +
				"<tr>\n" +
				"<td><a>Description:</a></td>\n" +
				"<td><textarea disabled id='manual_decription' placeholder='Description'>" + locations[i][3] + "</textarea></td>" + "</table>\n" + "</div>" 
			});

			google.maps.event.addListener(marker,'click',(function(marker,i){
				return function(){
					infowindow = new google.maps.InfoWindow();
					confirmed = locations[i][4] === '1' ? 'checked' : 0;
					$("#confirmed").prop(confirmed,locations[i][4]);
					$("#id").val(locations[i][0]);
					$("#description").val(locations[i][3]);
					$("#form").show();
					infowindow.setContent(marker.html);
					infowindow.open(map,marker);
				}

			}) (marker,i));

		}
	
	function saveData(lat,lng){
		var description = document.getElementById('manual_decription').value;
		var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' +lng;
		downloadUrl(url,function(data,responseCode){
				if(responseCode === 200 && data.length > 1){
					var markerId = getMarkerUniqueId(lat,lng);
					var manual_marker = markers[markerId];
					manual_marker.setIcon(purple_icon);
					infowindow.close();
					infowindow.setContent("<div style ='color:purple; font-size:25px;'>Waiting for the captain to confirm</div>");
					infowindow.open(map,manual_marker);
				}
				else{
					console.log(responseCode);
					console.log(data);
					infowindow.setContent("<div style='color:red;font-size:25px;'>Inserting Errors</div>");
				}
		});
	}
	
	function downloadUrl (url, callback){
		var request = window.ActiveXObject ?
			new ActiveXObject('Microsoft.XMLHTTP'):
			new XMLHttpRequest;
		request.onreadystatechange = function() {
			if (request.readyState == 4){
				callback(request.responseText, request.status);
			}
		};

		request.open('GET',url,true);
		request.send(null);	
	}	

</script>
