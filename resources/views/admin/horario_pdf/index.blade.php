<style>        table {
          border-collapse: collapse;
          font-size: 9;
        } 

        table, td, th {
          border: 1px solid black;
        }
        td{
          font-size: 8;
        }

      </style>
<head>Horarios Canal 10</head>
<title>Horarios Canal 10</title>
 <table id="thorario" border-collapse="collapse" width="100%">
          <thead>
            <tr>
              <th style="width: 60px">Hora</th>
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
          <!--<tr>
            <td rowspan="2" align="center">00:00</td>
          </tr>-->
          <?php
            $contenido='';                    
            $dia=1;
            $inicio=0;
            $termino=$inicio+10000;
            $hora=0;
            $filas=1;
            $tipo="";
            $tipo_hora="am";
            echo '<tr> <td rowspan="2" align="center"> 12:00 am</td>';
              foreach ($horarios as $horario){              
                $h_ini=str_replace(":","",$horario->hora_inicio);
                $h_end=str_replace(":","",$horario->hora_termino);
                if($horario->tipo == "vivo") $tipo = "V";
                if($horario->tipo == "estelar") $tipo = "E";
                if($horario->tipo == "repeticion") $tipo = "R";                
                if($dia==7)
                {
                  echo '</tr> <tr>';
                }                  
                if($h_ini<$termino){                
                /*while ($horario->dia_id>$dia){                    
                    echo "<td>vacio </td>";
                    $dia++;
                  }*/
                  if($h_end>=$termino){
                    $filas++;
                  }
                  echo '<td rowspan="'.$filas.'" align="center" >'.$horario->programa->nombre. '  ('.$tipo.')</td>';
                  $dia=$horario->dia_id;
                  $filas=1;
                }
                else{
                  $hora++;
                  if($hora==12){
                    $tipo_hora='pm';                    
                  }
                  if($hora>12)
                    $hora=1;                  
                  echo '</tr> <tr> <td rowspan="2" align="center"> '.$hora.':00 '.$tipo_hora.'</td>';
                  $filas=1; $dia=1;
                  $inicio=$inicio+10000;
                  $termino=$inicio+10000;
                  if($h_ini<$termino){                    
                    if($h_end>=$termino){
                      $filas++;
                    }
                    echo '<td rowspan="'.$filas.'" align="center">'.$horario->programa->nombre.'  ('.$tipo.')</td>';
                  }
                }
              }
                       
          ?>
          </tbody>
        </table>           