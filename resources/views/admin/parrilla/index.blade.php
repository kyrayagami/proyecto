@extends('admin.template.main')

@section('title', 'Parrila')

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
                      <button id="#" type="button" class="btn btn-block bg-yellow btn-default">Domingo</button>
                      <button id="#" type="button" class="btn btn-block bg-green btn-default">Lunes</button>   
                      <button id="#" type="button" class="btn btn-block bg-aqua btn-default">Martes</button>
                      <button id="#" type="button" class="btn btn-block bg-light-blue btn-default">Miercoles</button>
                      <button id="#" type="button" class="btn btn-block bg-red btn-default">Jueves</button>
                      <button id="#" type="button" class="btn btn-block bg-purple btn-default">Viernes</button>
                      <button id="#" type="button" class="btn btn-block bg-orange btn-default">Sabado</button>    
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
                        <div id="prueba" align="center">      
                          <div class="list-wrap" align="center">                            
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="manana" >
                              
                              <li class="estilo_lista" onclick="show('layer1')"> 
                                <b>11:00:52</b> &nbsp;&nbsp;&nbsp;mañana
                                <div id="layer1" style="display: block;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">nombre</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                  </div>
                              </li>         
                            </ul>                        
                            <!--- tarde -->
                            <ul id="tarde">
                              <li class="estilo_lista" onclick="show('layer2')"> 
                                <b>13:00:52</b> &nbsp;&nbsp;&nbsp;tarde
                                <div id="layer2" style="display: none;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">nombre</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                  </div>
                              </li>         
                            </ul>                       
                            </ul>  
                            <!--- noche -->     
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="noche" >
                            <li class="estilo_lista" onclick="show('layer3')"> 
                                <b>11:00:52</b> &nbsp;&nbsp;&nbsp;noche
                                <div id="layer3" style="display: none;" class="layer"> 
                                <img src="{{asset('plugins/dist_admin/img/photo3.jpg')}}" hspace="0" vspace="0" width="200" height="133" border="0">
                                <img src="{{asset('plugins/dist_admin/img/flecha-left.png')}}" hspace="0" vspace="0" width="10" height="133" border="0">
                                  <div class="sub-layer"> 
                                    <p> 
                                    <span class="c_tit">nombre</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br> 
                                    <span class="c_tit2">datos</span>
                                    <br>
                                    </p>
                                    <p></p>
                                  </div> 
                                  </div>
                              </li>         
                            </ul> 
                            <!---->
                            </ul>
                          </div> <!-- END List Wrap -->    
                        </div> <!-- prueba -->
                      </div> <!-- END Organic Tabs (Example One) -->                                  
                    </div>
                  </td>
                  </tr>
                </tbody>              
              </table>                
            </div>                    
          <!-- box -->
        </div>
      </div>
      </div>
</section>

@endsection

@section('js')

    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 200
            });
    
        });
    </script>
  <script>
    function show(bloq) {
      obj = document.getElementById(bloq);
     obj.style.display = (obj.style.display=='none') ? 'block' : 'none';
    }
  </script>
<!--fin del s


@endsection