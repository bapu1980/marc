<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>mon joli site</title>
		<!-- Bootstrap Core CSS -->
		{!! Html::style('resources/views/vendor/bootstrap/css/bootstrap.min.css') !!}
		<!-- Custom Fonts -->
		{!! Html::style('resources/views/vendor/font-awesome/css/font-awesome.min.css') !!}
		<!-- Plugin CSS -->
		{!! Html::style('resources/views/vendor/magnific-popup/magnific-popup.css') !!}
		<!-- Theme CSS -->
		{!! Html::style('resources/assets/css/creative.css') !!}
		
		
		<!-- jQuery -->
		{!! Html::script('resources/views/vendor/jquery/jquery.min.js') !!}
	
    
		<!-- Bootstrap Core JavaScript -->
		{!! Html::script('resources/views/vendor/bootstrap/js/bootstrap.min.js') !!}

		<!-- Plugin JavaScript -->
		{!! Html::script('resources/assets/js/jquery.easing.min.js') !!}
		{!! Html::script('resources/views/vendor/scrollreveal/scrollreveal.min.js') !!}
		{!! Html::script('resources/views/vendor/magnific-popup/jquery.magnific-popup.min.js') !!}
		
		<!-- Theme JavaScript -->
		{!! Html::script('resources/assets/js/creative.min.js') !!}
		
		{!! Html::style('resources/assets/css/menu.css') !!}
		
		<style>textarea {resize:none;}</style>
    </head>
    <body>
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php print url("/"); ?>">Titre Site</a>
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
        @yield('contenu')
		

    </body>
</html>




