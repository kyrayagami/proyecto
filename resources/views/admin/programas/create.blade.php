@extends('admin.template.main')

@section('title', 'Craer nuevo Programa')

@section('content')    
@include('admin.template.partials.errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
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
                    {!! Form::label('categoria_id','Categoria')!!}
                    {!! Form::select('categoria_id',$categorias,null,['class' => 'form-control select-categoria', 'required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('productor_id','Productor')!!}
                    {!! Form::select('productor_id',$productores,null,['class' => 'form-control select-productor', 'required'])!!}
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
    $('.select-conductor').chosen({
      no_results_text: "Oops, no se encontro nada!",
      placeholder_text_multiple : 'Seleccione sus conductores',
      search_contains: true     
    });
  </script>
@endsection