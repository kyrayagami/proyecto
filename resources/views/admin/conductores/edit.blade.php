@extends('admin.template.main')

@section('title', 'Editar Conductor : '.$conductor->nombre)

@section('content')
@include('admin.template.partials.errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Conductor</h3>
            </div>          
              <div class="box-body">                
              {!! Form::open(['route' => ['admin.conductores.update',$conductor], 'method' => 'PUT'])!!}
                <div class="form-group">
              {!! Form::label('nombre','Nombre')!!}
              {!! Form::text('nombre',$conductor->nombre,['class' => 'form-control', 'placeholder'=> 'Nombre del Conductor','required','autofocus'])!!}
              </div>           
              <div class="form-group">
                  {!! Form::label('correo','Correo Electronico')!!}
                  {!! Form::email('correo',$conductor->correo,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
              </div>

              <div class="form-group">
              {!! Form::label('perfil','Contenido')!!}
              {!! Form::textarea('perfil',$conductor->perfil,['class' => 'form-control textarea-content'])!!}      
              </div>              
               <div class="form-group">
              {!! Form::label('imagen_url','Imagen')!!}
              {!! Form::text('imagen_url',$conductor->imagen_url,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/image/ejemplo.jpg ','required'])  !!}
              </div>
              <div class="form-group">
                {!! Form::label('estatus','Estatus')!!}
                {!! Form::select('estatus',['INACTIVO' => 'Inactivo', 'ACTIVO' =>'Activo'],$conductor->estatus,['class' => 'form-control'])!!}
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
              {!! Form::close()!!}
            
          </div>
        </div>
      </div>        
@endsection

@section('js')
  <script>
    $('.textarea-content').trumbowyg({
    });
  </script>
@endsection