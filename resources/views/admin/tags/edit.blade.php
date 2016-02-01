@extends('admin.template.main')

@section('title', 'Editar Tag : '.$tag->nombre)

@section('content')

@include('admin.template.partials.errors')
  <div class="row">
    <div class="col-md-6">    
         {!! Form::open(['route'=> ['admin.tags.update',$tag],'method'=> 'PUT'])!!}
          <div>
          <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!! Form::text('nombre',$tag->nombre,['class'=>'form-control','placeholder'=> 'Nombre de la tag', 'required','autofocus'])!!}
          </div>
          </div>
          <div class="form-group">
            {!! Form::submit('Actualizar', ['class'=> 'btn btn-primary'])!!}
          </div>
            {!! Form::close()!!}
      </div>
    </div>
  </div>   
@endsection