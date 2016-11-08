$(window).load(function(){

  var map;

    var styles = [
          {
              "featureType": "road",
              "stylers": [
                  {
                      "hue": "#5e00ff"
                  },
                  {
                      "saturation": -79
                  }
              ]
          },
          {
              "featureType": "poi",
              "stylers": [
                  {
                      "saturation": -78
                  },
                  {
                      "hue": "#6600ff"
                  },
                  {
                      "lightness": -47
                  },
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "stylers": [
                  {
                      "lightness": 22
                  }
              ]
          },
          {
              "featureType": "landscape",
              "stylers": [
                  {
                      "hue": "#6600ff"
                  },
                  {
                      "saturation": -11
                  }
              ]
          },
          {
              "featureType": "water",
              "stylers": [
                  {
                      "saturation": -65
                  },
                  {
                      "hue": "#1900ff"
                  },
                  {
                      "lightness": 8
                  }
              ]
          },
          {
              "featureType": "road.local",
              "stylers": [
                  {
                      "weight": 1.3
                  },
                  {
                      "lightness": 30
                  }
              ]
          },
          {
              "featureType": "transit",
              "stylers": [
                  {
                      "visibility": "simplified"
                  },
                  {
                      "hue": "#5e00ff"
                  },
                  {
                      "saturation": -16
                  }
              ]
          },
          {
              "featureType": "transit.line",
              "stylers": [
                  {
                      "saturation": -72
                  }
              ]
          }
      ]
    var myLatLng = {lat: 50.4144, lng: 30.5315};
     map = new google.maps.Map(document.getElementById('map'), {
  	 center: myLatLng,
  	 zoom: 17,
     scrollwheel: false,
     styles: styles
   });

   var iconBase = '/wp-content/themes/partyTime/img/';
   var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Party Time',
      icon: iconBase + 'marker-pt.png'
    });


});
