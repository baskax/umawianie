var apikey = "AIzaSyCNFCiZYfI4UJ9xwfSAcISFnR8OP5dB3uY";

function initMap() {
 var uluru = {lat: -25.363, lng: 131.044};
 var map = new google.maps.Map(document.getElementById('map'), { zoom: 4, center: uluru }); 
var marker = new google.maps.Marker({ position: uluru, map: map }); }  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
