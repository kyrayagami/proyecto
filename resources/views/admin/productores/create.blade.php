@extends('admin.template.main')

@section('title', 'Craer nuevo Productor')

@section('content')    
@include('admin.template.partials.errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Productor</h3>
            </div>            
              <div class="box-body">  
                {!! Form::open(['route' => 'admin.productores.store', 'method' => 'POST'])!!}
                  <div class="form-group">
                    {!! Form::label('nombre','Nombre')!!}
                    {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=> 'Nombre del Conductor','required','autofocus'])!!}
                  </div>           
                  <div class="form-group">
                    {!! Form::label('correo','Correo Electronico')!!}
                    {!! Form::email('correo',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('perfil','Contenido')!!}
                    {!! Form::textarea('perfil',null,['class' => 'form-control textarea-content'])!!}
                  </div>              
                  <div class="form-group">
                    {!! Form::label('imagen_url','Imagen')!!}
                    {!! Form::text('imagen_url',null,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/ejemplo.jpg ','required'])  !!}
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
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