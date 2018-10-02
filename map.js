function initMap() {
    var location= {lat: 51.9003417, lng: -2.1984335};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 16, center: location});
    var marker = new google.maps.Marker({position: location, map: map});
  }

  