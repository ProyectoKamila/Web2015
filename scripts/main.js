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

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    // Do something
    console.log(scroll);
    //$(".portada").css("background-position-y",scroll +"px");
    if(scroll <100){
        var efecto = $(".cover").css("background-position-y",'0px');
        $("article#servicios").animate({
            "top":"-0px",
            "padding-top":"0px"
        },0);   
        
    }
    if(scroll > 200 && scroll < 400){
        var efecto = $(".cover").css("background-position-y",'100px');
        $("article#servicios").animate({
            "top":"-150px",
            "padding-top":"0px"
        },0);   
    }
    if(scroll > 400 && scroll < 600){
        var efecto = $(".cover").css("background-position-x",'-200px');
        $("article#servicios").animate({
            "top":"-220px",
            "padding-top":"150px"
        },0);   
    }
    if(scroll > 1700){
       $("#planes").css("background-position-y",'-200px');
    }else{
       $("#planes").css("background-position-y",'0px');
    }
});
$(".marketing-interno").scroll(function (event) {
  console.log("mark");
  var mscroll = $(".marketing-interno").scrollTop();
  console.log(mscroll);
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
    
  $(window).load(function() {
    $(".loader").css("background","white");
    $('.loader > .circle').animate({
      "width":"100%",
      "height": "100%",
      "margin-top": "0%",
      "top":"0px"
    },500);
    $(".loader").fadeOut("slow");
    
    
})