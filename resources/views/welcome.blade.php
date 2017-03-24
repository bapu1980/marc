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
	{!! Html::style('resources/assets/css/menu.css') !!}
    
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
                        <a class="page-scroll" href="">About my Gear</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php print url("/")."/show_all"; ?>">Blog</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php print url("/")."/show_all_gallery"; ?>">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php print url("/")."/contact"; ?>">Contact</a>
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
                <h1 id="homeHeading"><br/><br/><br/><br/><br/><br/><?php print $datas[0]->valeur; ?></h1>
                
        
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
<?php
$date_depart = 1490028401;
$date_actuel = time();
$nbre_jour = $date_actuel - $date_depart;
$nbre_jour = intval($nbre_jour / (24*60*60));
$nbre_pays_visites = intval($datas[1]->valeur);
$nbre_km = intval($datas[2]->valeur);
?>
<script>
	var nbre_jour = "<?php print $nbre_jour; ?>";
	var nbre_pays_visites = "<?php print $nbre_pays_visites; ?>";
	var nbre_km = "<?php print $nbre_km; ?>";

</script>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="odometer">0</div>
					<div class="odometer_text">jours sur la route</div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="odometer_2">0</div>
					<div class="odometer_text">pays visités</div>
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
		<?php if (isset($blogs[0]->picture)){  ?>
           <!-- <div class="row no-gutter popup-gallery">-->
				<div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[0]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[0]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[0]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[0]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
			</div>
		<?php }  ?>		
		<?php if (isset($blogs[1]->picture)){  ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[1]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[1]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[1]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[1]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
	    <?php }  ?>
       <?php if (isset($blogs[2]->picture)){  ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[2]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[2]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[2]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[2]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
	    <?php }  ?>
        <?php if (isset($blogs[3]->picture)){  ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[3]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[3]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[3]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[3]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
	    <?php }  ?>
        <?php if (isset($blogs[4]->picture)){  ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[4]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[4]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[4]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[4]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
	    <?php }  ?>
        <?php if (isset($blogs[5]->picture)){  ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print url("/")."/blog/".$blogs[5]->id; ?>" class="portfolio-box">
                        <img src="<?php print 'public/images/'.$blogs[5]->picture; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php print $blogs[5]->ville; ?>
                                </div>
                                <div class="project-name">
                                    <?php print $blogs[5]->titre; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
	    <?php }  ?>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <p>&copy; 2017 monsite.com<p>
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
	<?php 
		$array_google_map = array();
		$indice = 0;
		foreach ($blogs as $blog){
			$array_google_map[$indice]['lat'] = $blog->latitude;
			$array_google_map[$indice]['lng'] = $blog->longitude;
			$array_google_map[$indice]['img'] = $blog->picture;
			$array_google_map[$indice]['title'] = $blog->titre;
			$array_google_map[$indice]['id'] = $blog->id;
			$indice++;
		}
		
		$array_google_map = array_reverse($array_google_map);
		
	?>
	<script>
		$(document).ready(function ($) {
			
			function initMap() {
			  var url = "<?php print url("/"); ?>";
			  
			  var array_google_map= <?php echo json_encode($array_google_map ); ?>;
			  			  
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
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
			};
			
			var data = '';
			var originTown = [];
			var destinationTown = [];
							
			var map = new google.maps.Map(document.getElementById("map"),mapOptions);	
			  directionsDisplay.setMap(map);
			  
			  var image_icon = url+"/public/images_site/icon_moto.png";
			  function createMarker(lat,lng,image_icon,data) {
					console.log(data);
					var newmarker = new google.maps.Marker({
						position: new google.maps.LatLng(lat, lng),
						map:map,
						options:{
							draggable: false,
							icon: image_icon
						},
					});
						
					newmarker["infowindow"] = new google.maps.InfoWindow({
						content: data
					});	
					//marker.push(newmarker);
					
					google.maps.event.addListener(newmarker,"click", function() {
													
						this["infowindow"].open(map, this);
					});
				}
				
			 if(array_google_map[0] != undefined){
			  data = "<a class='link_infowindows' href="+url+"/blog/"+array_google_map[0]["id"]+"><div class='img_infowindows'><img width='260px' src='"+url+"/public/images/"+array_google_map[0]["img"]+"'></div><div class='title_infowindows'>"+array_google_map[0]["title"]+"</div></a>";
			  
			  originTown["lat"] = parseFloat(array_google_map[0]["lat"]);
			  originTown["lng"] = parseFloat(array_google_map[0]["lng"]);
			  
			  createMarker(originTown["lat"],originTown["lng"],image_icon,data);
			  
			 }
			 
			 if(array_google_map[1] != undefined){
				  destinationTown["lat"] = parseFloat(array_google_map[1]["lat"]);
				  destinationTown["lng"] = parseFloat(array_google_map[1]["lng"]);
				  calculateAndDisplayRoute(directionsService, directionsDisplay,originTown,destinationTown);
				  
				  data = "<a class='link_infowindows' href="+url+"/blog/"+array_google_map[1]["id"]+"><div class='img_infowindows'><img width='260px' src='"+url+"/public/images/"+array_google_map[1]["img"]+"'></div><div class='title_infowindows'>"+array_google_map[1]["title"]+"</div></a>";
				  
				  createMarker(destinationTown["lat"],destinationTown["lng"],image_icon,data);
			 }
			 
			  var typeDisplay = 'directionsDisplay';
			  var typeService = 'directionsService';

			  for (i = 2; i < array_google_map.length; i++) { 
				this[typeDisplay+i] = new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true
                });
				this[typeService+i] = new google.maps.DirectionsService();
				this[typeDisplay+i].setMap(map);
				originTown["lat"] = parseFloat(array_google_map[i-1]["lat"]);
				originTown["lng"] = parseFloat(array_google_map[i-1]["lng"]);
				destinationTown["lat"] = parseFloat(array_google_map[i]["lat"]);
				destinationTown["lng"] = parseFloat(array_google_map[i]["lng"]);
				
				calculateAndDisplayRoute(this[typeService+i], this[typeDisplay+i],originTown,destinationTown);
				
				data = "<a class='link_infowindows' href="+url+"/blog/"+array_google_map[i-1]["id"]+"><div class='img_infowindows'><img width='260px' src='"+url+"/public/images/"+array_google_map[i-1]["img"]+"'></div><div class='title_infowindows'>"+array_google_map[i-1]["title"]+"</div></a>";
				createMarker(originTown["lat"],originTown["lng"],image_icon,data);
				data = "<a class='link_infowindows' href="+url+"/blog/"+array_google_map[i]["id"]+"><div class='img_infowindows'><img width='260px' src='"+url+"/public/images/"+array_google_map[i]["img"]+"'></div><div class='title_infowindows'>"+array_google_map[i]["title"]+"</div></a>";
				createMarker(destinationTown["lat"],destinationTown["lng"],image_icon,data);
			  }
			  
			  
			  
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
