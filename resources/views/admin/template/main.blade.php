	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')|Panel de administracion.</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/trumbowyg/ui/trumbowyg.css')}}">	

	<!--inicio externos	-->
	<link rel="stylesheet" href="{{asset('plugins/font-awesome-4.5.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap_admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/plugins_admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/dist_admin/css/AdminLTE.min.css')}}">	
	<link rel="stylesheet" href="{{asset('plugins/dist_admin/css/skins/_all-skins.min.css')}}">
	<!--fin externos-->

 	<!--links de la parrilla-->
  	<link rel="stylesheet" type="text/css" href="{{asset('plugins/archivos_admin/css_003.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('plugins/archivos_admin/css.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('plugins/archivos_admin/style_002.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('plugins/archivos_admin/bjqs.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('plugins/archivos_admin/css_002.css')}}">

  	<!---->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">  		
		@include('admin.template.partials.nav')
		@include('admin.template.partials.menu')
		@include('admin.template.partials.footer')

	</div>	

	<script src="{{asset('plugins/jquery/js/jquery-2.1.4.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}" ></script>
	<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
	<script src="{{asset('plugins/trumbowyg/trumbowyg.js')}} "></script>
	


	<script src="{{asset('plugins/bootstrap_admin/js/bootstrap.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/slimScroll/jquery.slimscroll.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/fastclick/fastclick.js')}} "></script>
	<script src="{{asset('plugins/dist_admin/js/app.min.js')}} "></script>
	<!--fin externos-->
	
	<script src="{{asset('plugins/archivos_admin/bjqs-1.js')}}"></script>
	<script src="{{asset('plugins/archivos_admin/organictabs.js')}}"></script>

	
	<!--este llama al js-->
	@yield('js')
	<!--termina-->
</body>

</html>