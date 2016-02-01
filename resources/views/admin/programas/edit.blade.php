@extends('admin.template.main')

@section('title', 'Editar Programa : '.$programa->nombre)

@section('content')    
@include('admin.template.partials.errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Programa</h3>
            </div>            
              <div class="box-body">  
                {!! Form::open(['route' => ['admin.programas.update',$programa], 'method' => 'PUT'])!!}
                  <div class="form-group">
                    {!! Form::label('nombre','Nombre')!!}
                    {!! Form::text('nombre',$programa->nombre,['class' => 'form-control', 'placeholder'=> 'Nombre del Programa','required','autofocus'])!!}
                  </div>                           
                  <div class="form-group">
                    {!! Form::label('descripcion_breve','Descripcion Breve')!!}
                    {!! Form::text('descripcion_breve',$programa->descripcion_breve,['class' => 'form-control','placeholder'=> 'Descripcion Breve'])!!}
                  </div>      
                  <div class="form-group">
                    {!! Form::label('img_programa','Imagen Programa')!!}
                    {!! Form::text('img_programa',$programa->img_programa,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/ejemplo.jpg ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('img_app','Imagen App')!!}
                    {!! Form::text('img_app',$programa->img_app,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/app.jpg ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('img_slider','Imagen Slider')!!}
                    {!! Form::text('img_slider',$programa->img_slider,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/Slider.jpg ','required'])  !!}
                  </div>
                   <div class="form-group">
                    {!! Form::label('slogan_slider','Slogan o Título del Slider')!!}
                    {!! Form::text('slogan_slider',$programa->slogan_slider,['class' => 'form-control','placeholder' => 'describe a la imagen slider ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('sipnosis','Sipnosis')!!}
                    {!! Form::textarea('sipnosis',$programa->sipnosis,['class' => 'form-control textarea-content'])!!}
                  </div> 
                  <div class="form-group">
                    {!! Form::label('categoria_id','Categoria')!!}
                    {!! Form::select('categoria_id',$categorias,$programa->categoria->id,['class' => 'form-control select-categoria', 'required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('productor_id','Productor')!!}
                    {!! Form::select('productor_id',$productores,$programa->productor->id,['class' => 'form-control select-productor', 'required'])!!}
                  </div>

                   <div class="form-group">                  
                    {!! Form::label('conductores','Conductores')!!}
                    {!! Form::select('conductores[]',$conductores,$mis_conductores,['class' => 'form-control select-conductores','multiple'])!!}
                  </div>

                  <div class="form-group">                  
                    {!! Form::label('tags','Tags')!!}
                    {!! Form::select('tags[]',$tags,$mis_tags,['class' => 'form-control select-tag','multiple','required'])!!}
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
    $('.select-categoria').chosen({
      placeholder_text_single: 'Selecione una Categoria'
    });
    $('.select-productor').chosen({
      placeholder_text_single: 'Selecione un Productor'
    });
    $('.select-tag').chosen({
      no_results_text: "Oops, no se encontro nada!",
      placeholder_text_multiple : 'Seleccione sus tags',
      search_contains: true     
    });
    $('.select-conductores').chosen({
      no_results_text: "Oops, no se encontro nada!",
      placeholder_text_multiple : 'Seleccione sus conductores',
      search_contains: true     
    });
  </script>
@endsection