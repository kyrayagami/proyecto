@extends('admin.template.main')

@section('title', 'Vista de Horarios')

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
          @foreach ($horarios as $horario)
            <tr>
              <td>{{$horario->programa->nombre}} , {{$horario->hora_inicio}}, {{$horario->hora_termino}}, dia = {{$horario->dia_id}}</td>
            </tr>
          @endforeach
            <?php                   
            $inicio=0;
            $termino=$inicio+10000;
            $dia=1;
            echo "<tr> <td>".$inicio."</td>";
            // un while para que imprima todas las horas
              foreach ($horarios as $horario){                
                $h_ini=str_replace(":","",$horario->hora_inicio);
                $h_end=str_replace(":","",$horario->hora_termino);                
                if($h_ini>=$termino){ 
                  $inicio=$inicio+10000;
                  $termino=$inicio+10000;
                  while($dia<=7){
                    echo "<td>vacio</td>";
                    $dia++;
                  }
                  echo "</tr>";
                  //empieza una nueva hora
                  $dia=1;
                  echo "<tr><td>".$inicio."</td>";                                  
                }
                while($h_ini>=$termino){
                  $inicio=$inicio+10000;
                  $termino=$inicio+10000;
                  echo "<td>vacio1</td> <td>vacio2</td> <td>vacio3</td> <td>vacio4</td> <td>vacio5</td> <td>vacio6</td> <td>vacio7</td> </tr>";
                  echo "</tr>";
                  //empieza una nueva hora
                  //$dia=1;
                  echo "<tr><td>".$inicio."</td>";
                }
                if($h_ini>=$inicio){
                  //echo '<tr>';
                  while($horario->dia_id>=$dia){
                    if($dia==$horario->dia_id){
                      echo "<td>".$horario->programa->nombre. '-'.$horario->hora_termino."</td>";
                      $dia++;
                      break;
                    }
                    else{ 
                      echo "<td>vacio".$dia."</td>";
                      //echo "<td></td>";
                      $dia++;
                    }
                  }
                }
                else{
                  //echo "<td>vacio</td> <td>vacio</td> <td>vacio</td> <td>vacio</td> <td>vacio</td> <td>vacio</td> <td>vacio</td> </tr>";
                  echo "<td>Todo vacio </td></tr>";
                  $dia=8;
                }                
              }         
            ?>
          </tbody>
        </table>
      </div>
    </div>      
  </div>                        
   
@endsection