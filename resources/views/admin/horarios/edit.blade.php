@extends('admin.template.main')

@section('title', 'Prueba')

@section('content')
   <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Horario</h3>
            </div>            
              <div class="box-body">  
                {!! Form::open(['route' => ['admin.horarios.update', $horario], 'method' => 'PUT'])!!}

                  <div class="form-group">
                    {!! Form::label('dia_id','Dia ID')!!}
                    {!! Form::text  ('dia_id',$horario->dia_id,['class' => 'form-control', 'placeholder'=> 'Nombre del Conductor','required','autofocus'])!!}
                  </div>           
                  <div class="form-group">
                    {!! Form::label('programa_id','Programa ID')!!}
                    {!! Form::text('programa_id',$horario->programa_id,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('hora_inicio','Horario de Inicio')!!}
                    {!! Form::text('hora_inicio',$horario->hora_inicio,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('hora_termino','Horario de Termino')!!}
                    {!! Form::text('hora_termino',$horario->hora_termino,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required'])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('tipo','Tipo de Transmision')!!}
                    {!! Form::select('tipo',['ENVIVO' => 'En vivo', 'ESTELAR' =>'Estelar','REPETICION' => 'Repeticion'],$horario->tipo,['class' => 'form-control'])!!}
                  </div>
                   <div class="form-group">
                    {!! Form::label('descripcion','Sipnosis')!!}
                    {!! Form::textarea('descripcion',$horario->descripcion,['class' => 'form-control textarea-content'])!!}
                  </div>                     
                  <div class="form-group">
                    {!! Form::label('tipo_audiencia','Tipo de Audiencia')!!}
                    {!! Form::select('tipo_audiencia',['A' => 'A', 'AA' =>'AA','AAA' => 'AAA'],,$horario->tipo_audiencia,['class' => 'form-control'])!!}
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