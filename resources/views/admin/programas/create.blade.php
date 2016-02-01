@extends('admin.template.main')

@section('title', 'Craer nuevo Programa')

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
                {!! Form::open(['route' => 'admin.programas.store', 'method' => 'POST'])!!}
                  <div class="form-group">
                    {!! Form::label('nombre','Nombre')!!}
                    {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=> 'Nombre del Programa','required','autofocus'])!!}
                  </div>                           
                  <div class="form-group">
                    {!! Form::label('descripcion_breve','Descripcion Breve')!!}
                    {!! Form::text('descripcion_breve',null,['class' => 'form-control','placeholder'=> 'Descripcion Breve'])!!}
                  </div>      
                  <div class="form-group">
                    {!! Form::label('img_programa','Imagen Programa')!!}
                    {!! Form::text('img_programa',null,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/ejemplo.jpg ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('img_app','Imagen App')!!}
                    {!! Form::text('img_app',null,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/app.jpg ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('img_slider','Imagen Slider')!!}
                    {!! Form::text('img_slider',null,['class' => 'form-control','placeholder' => 'http://res.cloudinary.com/Slider.jpg ','required'])  !!}
                  </div>
                   <div class="form-group">
                    {!! Form::label('slogan_slider','Slogan o Título del Slider')!!}
                    {!! Form::text('slogan_slider',null,['class' => 'form-control','placeholder' => 'describe a la imagen slider ','required'])  !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('sipnosis','Sipnosis')!!}
                    {!! Form::textarea('sipnosis',null,['class' => 'form-control textarea-content'])!!}
                  </div> 
                  <div class="form-group">
                    {!! Form::label('categoria_id','Categoria')!!}
                    {!! Form::select('categoria_id',$categorias,null,['class' => 'form-control select-category', 'required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('productor_id','Productor')!!}
                    {!! Form::select('productor_id',$productores,null,['class' => 'form-control select-productor', 'required'])!!}
                  </div>

                   <div class="form-group">                  
                    {!! Form::label('conductores','Conductores')!!}
                    {!! Form::select('conductores[]',$conductores,null,['class' => 'form-control select-tag','multiple'])!!}
                  </div>

                  <div class="form-group">                  
                    {!! Form::label('tags','Tags')!!}
                    {!! Form::select('tags[]',$tags,null,['class' => 'form-control select-tag','multiple'])!!}
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
    $('.select-category').chosen({
      placeholder_text_single: 'Selecione una Categoria'
    });
    $('.select-productor').chosen({
      placeholder_text_single: 'Selecione un Productor'
    });
    $('.select-tag').chosen({
      no_results_text: "Oops, no se encontro nada!",
      placeholder_text_multiple : 'Seleccione un maximo de 3 tags',
      max_selected_options: 3,
      search_contains: true     
    });
    $('.select-tag').chosen({
      no_results_text: "Oops, no se encontro nada!",
      placeholder_text_multiple : 'Seleccione un maximo de 3 tags',
      max_selected_options: 3,
      search_contains: true     
    });
  </script>
@endsection