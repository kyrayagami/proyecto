	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')|Panel de administracion.</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/trumbowyg/ui/trumbowyg.css')}}">	

	<!--inicio externos	-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap_admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/plugins_admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/dist_admin/css/AdminLTE.min.css')}}">	
	<link rel="stylesheet" href="{{asset('plugins/dist_admin/css/skins/_all-skins.min.css')}}">
	<!--fin externos-->

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
	
	<!--inicio scripts externos-->
	<script src="{{asset('plugins/bootstrap_admin/js/bootstrap.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/slimScroll/jquery.slimscroll.min.js')}} "></script>
	<script src="{{asset('plugins/plugins_admin/fastclick/fastclick.js')}} "></script>
	<script src="{{asset('plugins/dist_admin/js/app.min.js')}} "></script>
	<!--fin externos-->

	<!--este llama al pluginchoosen no ingresado aun-->
	@yield('js')
	<!--termina-->
</body>

</html>