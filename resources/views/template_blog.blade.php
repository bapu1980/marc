<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>mon joli site</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		{!! Html::style('https://css.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
        {!! Html::style('https://css.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		{!! Html::style('resources/assets/css/menu.css') !!}
		<style>textarea {resize:none;}</style>
    </head>
    <body>
        @yield('contenu')
    </body>
</html>
