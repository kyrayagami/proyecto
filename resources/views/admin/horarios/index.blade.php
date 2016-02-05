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
       <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Lunes</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Martes</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Miercoles</a></li>
              <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Jueves</a></li>
              <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Viernes</a></li>
              <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">Sabado</a></li>
              <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">Domingo</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($L as $lunes )
                      <tr>
                        <td>{{$lunes->programa->nombre}}</td>
                        <td>{{$lunes->hora_inicio}} hrs</td>
                        <td>{{$lunes->hora_termino}} hrs</td>
                        <td>{{$lunes->tipo}}</td>
                        <td>{{$lunes->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$lunes->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$lunes->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>              
                      
              <div class="tab-pane" id="tab_2">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($M as $martes )
                      <tr>
                        <td>{{$martes->programa->nombre}}</td>
                        <td>{{$martes->hora_inicio}}</td>
                        <td>{{$martes->hora_termino}}</td>
                        <td>{{$martes->tipo}}</td>
                        <td>{{$martes->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$martes->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$martes->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>       
              
               <div class="tab-pane" id="tab_3">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($Mi as $miercoles )
                      <tr>
                        <td>{{$miercoles->programa->nombre}}</td>
                        <td>{{$miercoles->hora_inicio}}</td>
                        <td>{{$miercoles->hora_termino}}</td>
                        <td>{{$miercoles->tipo}}</td>
                        <td>{{$miercoles->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$miercoles->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$miercoles->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>      
             
               <div class="tab-pane" id="tab_4">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($J as $jueves )
                      <tr>
                        <td>{{$jueves->programa->nombre}}</td>
                        <td>{{$jueves->hora_inicio}}</td>
                        <td>{{$jueves->hora_termino}}</td>
                        <td>{{$jueves->tipo}}</td>
                        <td>{{$jueves->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$jueves->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$jueves->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>   

               <div class="tab-pane" id="tab_5">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($V as $viernes )
                      <tr>
                        <td>{{$viernes->programa->nombre}}</td>
                        <td>{{$viernes->hora_inicio}}</td>
                        <td>{{$viernes->hora_termino}}</td>
                        <td>{{$viernes->tipo}}</td>
                        <td>{{$viernes->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$viernes->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$viernes->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>      
              
               <div class="tab-pane" id="tab_6">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($S as $sabado )
                      <tr>
                        <td>{{$sabado->programa->nombre}}</td>
                        <td>{{$sabado->hora_inicio}}</td>
                        <td>{{$sabado->hora_termino}}</td>
                        <td>{{$sabado->tipo}}</td>
                        <td>{{$sabado->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$sabado->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$sabado->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>  

               <div class="tab-pane" id="tab_7">
                <table class="table table-bordered">
                  <thead>
                    <tr>                      
                      <th>Programa</th>
                      <th style="width: 100px">Hora Inicio</th>
                      <th>Hora Termino</th>
                      <th>Tipo</th>                       
                      <th style="width: 10px">Tipo de Audiencia</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    @foreach ($D as $domingo )
                      <tr>
                        <td>{{$domingo->programa->nombre}}</td>
                        <td>{{$domingo->hora_inicio}}</td>
                        <td>{{$domingo->hora_termino}}</td>
                        <td>{{$domingo->tipo}}</td>
                        <td>{{$domingo->tipo_audiencia}}</td>
                        <td> <a href="{{route('admin.horarios.edit',$domingo->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.horarios.destroy',$domingo->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>          
                        
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
    </div>      
  </div>                        
   
@endsection