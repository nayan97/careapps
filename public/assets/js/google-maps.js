function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 24.4114452, lng: 89.0030134};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Health care Center, Natore' // Title Location
    });
}