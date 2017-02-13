<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Titre du site</title>

    <!-- Bootstrap Core CSS -->
	{!! Html::style('resources/views/vendor/bootstrap/css/bootstrap.min.css') !!}
    <!-- Custom Fonts -->
    {!! Html::style('resources/views/vendor/font-awesome/css/font-awesome.min.css') !!}
    <!-- Plugin CSS -->
	{!! Html::style('resources/views/vendor/magnific-popup/magnific-popup.css') !!}
    <!-- Theme CSS -->
	{!! Html::style('resources/assets/css/creative.css') !!}
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Odometer -->
	{!! Html::style('resources/assets/css/odometer-theme-default.css') !!}
	{!! Html::style('resources/assets/css/odometer.css') !!}
</head>

<body id="page-top" onscroll="scroll();">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Titre Site</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Journeys</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><br/><br/><br/><br/><br/><br/>On voyage pour changer,<br/> non de lieu, mais d'idées.</h1>
                
        
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Alaska - Ushuaia !!!</h2>
                    <hr class="light">
                    <p class="text-faded">1 moto, 365 jours, 14 000 km à parcourir....</p>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="odometer">0</div>
					<div class="odometer_text">pays visités</div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="odometer_2">0</div>
					<div class="odometer_text">frontières traversées</div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="odometer_3">0</div>
					<div class="odometer_text">Km parcourus</div>
                </div>
            </div>
        </div>
    </section>
	
	<section class="no-padding" id="map">
        <div class="container-fluid">
		
		</div>
	</section>
	

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/polar-bear-photography-alaska.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/polar-bear-photography-alaska.jpg" class="img-responsive" width="650px" height="350px" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Alaska
                                </div>
                                <div class="project-name">
                                    Randonée avec les ours polaires
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/vancouver.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Vancouver
                                </div>
                                <div class="project-name">
                                    Ville olympique
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/Yellowstone-National-Park.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Yellowstone National Park
                                </div>
                                <div class="project-name">
                                    Quand les geysers font des siennes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/san_francisco.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    San francisco
                                </div>
                                <div class="project-name">
                                    Ses ruelles en pente
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/teotihuacan.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Teotihuacan
                                </div>
                                <div class="project-name">
                                    Des pyramides hallucinantes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="resources/views/img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="storage/public/image/homepage/tikal_02_big.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Tikal
                                </div>
                                <div class="project-name">
                                    Quand les mayas rencontrent la jungle
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Tags or not Tags ????</h2>
            </div>
        </div>
    </aside>



    <!-- jQuery -->
	{!! Html::script('resources/views/vendor/jquery/jquery.min.js') !!}
	
    
	<!-- Bootstrap Core JavaScript -->
	{!! Html::script('resources/views/vendor/bootstrap/js/bootstrap.min.js') !!}

    <!-- Plugin JavaScript -->
	{!! Html::script('resources/assets/js/jquery.easing.min.js') !!}
	{!! Html::script('resources/views/vendor/scrollreveal/scrollreveal.min.js') !!}
	{!! Html::script('resources/views/vendor/magnific-popup/jquery.magnific-popup.min.js') !!}

	<script src="http://maps.google.com/maps/api/js?key=AIzaSyBn0tKp1JRuOUt9iixRi7wj7jnLU-s3J88&sensor=false&amp;language=en"></script>
	<script>
		$(document).ready(function ($) {
			
			function initMap() {
			  var directionsDisplay = new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true
                });
			  var directionsService = new google.maps.DirectionsService;
			  // map center
			var center = new google.maps.LatLng(37.75421264957418,-122.43246460799128);
				
			var mapOptions = {
				center: center,
				zoom: 5,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			
			var originTown = [];
			var destinationTown = [];
			var map = new google.maps.Map(document.getElementById("map"),mapOptions);	
			  directionsDisplay.setMap(map);
			  
			  var image_icon = "http://localhost/marc/public/images_site/icon_moto.png";
			  function createMarker(lat, lng,image_icon) {
					var newmarker = new google.maps.Marker({
						position: new google.maps.LatLng(lat, lng),
						map:map,
						options:{
							draggable: false,
							icon: image_icon
						},
					});
						
						
					//marker.push(newmarker);
				}
			  
			  originTown["lat"] = 61.2180556;// Anchorage.
			  originTown["lng"] = -149.90027780000003;// Anchorage.
			  
			  createMarker(originTown["lat"],originTown["lng"],image_icon);
			  
			  destinationTown["lat"] = 49.2827291;// Vancouver.
			  destinationTown["lng"] = -123.12073750000002;// Vancouver.
			  calculateAndDisplayRoute(directionsService, directionsDisplay,originTown,destinationTown);
			  
			  var directionsDisplay2 = new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true
                });
			  var directionsService2 = new google.maps.DirectionsService();
			  directionsDisplay2.setMap(map);
			  originTown["lat"] = 49.2827291;// Vancouver.
			  originTown["lng"] = -123.12073750000002;// Vancouver.
			  destinationTown["lat"] = 37.75421264957418;// San Francisco.
			  destinationTown["lng"] = -122.432464607991286;// San Francisco.
			  var selectedMode = "DRIVING";
			  var originTownLat = originTown["lat"];
			  var originTownLng = originTown["lng"];
			  var destinationTownLat = destinationTown["lat"];
			  var destinationTownLng = destinationTown["lng"];
			  directionsService2.route({
				origin: {lat:originTownLat,lng:originTownLng},  
				destination: {lat:destinationTownLat,lng:destinationTownLng},  
				// Note that Javascript allows us to access the constant
				// using square brackets and a string value as its
				// "property."
				travelMode: google.maps.TravelMode[selectedMode]
			  }, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
				  directionsDisplay2.setDirections(response);
				} else {
				  window.alert('Directions request failed due to ' + status);
				}
			  });
			 		
				createMarker(originTown["lat"],originTown["lng"],image_icon);
				createMarker(destinationTown["lat"],destinationTown["lng"],image_icon);
			  
			  
			  
			}

			function calculateAndDisplayRoute(directionsService, directionsDisplay,originTown,destinationTown) {
			  var selectedMode = "DRIVING";
			  var originTownLat = originTown["lat"];
			  var originTownLng = originTown["lng"];
			  var destinationTownLat = destinationTown["lat"];
			  var destinationTownLng = destinationTown["lng"];
			  directionsService.route({
				origin: {lat:originTownLat,lng:originTownLng},  
				destination: {lat:destinationTownLat,lng:destinationTownLng},  
				// Note that Javascript allows us to access the constant
				// using square brackets and a string value as its
				// "property."
				travelMode: google.maps.TravelMode[selectedMode]
			  }, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
				  directionsDisplay.setDirections(response);
				} else {
				  window.alert('Directions request failed due to ' + status);
				}
			  });
			}

			
			initMap();
		});
	</script>
	
    <!-- Theme JavaScript -->
	{!! Html::script('resources/assets/js/creative.min.js') !!}
	
	<!-- Odometer -->
	{!! Html::script('resources/assets/js/odometer.js') !!}
	{!! Html::script('resources/assets/js/odometer_moto.js') !!}
	
</body>

</html>
