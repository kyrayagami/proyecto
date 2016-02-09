@extends('admin.template.main')

@section('title', 'Programas')

@section('content')                                
  <div class="col-xs-12">
     <div>
         <a href="{{ route('admin.programas.create')}}" class="btn btn-primary"> Agregar nuevo Programa</a>
         <!-- Buscador-->
          {!! Form::open(['route' => 'admin.programas.index', 'method'=>'GET','class' => 'navbar-form pull-right'])!!}
          <div class="input-group">
          {!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=> 'Buscar programa...','aria-describedby'=>'search'])!!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>      
          </div>      
          {!! Form::close()!!}
        <!-- Fin del buscador-->
     </div>     
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
       <div class="box-header">
        	<h3 class="box-title">Programas</h3>
       </div>            
        <div class="box-body table-responsive no-padding">            
          <table id="#" class="table table-bordered">          
            <thead>
               <tr>                            
                 <th>Nombre</th>                      
                 <th>Descripcion breve</th>                 
                 <th>Categoria</th>
                 <th>Productor</th>
                 <th>Slogan/Titulo de Slider</th>
                 <th>Estatus</th>
                 <th>Acciones</th> 
               </tr>  
            </thead>              
               <tbody>
                  @foreach ($programas as $programa)
                    <tr>
                        <td>{{ $programa->nombre}}</td>
                        <td>{{ $programa->descripcion_breve}}</td>
                        <td>{{ $programa->categoria->nombre}}</td>
                        <td>{{ $programa->productor->nombre}}</td>
                        <td>{{ $programa->slogan_slider}}</td>
                        <td>{{ $programa->estatus}}</td>
                        <td> <a href="{{route('admin.programas.edit',$programa->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                        <a href="{{ route('admin.programas.destroy',$programa->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este programa?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                        </td>
                    </tr>
                  @endforeach
               </tbody>
          </table>
          <div class="text-center">
            {!! $programas->render()!!}
          </div>
        </div>
    </div>       
  </div>                                  
@endsection