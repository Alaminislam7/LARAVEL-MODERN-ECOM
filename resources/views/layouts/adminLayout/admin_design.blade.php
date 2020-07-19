<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Metro Lab</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/bootstrap/css/bootstrap-fileupload.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
   <link href="{{ asset('css/backend_css/style.css') }}" rel="stylesheet" />
   <link href="{{ asset('css/backend_css/style-responsive.css') }}" rel="stylesheet" />
   <link href="{{ asset('css/backend_css/style-default.css') }}" rel="stylesheet" id="style_color" />
   <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">

    @include('layouts.adminLayout.admin_header')
    @include('layouts.adminLayout.admin_sidebar')
    @yield('content')
    @include('layouts.adminLayout.admin_footer')

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   
   <script src="{{ asset('js/backend_js/jquery-1.8.3.min.js') }}"></script>
   <script src="{{ asset('js/backend_js/jquery.nicescroll.js') }}" type="text/javascript"></script>
   <script type="text/javascript" src="{{ asset('assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
   <script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.min.js') }}"></script>
   <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="{{ asset('js/backend_js/excanvas.js') }}"></script>
   <script src="{{ asset('js/backend_js/respond.js') }}"></script>
   <![endif]-->

   <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}" type="text/javascript"></script>
   <script src="{{ asset('js/backend_js/jquery.sparkline.js') }}" type="text/javascript"></script>
   <script src="{{ asset('assets/chart-master/Chart.js') }}"></script>
   <script src="{{ asset('js/backend_js/jquery.scrollTo.min.js') }}"></script>


   <!--common script for all pages-->
   <script src="{{ asset('js/backend_js/common-scripts.js') }}"></script>

   <!--script for this page only-->

   <script src="{{ asset('js/backend_js/easy-pie-chart.js') }}"></script>
   <script src="{{ asset('js/backend_js/sparkline-chart.js') }}"></script>
   <script src="{{ asset('js/backend_js/home-page-calender.js') }}"></script>
   <script src="{{ asset('js/backend_js/home-chartjs.js') }}"></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
   <script src="{{ asset('js/backend_js/custom.form_validation.js') }}"></script>
 


   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>