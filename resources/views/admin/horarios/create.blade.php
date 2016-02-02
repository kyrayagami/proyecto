@extends('admin.template.main')

@section('title', 'Craer nuevo Horario')

@section('content')
@include('admin.template.partials.errors')

<div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Horario</h3>
            </div>            
              <div class="box-body">  
                {!! Form::open(['route' => 'admin.horarios.store', 'method' => 'POST'])!!}

                  <div class="form-group">
                    {!! Form::label('dia_id','Dia ID')!!}
                    {!! Form::text  ('dia_id',null,['class' => 'form-control', 'placeholder'=> 'Nombre del Conductor','required','autofocus'])!!}
                  </div>           
                  <div class="form-group">
                    {!! Form::label('programa_id','Programa ID')!!}
                    {!! Form::text('programa_id',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('hora_inicio','Horario de Inicio')!!}
                    {!! Form::text('hora_inicio',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('hora_termino','Horario de Termino')!!}
                    {!! Form::text('hora_termino',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('tipo','Tipo de Transmision')!!}
                    {!! Form::select('tipo',['ENVIVO' => 'En vivo', 'ESTELAR' =>'Estelar','REPETICION' => 'Repeticion'],['class' => 'form-control'])!!}
                  </div>
                  </div>

                  <div class="form-group">
                    {!! Form::label('descripcion','Contenido')!!}
                    {!! Form::textarea('descripcion',null,['class' => 'form-control textarea-content'])!!}
                  </div>              
                  <div class="form-group">
                    {!! Form::label('tipo_audiencia','Tipo de Audiencia')!!}
                    {!! Form::select('tipo_audiencia',['A' => 'A', 'AA' =>'AA','AAA' => 'AAA'],['class' => 'form-control'])!!}
                  </div>
                  <div class="box-footer">
                    {!! Form::submit('Agregar', ['class'=> 'btn btn-primary'])!!}
                  </div>
                {!! Form::close()!!}
          </div>
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