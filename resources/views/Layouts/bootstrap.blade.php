<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<!--<title>GymCV</title>-->

                    <title>
                        @section('titulo')
                            GymCV
                        @show
                    </title>
		<meta name="description" content="iDea a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<!--<link rel="shortcut icon" href="images/favicon.ico">-->
                <link rel="shortcut icon" href="images/logotsv1.png"  class="img-circle">
                <!--<link rel="shortcut icon" href="images/logo-arriba-sportlife.png" >-->
               <!-- <link rel="shortcut icon" href="images/logo-arriba-energy.png" >-->


		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
		<link href="plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!-- iDea core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<!--<link href="css/skins/red.css" rel="stylesheet">-->
                <link href="css/skins/blue.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="css/custom.css" rel="stylesheet">





                 @yield('head')
	</head>


	<body class="front no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2  col-sm-6">

							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
											<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-top-first end -->

						</div>




                                                <div class="col-xs-10 col-sm-6">


							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">



                                                          @guest
                                                                <!-- header top dropdowns start -->

                                                                <div class="header-top-dropdown">


									<div class="btn-group dropdown">

                                                                        @if (Session::has('login_errors'))
                                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="Button"  ><i class="fa fa-user"></i> Ingresar</button>
                                                                        @elseif (Session::has('login_errors2'))
                                                                         <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="Button"  ><i class="fa fa-user"></i> Ingresar</button>
                                                                        @else
                                                                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ingresar</button>
                                                                        @endif


										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>

                                                                                                @if (Session::has('login_errors'))
                                                                                                <div class="bg-danger">El nombre de usuario o la contraseña no son correctos.</div>
                                                                                                @elseif (Session::has('login_errors2'))
                                                                                                <div class="bg-danger">El nombre de usuario ha sido dado de baja.</div>
                                                                                                @else
                                                                                                <p>Introduzca usuario y contraseña para continuar.</p>
                                                                                                @endif

                                                                                                      <form action="login" method="post" autocomplete="off">

													<div class="form-group has-feedback">
														<label class="control-label">Usuario</label>
								            <input name="email" id="email" type="text" class="form-control"  maxlength="12" onkeypress="return val(event)" onfocus="this.value=''" />
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Contraseña</label>

                                                                                                                <input name="password" type="password" class="form-control" onfocus="this.value=''" />
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
                                                                                                     {{Form::input("hidden", "_token", csrf_token())}}
                                                                                                        {{Form::input("submit", null, "Entrar", array("class" => "btn btn-group btn-dark btn-sm"))}}








												</form>

											</li>
										</ul>
									</div>

								</div>
								<!--  header top dropdowns end -->

                                                          @else


                                                                <div align=right>USUARIO: <b>{{Auth::user()->email}}</b></DIV>

                                                                <!--<font color="white"><DIV ALIGN=right>Usuario: <span><b>{{Auth::user()->email}}</b></span><br></DIV></font>-->
                                                                 <a href="{{URL::route('salir')}}"><font color="red"> <div align=right> Cerrar Sesión</div></font></a>



                                                          @endguest
							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>              <!-- REDES SOCIALES Y LOGIN-->
			<!-- header-top end -->


		        <!-- header -->
			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->

                                                      <div class="logo">

                                                                       <!--  &nbsp; &nbsp;-->
                                                                <!--      <a href="{{URL::to('inicio')}}">-->
                                                                     <!--  <img src="images/logo-190-60-2n-2n.png" >-->
                                                                      <!--   <img src="images/logo-tesis-gymcv3.png" >-->

                                                             <!--  <img src="images/logo-tesis-gymcv5.png" >-->

                                                                 <img src="images/GYMCVF3.png" >
                                                                   <!--<img src="images/logosportlifetrans.png" width="189">-->
                                                                    <!--<img src="images/logosportlifetrans.png" width="105">-->

                                                                <!--<img src="images/energy_vertical_trans.gif" width="70">-->

                                                                <!--      </a>-->

                                                                  <!--  <a href="{{URL::to('inicio')}}">
                                                                        <img src="images/logotsv2.png" width="120" height="1">
                                                                    </a>-->


                                                        </div>

								<!-- name-and-slogan -->
								<div class="site-slogan">
									Comprometidos con la vida sana
                                                                       <!-- Te cambia la vida! -->
								</div>

							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->

                                                                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">


												<ul class="nav navbar-nav navbar-right">
											<!--	<li class="dropdown active">-->

											@guest
                                                                                        <?php


                                                                                        $vista = Route::currentRouteName();
                                                                                        $current = array
                                                                                            (
                                                                                             'index' => '',
                                                                                             'contacto' => '',
                                                                                             'login' => '',
                                                                                             'register' => '',
                                                                                             'profesores' => '',
                                                                                             'horarios' => '',
                                                                                             'clases' => '',
                                                                                             'quienes-somos' => '',
                                                                                             'nutricion' => '',
                                                                                             'servicios' => '',
                                                                                            );
                                                                                        if ($vista == '' || $vista == 'index')
                                                                                        {
                                                                                            $current['index'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'contacto')
                                                                                        {
                                                                                            $current['contacto'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'quienes-somos')
                                                                                        {
                                                                                            $current['quienes-somos'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'servicios')
                                                                                        {
                                                                                            $current['servicios'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'nutricion')
                                                                                        {
                                                                                            $current['nutricion'] = 'active';
                                                                                            $current['servicios'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'clases')
                                                                                        {
                                                                                            $current['clases'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'horarios')
                                                                                        {
                                                                                            $current['horarios'] = 'active';
                                                                                            $current['clases'] = 'active';
                                                                                        }
                                                                                        else if ($vista == 'profesores')
                                                                                        {
                                                                                            $current['profesores'] = 'active';
                                                                                            $current['clases'] = 'active';
                                                                                        }
                                                                                        ?>




													<!--<li class="active">-->
                                                                                                        <li class="{{$current['index']}}">
														<a href="{{URL::to('')}}">Inicio</a>
													</li>
													<li class="{{$current['quienes-somos']}}">
														<a href="{{URL::to('quienes-somos')}}">¿Quiénes somos?</a>
													</li>
                                                                                                        <li class="dropdown {{$current['servicios']}}">
														<a href="{{URL::to('servicios')}}" class="dropdown-toggle" data-toggle="dropdown">Servicios</a>
														  <ul class="dropdown-menu">
															<li class="{{$current['nutricion']}}"><a href="{{URL::to('nutricion')}}">Nutrición</a></li>
														</ul>
													</li>
													<!--<li class="dropdown">-->
                                                                                                        <li class="dropdown {{$current['clases']}}">
														<a href="{{URL::to('clases')}}" class="dropdown-toggle" data-toggle="dropdown">Clases</a>
														<ul class="dropdown-menu">
															<li class="{{$current['horarios']}}"><a href="{{URL::to('horarios')}}">Horarios</a></li>
															<li class="{{$current['profesores']}}"><a href="{{URL::to('profesores')}}">Entrenadores</a></li>
														</ul>
													</li>

													 <li class="{{$current['contacto']}}">
														<a href="{{URL::route('contacto')}}" >Contacto</a>
													</li>

				<!-- mega-menu start -->

@else
                                                                                <?php

                                                                                                                 $tip_user=Auth::user()->tipousuario_id;


                                                                                                                   switch($tip_user){
                                                                                                                    case 3:
                                                                                                                        {
                                                                                                                          $vista = Route::currentRouteName();
                                                                                                                            $current = array
                                                                                                                                (
                                                                                                                                 'cliente' => '',
                                                                                                                                 'evaluacion_personal' => '',
                                                                                                                                 'datos_cliente' => '',
                                                                                                                                 'index' => '',
                                                                                                                                );
                                                                                                                            if ($vista == 'cliente')
                                                                                                                            {
                                                                                                                                $current['cliente'] = 'active';
                                                                                                                            }
                                                                                                                             else if ($vista == 'evaluacion_personal')
                                                                                                                            {
                                                                                                                                $current['evaluacion_personal'] = 'active';
                                                                                                                                $current['cliente'] = 'active';
                                                                                                                            }
                                                                                                                             else if ($vista == 'datos_cliente')
                                                                                                                            {
                                                                                                                                $current['datos_cliente'] = 'active';
                                                                                                                            }
                                                                                                                // return View::make('ClienteController.cliente');
                                                                                                                            ?>

                                                                                                                        <li class="{{$current['cliente']}}">
                                                                                                                        <a href="{{URL::to('cliente')}}"  >Inicio</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown {{$current['datos_cliente']}}">
                                                                                                                                    <a href="{{URL::to('datos_cliente')}}" class="dropdown-toggle" data-toggle="dropdown">Cliente</a>
                                                                                                                                    <ul class="dropdown-menu">
                                                                                                                                        <li class=""><a href="">Asistencia</a></li>
                                                                                                                                    </ul>
                                                                                                                        </li>

                                                                                                                        <?php

                                                                                                                            break;}
                                                                                                                    case 2:
                                                                                                                        {
                                                                                                                        $vista = Route::currentRouteName();
                                                                                                                            $current = array
                                                                                                                                (
                                                                                                                                'entrenador' => '',
                                                                                                                                'evaluacion' => '',
                                                                                                                                'rutina' => '',
                                                                                                                                'gestion_rutina' => '',
                                                                                                                                'datos_entrenador' => '',
                                                                                                                                'mb_grupomuscular'=>'',
                                                                                                                                'mb_ejercicio'=>'',
                                                                                                                                'mbasico_entrenador'=>'',
                                                                                                                                'clientes'=>'',

                                                                                                                                );
                                                                                                                            if ($vista == 'entrenador')
                                                                                                                            {
                                                                                                                                $current['entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'evaluacion')
                                                                                                                            {
                                                                                                                                $current['entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'gestion_rutina')
                                                                                                                            {
                                                                                                                                $current['gestion_rutina'] = 'active';
                                                                                                                                $current['datos_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'clientes')
                                                                                                                            {
                                                                                                                                $current['clientes'] = 'active';
                                                                                                                                $current['datos_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'datos_entrenador')
                                                                                                                            {
                                                                                                                                $current['datos_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mb_grupomuscular')
                                                                                                                            {
                                                                                                                                $current['mb_grupomuscular'] = 'active';
                                                                                                                                $current['mbasico_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mb_ejercicio')
                                                                                                                            {
                                                                                                                                $current['mb_ejercicio'] = 'active';
                                                                                                                                $current['mbasico_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mbasico_entrenador')
                                                                                                                            {
                                                                                                                                $current['mbasico_entrenador'] = 'active';
                                                                                                                            }
                                                                                                                        ?>

                                                                                                                        <li class="{{$current['entrenador']}}">
                                                                                                                        <a href="{{URL::to('entrenador')}}"  >Inicio</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown {{$current['mbasico_entrenador']}}">
                                                                                                                                    <a href="{{URL::to('mbasico_entrenador')}}" class="dropdown-toggle" data-toggle="dropdown">Mantenedor Básico</a>
                                                                                                                                    <ul class="dropdown-menu">
                                                                                                                                        <li class="{{$current['mb_grupomuscular']}}"><a href="{{URL::route('mb_grupomuscular')}}">Grupo Muscular</a></li>
                                                                                                                                        <li class="{{$current['mb_ejercicio']}}"><a href="{{URL::route('mb_ejercicio')}}">Ejercicio</a></li>
                                                                                                                                    </ul>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown {{$current['datos_entrenador']}}">
                                                                                                                                <a href="{{URL::to('datos_entrenador')}}" class="dropdown-toggle" data-toggle="dropdown">Entrenador</a>
                                                                                                                                  <ul class="dropdown-menu">
                                                                                                                                        <li class="{{$current['gestion_rutina']}}"><a href="{{URL::to('gestion_rutina')}}">Gestión Rutina</a></li>
                                                                                                                                        <li class="{{$current['clientes']}}"><a href="{{URL::to('clientes')}}">Clientes</a></li>
                                                                                                                                        <!--<li><a href="index-2.html">Ver Progreso</a></li>-->
                                                                                                                                </ul>
                                                                                                                        </li>

                                                                                                                        <?php

                                                                                                                            break;}
                                                                                                                    default:
                                                                                                                        {
                                                                                                                          $vista = Route::currentRouteName();
                                                                                                                            $current = array
                                                                                                                                (

                                                                                                                                'administrador' => '',
                                                                                                                                'gestion_entrenador'=>'',
                                                                                                                                'gestion_cliente'=>'',
                                                                                                                                'mb_region'=>'',
                                                                                                                                'mb_comuna'=>'',
                                                                                                                                'cant_personas'=>'',
                                                                                                                                'cant_clientes_ent'=>'',
                                                                                                                                'mbasico_administrador'=>'',
                                                                                                                                'reportes'=>'',

                                                                                                                                 //'login' => '',
                                                                                                                                 //'register' => '',
                                                                                                                                );

                                                                                                                            if ($vista == 'administrador')
                                                                                                                            {
                                                                                                                                $current['administrador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mbasico_administrador')
                                                                                                                            {
                                                                                                                                $current['mbasico_administrador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mb_region')
                                                                                                                            {
                                                                                                                                $current['mb_region'] = 'active';
                                                                                                                                $current['mbasico_administrador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'mb_comuna')
                                                                                                                            {
                                                                                                                                $current['mb_comuna'] = 'active';
                                                                                                                                $current['mbasico_administrador'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'reportes')
                                                                                                                            {
                                                                                                                                $current['reportes'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'cant_personas')
                                                                                                                            {
                                                                                                                                $current['cant_personas'] = 'active';
                                                                                                                                $current['reportes'] = 'active';
                                                                                                                            }
                                                                                                                            else if ($vista == 'cant_clientes_ent')
                                                                                                                            {
                                                                                                                                $current['cant_clientes_ent'] = 'active';
                                                                                                                                $current['reportes'] = 'active';
                                                                                                                            }

                                                                                                                        ?>

                                                                                                                        <li class="{{$current['administrador']}}">
                                                                                                                        <a href="{{URL::route('administrador')}}"  >Inicio</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown {{$current['mbasico_administrador']}}">
                                                                                                                                <a  href="{{URL::route('mbasico_administrador')}}" class="dropdown-toggle" data-toggle="dropdown">Mantenedor Básico</a>
                                                                                                                                    <ul class="dropdown-menu">
                                                                                                                                        <li class="{{$current['mb_region']}}"><a href="{{URL::route('mb_region')}}">Region</a></li>
                                                                                                                                        <li class="{{$current['mb_comuna']}}"><a href="{{URL::route('mb_comuna')}}">Comuna</a></li>
                                                                                                                                    </ul>
                                                                                                                        </li>

                                                                                                                        <li class="dropdown {{$current['reportes']}}">
                                                                                                                                    <a href="{{URL::route('reportes')}}" class="dropdown-toggle" data-toggle="dropdown">Reportes</a>
                                                                                                                                    <ul class="dropdown-menu">
                                                                                                                                        <li class="{{$current['cant_personas']}}"><a href="{{URL::route('cant_personas')}}">Cantidad usuarios</a></li>
                                                                                                                                        <li class="{{$current['cant_clientes_ent']}}"><a href="{{URL::route('cant_clientes_ent')}}">Clientes por cada entrenador</a></li>
                                                                                                                                    </ul>
                                                                                                                        </li>

                                                                                                                        <?php
                                                                                                                            break;}

                                                                                                                   }


                                                                                ?>
																																								@endguest



												</ul>

											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>               <!-- MENU PRINCIPAL -->
			<!-- header end -->



                 <!--      <div class="container">-->
                            @yield('content')
                        <!--</div>-->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">


				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
                                                            <p>Copyright © 2015 GYM CV S.A..</p>
							</div>
                                                        <div class="col-md-6">
                                                           <p class="text-right"> Todos Los Derechos Reservados.</p>
							</div>

						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>


                <script type="text/javascript" src="rut/jquery.Rut.js"></script>
                <script type="text/javascript" src="rut/jquery.Rut.min.js"></script>

                <script language="javascript" type="text/javascript">
                    $(document).ready(function() {
                        $('#email').Rut({
                          //  format_on: 'keyup'
                    });
                    });
                </script>

                <script>
                function val(email) {
                    tecla = (document.all) ? email.keyCode : email.which;
                    if (tecla==8) return true;
                    patron =/[0-9kK)]/;
                    te = String.fromCharCode(tecla);
                    return patron.test(te);
                }
                </script>

                <script>
                var obj = document.getElementById("Button");
                if (obj){
                   obj.click();
                }
                </script>



                @yield('java')




	</body>
</html>
