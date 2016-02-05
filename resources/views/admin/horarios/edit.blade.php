@extends('admin.template.main')

@section('title', 'Editar Horario')

@section('content')
@include('admin.template.partials.errors')

<div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Horario</h3>
            </div>            
              <div class="box-body">  
                {!! Form::open(['route' => ['admin.horarios.update',$horario], 'method' => 'PUT'])!!}

                 <div class="form-group">
                    {!! Form::label('dia_id','Dia')!!}
                    {!! Form::select('dia_id',$dias,$horario->dia_id,['class' => 'form-control select-dia','placeholder'=>'Selecione un dia', 'required','autofocus'])!!}
                  </div>          
                  <div class="form-group">
                    {!! Form::label('programa_id','Programa')!!}
                    {!! Form::select('programa_id',$programas,$horario->programa_id,['class' => 'form-control select-programa','placeholder'=>'Selecione un programa', 'required'])!!}
                  </div>
                  <div class="form-group" style='display:none;'>
                    {!! Form::label('hora_inicio','Hora de Inicio')!!}
                    {!! Form::time('hora_inicio',$horario->hora_inicio,['class' => 'form-control'])!!}
                  </div> 
                  <div class="form-group" style='display:none;'>
                    {!! Form::label('hora_termino','Hora de Temrino')!!}
                    {!! Form::time('hora_termino',$horario->hora_termino,['class' => 'form-control'])!!}
                  </div>                
                  <div class="form-group">
                    {!! Form::label('tipo','Tipo')!!}
                    {!! Form::select('tipo', array('en vivo'=> 'En vivo','estelar'=> 'Estelar','repeticion' => 'Repeticion') ,$horario->tipo,['class' => 'form-control seletc-tipo','required'])!!}
                  </div>
                   <div class="form-group">
                    {!! Form::label('descripcion','Descripcion')!!}
                    {!! Form::textarea('descripcion',$horario->descripcion,['class' => 'form-control textarea-content'])!!}
                  </div>                     
                  <div class="form-group">
                    {!! Form::label('tipo_audiencia','Tipo de Audiencia')!!}
                    {!! Form::select('tipo_audiencia', array('A'=> 'A','AA'=> 'AA','AAA' => 'AAA') ,$horario->tipo_audiencia,['class' => 'form-control seletc-tipo','placeholder'=>'Selecione un tipo','required'])!!}
                    </div>
                  <div class="box-footer">
                    {!! Form::submit('Actualizar', ['class'=> 'btn btn-primary'])!!}
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
    $('.select-dia').chosen({      
    });
     $('.select-tipo').chosen({      
    });
    $('.select-programa').chosen({      
    });
  </script>
@endsection