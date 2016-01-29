@extends('admin.template.main')

@section('title', 'Prueba')

@section('content')

<section class="content">                                  
  <div class="col-xs-9">
    <div>
      <button id="#" class="btn btn-primary btn-md ">Agregar</button>
    </div>
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Conductores</h3>              
      </div>            
      <div class="box-body table-responsive no-padding">            
        <table id="#" class="table table-bordered">          
          <thead>
            <tr>
             <th>ID</th>
             <th>Nombre</th>
             <th>Correo</th>
             <th>Descripcion</th>                      
             <th>Foto</th>
             <th>Estatus</th>                      
             <th>Acciones</th> 
            </tr>  
          </thead>              
            <tbody>
                           
            </tbody>
        </table>
      </div>
    </div>      
  </div>                                   
</section>  
   
@endsection