// Script para ubicación en mapa

function initialize() {
	var myLatlng = new google.maps.LatLng(19.323298, -99.193668);
	
	var mapOptions = {
		zoom: 15,
		center: myLatlng
	};

	var map = new google.maps.Map(document.getElementById('mapa-ubicacion'), mapOptions);

	var infowindow;

	var request = { placeId: 'ChIJ3RVqJuP_zYURwiRSn2bApVQ' };
	
	service = new google.maps.places.PlacesService(map);
	service.getDetails(request, callback);

	infowindow = new google.maps.InfoWindow({maxWidth:200});

	function createMarker(placeMarker) {
		var marker = new google.maps.Marker({
			map: map,
	        position: placeMarker.geometry.location
	    });
	}

	function callback(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			createMarker(place);
		}
	}  
}

google.maps.event.addDomListener(window, 'load', initialize);