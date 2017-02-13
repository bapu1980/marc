@extends('master')

@section('content')
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                     <li>{{ $error}}</li> 
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Resize Image</h4>
            </div>
            <div class="panel-body">
                <div class="row">
    
                    <div class="col-md-12">
                         <!-- Form for Saving Images -->
                        {!! Form::open([ 'route' => 'image.store', 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}
			
    
                            <!-- File Input for Image -->
                            <div class="form-group">
                                {!! Form::label('image', 'Choose File : ') !!}
                                {!! Form::file('image', ['class' => 'custom-file-input' ]) !!}
                            </div>
    
                            <!-- Size for Image -->
                            <div class="form-group">
                                {!! Form::label('image_size', 'Select Image Dimension : ') !!}
                                {!! Form::select('image_size', ['200'=> '200', '400'=>'400', '600'=>'600']) !!}
                            </div>
                          
                            <!-- Submit Button Upload Image -->
                            <div class="form-group">
                                {!! Form::submit('Resize Image', [ 'class' => 'btn btn-default' ]) !!}
                            </div>
    
                        {!! Form::close() !!}
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@stop
