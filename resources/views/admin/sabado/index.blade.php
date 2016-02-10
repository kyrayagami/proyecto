@extends('admin.template.main')

@section('title', 'Sabado')

@section('content')  

<section class="content">    
      <div class="row">
        <div class="col-xs-3">                     
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Semana</h4>
            </div>
            <div class="box-body">
              <!-- the events -->

                  <div id="external-events">
                    <form method="post" action="" id="frm_dias" name="frm_dias" >
                      <button onClick=" window.location.href='{{route('admin.domingo.index')}}' " type="button" class="btn btn-block bg-yellow btn-default">Domingo</button>
                      <button onClick=" window.location.href='{{route('admin.lunes.index')}}' " type="button" class="btn btn-block bg-green btn-default">Lunes</button>   
                      <button onClick=" window.location.href='{{route('admin.martes.index')}}' " type="button" class="btn btn-block bg-aqua btn-default">Martes</button>
                      <button onClick=" window.location.href='{{route('admin.miercoles.index')}}' " type="button" class="btn btn-block bg-light-blue btn-default">Miercoles</button>
                      <button onClick=" window.location.href='{{route('admin.jueves.index')}}' " type="button" class="btn btn-block bg-red btn-default">Jueves</button>
                      <button onClick=" window.location.href='{{route('admin.viernes.index')}}' " type="button" class="btn btn-block bg-purple btn-default">Viernes</button>
                      <button onClick=" window.location.href='{{route('admin.sabado.index')}}' " type="button" class="btn btn-block bg-orange btn-default">Sabado</button> 
                    </form>                                                      
                  </div>
 
            </div>
            <!-- /.box-body -->
          </div> 
        </div>
        <div class="col-xs-9"> 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Horarios</h3>
               <div class="box-tools">
              </div>
            </div>        
            <div class="box-body table-responsive no-padding">                          
              <table cellpadding="0" cellspacing="0" align="center"  border="0" width="680">
                <tbody>
                  <tr>
                  <td align="left" valign="top" width="670">
                    <div id="page-wrap" align="center"> 
                      <div id="example-one" align="center">              
                        <ul class="nav">

                          <li class="espacio-nav">&nbsp;</li>
                          <li class="nav-one"><a href="#manana">MAÑANA</a></li>
                          <li class="nav-two"><a href="#tarde" class="current" >TARDE</a></li>
                          <li class="nav-three"><a href="#noche">NOCHE</a></li>                                                               
                        </ul>  

                        <?php $acu=0; ?>

                        <div id="prueba" align="center">      
                          <div class="list-wrap" align="center">                            
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="manana" >
                              @foreach($S as $sa)
                              <?php $acu = $acu+1; $la="layer".$acu; $muestra= "show('layer".$acu."')";?>
                              <?php $hora=str_replace(":", "", $sa->hora_inicio)?>
                              @if($hora<115959)  
                              <li class="estilo_lista" onclick="{{$muestra}}"> 
                                <b>{{$sa->hora_inicio}}</b> &nbsp;&nbsp;&nbsp;{{$sa->programa->nombre}}
                                <div id="{{$la}}" style="display: none;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">{{$sa->programa->nombre}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->tipo}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->programa->descripcion}}</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                </div>
                              </li>
                              @endif
                              @endforeach                     
                            </ul>                        
                            <!--- tarde -->
                            <ul id="tarde">
                              @foreach($S as $sa)
                              <?php $acu = $acu+1; $la="layer".$acu; $muestra= "show('layer".$acu."')";?>
                              <?php $hora=str_replace(":", "", $sa->hora_inicio)?>
                              @if($hora>=120000 && $hora<=185959)  
                              <li class="estilo_lista" onclick="{{$muestra}}"> 
                                <b>{{$sa->hora_inicio}}</b> &nbsp;&nbsp;&nbsp;{{$sa->programa->nombre}}
                                <div id="{{$la}}" style="display: none;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">{{$sa->programa->nombre}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->tipo}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->programa->descripcion}}</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                </div>
                              </li>
                              @endif
                              @endforeach 
                            </ul>  
                            <!--- noche -->     
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="noche" >
                              @foreach($S as $sa)
                              <?php $acu = $acu+1; $la="layer".$acu; $muestra= "show('layer".$acu."')";?>
                              <?php $hora=str_replace(":", "", $sa->hora_inicio)?>
                              @if($hora>=190000 && $hora<=235959)  
                              <li class="estilo_lista" onclick="{{$muestra}}"> 
                                <b>{{$sa->hora_inicio}}</b> &nbsp;&nbsp;&nbsp;{{$sa->programa->nombre}}
                                <div id="{{$la}}" style="display: none;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">{{$sa->programa->nombre}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->tipo}}</span>
                                    <br> 
                                    <span class="c_tit2">{{$sa->programa->descripcion}}</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                </div>
                              </li>
                              @endif
                              @endforeach
                              <!---->
                            </ul>
                          </div> <!-- END List Wrap -->    
                        </div> <!-- prueba -->
                      </div> <!-- END Organic Tabs (Example One) -->                                  
                    </div>
                  </td>
                  </tr>
                </tbody>              s
              </table>                
            </div>                    
          <!-- box -->
        </div>
      </div>
</section>

@endsection

@section('js')

    <script type="text/javascript">
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 200
            });
    
        });
    </script>
  <script type="text/javascript">
    function show(bloq) {
      obj = document.getElementById(bloq);
     obj.style.display = (obj.style.display=='none') ? 'block' : 'none';
    }
  </script>

@endsection