@extends('Layouts.bootstrap')

@section('head')
@stop

@section('content')

                        <!-- banner start -->
			<div class="banner">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow-boxed">
					<div class="container">

						<!-- slider revolution start -->
						<!-- ================ -->
						<div class="slider-banner-container">
							<div class="slider-banner-2">
								<ul>
									<!-- slide 1 start -->
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Imagen 1">
									
									<!-- main image -->
									<img src="images/a.jpg"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

									<!-- LAYER NR. 1 -->
									<div class="tp-caption default_bg large sfr tp-resizeme"
										data-x="0"
										data-y="70" 
										data-speed="600"
										data-start="1200"
										data-end="9400"
										data-endspeed="600">Bienvenidos a GymCV
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption light_gray_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600">100% comprometidos con vivir sano.
									</div>

									<!-- LAYER NR. 4 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption light_gray_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600">Nuestro desafío es seguir avanzando en la salud y bienestar de nuestra gente.
									</div>

									<!-- LAYER NR. 6 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 7 -->
									<div class="tp-caption light_gray_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600">Entregamos arquitectura acogedora y moderna, con amplios camarines.
									</div>

									<!-- LAYER NR. 8 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 9 -->
									<div class="tp-caption light_gray_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600">Damos soluciones concretas a nuestros alumnos.
									</div>

									<!-- LAYER NR. 10 -->
									<a href="{{URL::to('quienes-somos')}}"><div class="tp-caption dark_gray_bg sfb medium tp-resizeme"
										data-x="0"
										data-y="370" 
										data-speed="600"
										data-start="2400"
										data-end="9400"
										data-endspeed="600">Más información...
                                                                            </div></a>

									<!-- LAYER NR. 11 -->
                                                                        <!--
									<div class="tp-caption sfr tp-resizeme"
										data-x="right"
										data-y="center" 
										data-speed="600"
										data-start="2700"
										data-end="9400"
										data-endspeed="600"><img src="images/slider-1-layer-1.png" alt="">
									</div>-->

									</li>
									<!-- slide 1 end -->

									<!-- slide 2 start -->
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Imagen 2">
									
									<!-- main image -->
									<img src="images/b.jpg"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

									<!-- LAYER NR. 1 -->
									<div class="tp-caption white_bg large sfr tp-resizeme"
										data-x="0"
										data-y="70" 
										data-speed="600"
										data-start="1200"
										data-end="9400"
										data-endspeed="600">¿Qué ofrecemos?
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption default_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600">Asesoría nutricional.
									</div>

									<!-- LAYER NR. 4 -->
									<div class="tp-caption default_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600">Una página web con información al día de nuestras noticias y novedades.
									</div>

									<!-- LAYER NR. 6 -->
									<div class="tp-caption default_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 7 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600">Un servicio web INNOVADOR para poder ver progresos, rutinas, asistencia, entre otros.
									</div>

									<!-- LAYER NR. 8 -->
									<div class="tp-caption default_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 9 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600">El mejor servicio de Personal Training del Mercado.
									</div>

									<!-- LAYER NR. 10 -->
									<a href="{{URL::to('servicios')}}"><div class="tp-caption default_bg sfb medium tp-resizeme"
										data-x="0"
										data-y="370" 
										data-speed="600"
										data-start="2400"
										data-end="9400"
										data-endspeed="600">Y Mucho Más...
                                                                            </div></a>

									<!-- LAYER NR. 11 -->
									<!--<div class="tp-caption sfr tp-resizeme"
										data-x="right"
										data-y="center" 
										data-speed="600"
										data-start="2700"
										data-end="9400"
										data-endspeed="600"><img src="images/slider-1-layer-2.png" alt="">
									</div>-->

									</li>
									<!-- slide 2 end -->

									<!-- slide 3 start -->
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Imagen 3">
									
									<!-- main image -->
									<img src="images/c.jpg"  alt="kenburns"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="115" data-bgpositionend="right center">

									<!-- LAYER NR. 1 -->
									<div class="tp-caption white_bg large sfr tp-resizeme"
										data-x="0"
										data-y="70" 
										data-speed="600"
										data-start="1200"
										data-end="9400"
										data-endspeed="600">Instalaciones y clases
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="170" 
										data-speed="600"
										data-start="1600"
										data-end="9400"
										data-endspeed="600">Sala de pesas.
									</div>

									<!-- LAYER NR. 4 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="220" 
										data-speed="600"
										data-start="1800"
										data-end="9400"
										data-endspeed="600">Sala de cardio.
									</div>

									<!-- LAYER NR. 6 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 7 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="270" 
										data-speed="600"
										data-start="2000"
										data-end="9400"
										data-endspeed="600">Zumba.
									</div>

									<!-- LAYER NR. 8 -->
									<div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
										data-x="0"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600"><i class="icon-check"></i>
									</div>

									<!-- LAYER NR. 9 -->
									<div class="tp-caption white_bg sfb medium tp-resizeme"
										data-x="50"
										data-y="320" 
										data-speed="600"
										data-start="2200"
										data-end="9400"
										data-endspeed="600">Pilates.
									</div>

									<!-- LAYER NR. 10 -->
									<div class="tp-caption dark_gray_bg sfb medium tp-resizeme"
										data-x="0"
										data-y="370" 
										data-speed="600"
										data-start="2400"
										data-end="9400"
										data-endspeed="600">Información de clases...
									</div>

									<!-- LAYER NR. 11 -->
									<div class="tp-caption sfr"
										data-x="right" data-hoffset="-660"
										data-y="center" 
										data-speed="600"
										data-start="2700"
										data-endspeed="600"
										data-autoplay="false"
										data-autoplayonlyfirsttime="false"
										data-nextslideatend="true">
										<div class="embed-responsive embed-responsive-16by9">  
                                                                                    
                                                                                     <iframe class="embed-responsive-item" src='https://www.youtube.com/embed/4YhnexGbTPg?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;' width='640' height='360' style='width:640px;height:360px;'></iframe>
                                                                                    <!--  <iframe class="embed-responsive-item" src='https://www.youtube.com/embed/j5-yKhDd64s?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;' width='640' height='360' style='width:640px;height:360px;'></iframe>-->
                                                                              <!--   <iframe class="embed-responsive-item" src='https://www.youtube.com/embed/VG2IijKgHsc?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;' width='640' height='360' style='width:640px;height:360px;'></iframe>-->
									<!--	<iframe class="embed-responsive-item" src='https://www.youtube.com/embed/8G0M_4a9ewk?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;' width='640' height='360' style='width:640px;height:360px;'></iframe>
									<iframe class="embed-responsive-item" src='https://www.youtube.com/embed/8G0M_4a9ewk' width='640' height='360' style='width:640px;height:360px;'></iframe>	-->
                                                                            </div>
									</div>

									</li>
									<!-- slide 3 end -->

								</ul>
								<div class="tp-bannertimer tp-bottom"></div>
							</div>
						</div>
						<!-- slider revolution end -->
						
					</div>
				</div>
				<!-- slideshow end -->

			</div>              <!-- GALERIA FOTOS -->
			<!-- banner end -->

@stop
