$(document).ready(function() {
    console.log('el documento está preparado');
  $('#switch-head').click(function () {
    var elemento = document.getElementById('header-principal');
    var status = elemento.getAttribute("data-status");
    console.log(status);
    if(status === 'close'){
    
      $('#header-principal').css('height','auto');
    	$('#switch-head').animate(
                {
                    top: ["70px", "swing"]
                },300); 
    	$('.cover').animate(
                {
                    top: ["70px", "swing"]
                },800); 
    	$('#switch-head').addClass('tab-rotate');
    	$('#header-principal').attr('data-status','open');
    }else if(status === 'open'){
		$('#header-principal').animate(
                {
                    height: ["0px", "swing"]
                },400); 
    	$('#switch-head').animate(
                {
                    top: ["0px", "swing"]
                },400);
                $('.cover').animate(
                {
                    top: ["0px", "swing"]
                },300); 
    	$('#switch-head').removeClass('tab-rotate');
    	$('#header-principal').attr('data-status','close');
    }
});

$('div[data-type="parallax"]').each(function(){
    
        var $portadactual = $(this);
        $(window).scroll(function(){
            $window = $(window);
            var yPos = $($window.scrollTop() / $portadactual.data('speed'));
            
            var coord = ' -100% ' + yPos + "px";
                        console.log(coord);
            $portadactual.css('background-position',coord);
        });
    });
});



       
         var map;
        function initialize() {
                         // Create an array of styles.
              var styles = 
              [
  {
    "elementType": "geometry.fill",
    "stylers": [
      { "visibility": "on" },
      { "color": "#514e51" }
    ]
  },{
    "elementType": "geometry.stroke",
    "stylers": [
      { "visibility": "on" },
      { "hue": "#ff002b" },
      { "color": "#b44344" }
    ]
  },{
    "elementType": "labels.text.stroke",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ffffff" }
    ]
  },{
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ff8080" },
      { "weight": 4.2 }
    ]
  },{
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      { "visibility": "on" },
      { "hue": "#004cff" },
      { "color": "#4e80ff" }
    ]
  },{
    "featureType": "road.highway",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ad8080" }
    ]
  },{
    "featureType": "road.highway",
    "stylers": [
      { "visibility": "on" },
      { "hue": "#00e5ff" }
    ]
  },{
    "featureType": "road.local",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "color": "#c9c8cb" }
    ]
  },{
    "featureType": "poi"  }
];

              // Create a new StyledMapType object, passing it the array of styles,
              // as well as the name to be displayed on the map type control.
              var styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});

              // Create a map object, and include the MapTypeId to add
              // to the map type control.
              var mapOptions = {
                zoom: 17,
                center: new google.maps.LatLng(10.494382, -66.827489),
                mapTypeControlOptions: {
                  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
              };
              var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

              //Associate the styled map with the MapTypeId and set it to display.
              map.mapTypes.set('map_style', styledMap);
              map.setMapTypeId('map_style');
  }
        
        google.maps.event.addDomListener(window, 'load', initialize);
    