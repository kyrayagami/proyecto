@extends('admin.template.main')

@section('title', 'Horarios')

@section('content')
	 <div class="col-xs-9">
    <div>
      <a href="#" class="btn btn-info">Agregar nuevo Horario </a>
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
             <th>ID</th>
             <th>Hora de Inicio</th>
             <th>Hora de Termino</th>
             <th>Tipo</th>  
             <th>Descripcion</th>
             <th>Tipo de Audiencia</th>                    
             <th>Estatus</th>                      
             <th>Acciones</th> 
            </tr>  
          </thead>              
            <tbody>
             
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="#"class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span></a>

                  <a href="#" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Horario?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                  </td>
                </tr>
                           
            </tbody>
        </table>
      </div>
      <div class="text-center">
          
      </div>
    </div>      
  </div>                        
   
@endsection