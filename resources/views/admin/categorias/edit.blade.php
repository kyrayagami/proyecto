@extends('admin.template.main')

@section('title', 'Editar Categoria : '.$categoria->nombre)

@section('content')

@include('admin.template.partials.errors')
  <div class="row">
    <div class="col-md-6">    
         {!! Form::open(['route'=> ['admin.categorias.update',$categoria],'method'=> 'PUT'])!!}
          <div>
          <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!! Form::text('nombre',$categoria->nombre,['class'=>'form-control','placeholder'=> 'Nombre de la categoria', 'required','autofocus'])!!}
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