<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('plugins/dist_admin/img/avatar5.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrador</p>          
       </div>
    </div>      
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a id="#" href="{{route('admin.horarios.index')}}">
            <i class="fa fa-circle-o"></i> 
            <span>Administrar Horarios</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>       
        <li>
          <a id="#" href="{{route('admin.categorias.index')}}"> 
            <i class="fa fa-reddit-square"></i>
            <span>Categoria</span>          
          </a>
        </li>
        <li>
          <a id="#" href="{{route('admin.conductores.index')}}"> 
            <i class="fa fa-fw fa-user-plus"></i>
            <span>Conductor</span>          
          </a>
        </li>
        <li>
          <a id="#" href="{{route('admin.productores.index')}}"> 
            <i class="fa fa-user"></i>
            <span>Productor</span>          
          </a>
        </li>
        <li>
          <a id="#" href="{{route('admin.programas.index')}}"> 
            <i class="fa fa-fw fa-file-movie-o"></i>
            <span>Programa</span>          
          </a>
        </li>
        <li>         
          <a href="{{route('admin.impresion.index')}}">
            <i class="fa fa-fw fa-file-archive-o"></i> 
            <span>Reporte Horarios</span>
          </a>
        </li>  
        <li>         
          <a  href="{{route('admin.tags.index')}}">
            <i class="glyphicon glyphicon-tags"></i> 
            <span> Tags</span>
          </a>
        </li> 
        <li>    
        <?php
          $dia=date('w');
        ?>               
          <a id="#" href="{{route('admin.parrilla.edit',$dia)}}">
            <i class="fa fa-th"></i> 
            <span> Horarios de Programas</span>
          </a>
        </li>                                
    </ul>      
  </section>    
</aside>

<div class="content-wrapper" name="div_dinamico" id="div_dinamico">
  <section class="content-header">  
    <h1 align="left">@yield('title','default')</h1>
  </section>      
  <section class="content">     
    @include('flash::message')      
    @yield('content')
    <!--finaliza-->
  </section>
</div>