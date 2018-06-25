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
                                              <a href="{{URL::route('gestion_entrenador')}}"><img src="images/entrenadores2.png"  alt="..." class="img-thumbnail"></a>
					  </div>
                                            <div class="panel-footer"><h4><center>ENTRENADORES</center></h4></div>
					</div>
				</div>
                                <div class="col-sm-6">
					<div class="panel panel-default">
					  <div class="panel-body">
                                              <a href="{{URL::route('gestion_cliente')}}"><img src="images/clientes.jpg" alt="..." class="img-thumbnail"></a>

					  </div>
					  <div class="panel-footer"><h4><center>CLIENTES</center></h4></div>
					</div>
				</div>
                    </div>


            </div>
        </div>
    </div>
</div>

@stop
