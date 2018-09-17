@extends('layouts.bootstrap')

@section('head')

@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">


    

                    <div class="row">
                                <div class="col-sm-6">
					<div class="panel panel-default">

					  <div class="panel-body">
                                           <!--   <img src="images/entrenadores.png" height="300" alt="..." class="img-rounded">
                                              <img src="images/entrenadores.png" height="300" alt="..." class="img-circle">-->
                                              <a href="{{URL::route('cant_personas')}}"><img src="images/reporte1.png"  alt="..." class="img-thumbnail"></a>
					  </div>
                                            <div class="panel-footer"><h4><center>CANTIDAD USUARIOS</center></h4></div>
					</div>
				</div>
                                <div class="col-sm-6">
					<div class="panel panel-default">
					  <div class="panel-body">
                                              <a href="{{URL::route('cant_clientes_ent')}}"><img src="images/reporte2.png" alt="..." class="img-thumbnail"></a>

					  </div>
					  <div class="panel-footer"><h4><center>CLIENTES POR CADA ENTRENADOR</center></h4></div>
					</div>
				</div>
                    </div>


            </div>
        </div>
    </div>
</div>

@stop
