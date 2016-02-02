@extends('admin.template.main')

@section('title', 'Horarios')

@section('content')
	 <div class="col-xs-9">
    <div>
      <a href="{{route('admin.horarios.create')}}" class="btn btn-info">Agregar nuevo Horario </a>
    </div>
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Lista de Horarios</h3>
      </div>            
      <div class="box-body table-responsive no-padding">
        <table id="#" class="table table-bordered">          
          <thead>
            <tr>
             <th>Programa</th>
             <th>Hora de Inicio</th>
             <th>Hora de Termino</th>
             <th>Tipo</th>               
             <th>Tipo de Audiencia</th>                                         
             <th>Acciones</th> 
            </tr>  
          </thead>              
            <tbody>
              @foreach ($horarios as $horario )
                <tr>
                  <td>{{$horario->programa->nombre}}</td>
                  <td>{{$horario->hora_inicio}}</td>
                  <td>{{$horario->hora_termino}}</td>
                  <td>{{$horario->tipo}}</td>                  
                  <td>{{$horario->tipo_audiencia}}</td>
                  <td><a href="#"class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span></a>

                  <a href="{{ route('admin.horarios.destroy',$horario->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                  </td>
                </tr>
            @endforeach                   
            </tbody>
        </table>
      </div>
      <div class="text-center">
           {!! $horarios->render()!!}
      </div>
    </div>      
  </div>                        
   
@endsection