@extends('template_blog')

@section('contenu')
<br/>
<div class="col-sm-offset-4 col-sm-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Liste des galleries</h3>
		</div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Titre</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($gallerys as $gallery)
					<tr>
						<td>{!! $gallery->id !!}</td>
						<td class="text-primary"><strong>{!! $gallery->titre !!}</strong></td>
						<td>{!! link_to_route('gallery.show','Voir', [$gallery->id], ['class'=>'btn btn-success btn-block']) !!}</td>
						<td>{!! link_to_route('gallery.edit','Modifier', [$gallery->id], ['class'=>'btn btn-warning btn-block']) !!}</td>
						<td>{!! Form::open(['method'=>'DELETE', 'route'=>['gallery.destroy', $gallery->id]]) !!}
							{!! Form::submit('Supprimer',['class'=>'btn btn-danger btn-block','onclick'=>'return confirm(\'Vraiment supprimer cet page ?\')']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! link_to_route('gallery.create','Ajouter une gallery',[],['class'=>'btn btn-info pull-right'])!!}
	{!! $links !!}		
</div>
@endsection