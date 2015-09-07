var main = function(){

  $(".test123").html("<p>Hi</p>");

  //Start Ermitteln der User Geolocation -- wird aktuell nicht genutzt
  if (navigator.geolocation) {

    function error(err) {
      console.warn('ERROR(' + err.code + '): ' + err.message);
    }

    function success(pos){
      userCords = pos.coords;

      //return userCords;
    }

    // Get the user's current position
    navigator.geolocation.getCurrentPosition(success, error);
    //console.log(pos.latitude + " " + pos.longitude);
    } else {
      alert('Geolocation is not supported in your browser');
    }

  //Konfiguration der Google Map
  var mapOptions = {
    zoom: 6, //Zoom Level beim Laden
    center: new google.maps.LatLng(51, 11), //Koordinaten beim Laden (zentral über Deutschland gewählt)
    //Ein-/Ausstellen von Bedienelementen
    panControl: false,
    panControlOptions: {
      position: google.maps.ControlPosition.BOTTOM_LEFT
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.LARGE,
      position: google.maps.ControlPosition.RIGHT_CENTER
    },
    scaleControl: false

  };

  //Fire up Google maps and place inside the map-canvas div
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  $("#button").click( function(){
    showCompanies();
  });

};

$(document).ready(main);





//Anzeigen der Marker auf der Google Map
var showCompanies = function(){

  //Adding infowindow option
  var infowindow = new google.maps.InfoWindow({
  content: "holding..."
  });

  //Daten aus der SQL Datenbank via AJAX laden, die anschließende SUCCESS Funktion erstellt die Marker
  $.ajax({
    type: "GET",
    // contentType: "application/json; charset=utf-8",
    url: "php/ajax.php",
    // dataType: 'jsonp',
    success: function(data){
      //Wandeln der JSON Datei aus SQL in ein JS Object
      var comp_obj = JSON.parse(data);

      //Zählen der Unternehmen
      var comp_count = comp_obj.length;

      //Für jedes Unternehmen Daten neuen Variablen zuweisen, aufbereiten und mit Marker anzeigen
      for (var i = 0; i < comp_count; i++) {

        //Firmen Informationen
        var comp_name = comp_obj[i].comp_name;
				var comp_location = comp_obj[i].comp_location;
				var comp_industry = comp_obj[i].comp_industry;
				var comp_info = comp_obj[i].comp_info;
				var comp_size = comp_obj[i].comp_size;

        //Latitude und Longitude aufbereiten und für Google Maps lesbar machen
        var comp_long = parseFloat(comp_obj[i].comp_long.replace(",","."));
        var comp_lat = parseFloat(comp_obj[i].comp_lat.replace(",","."));
        var point = new google.maps.LatLng(comp_long,comp_lat);//new google.maps.LatLng(comp_lat, comp_long)

        //Erstellen eines MArkers für das aktuelle Unternehmen, basierend auf den ausgewählten Daten
        var marker = new google.maps.Marker({
    				position: point,
    				map: map,
            title: comp_name,
    				html:
              '<div class="markerPop">' +
  						'<h1>' + comp_name + '</h1>' + //substring removes distance from title
  						'<h3>' + comp_location + '</h3>' +
  						'<p>' + comp_industry + '</p>' +
  						'<p>' + comp_info + '</p>' +
              '<p>' + comp_size + '</p>' +
  						'</div>'
    			})

          google.maps.event.addListener(marker, 'click', function () {
            // where I have added .html to the marker object.
            infowindow.setContent(this.html);
            infowindow.open(map, this);
          });
      }
    }
  })
};
