@extends('admin.template.main')

@section('title', 'Horarios')

@section('content')
	 <div class="col-xs-9">
    <div>
      <a href="#" class="btn btn-info">Imprimir Horario </a>
    </div>
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Horario de Programación</h3>
      </div>       
      <div class="box-body table-responsive no-padding">            
        <table id="thorario" class="table table-condensed">          
          <thead>
            <tr>
              <th style="width: 10px">Horario</th>
              <th>Lunes</th>                    
              <th>Martes</th>                      
              <th>Miercoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
              <th>Sabado</th>
              <th>Domingo</th>
            </tr>  
          </thead>              
          <tbody id="lis_horario">
            <?php                              
              $conta=0;                
              while(count($contenido)>$conta){
                echo $contenido[$conta];
                $conta++;
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>      
  </div>                        
   
@endsection