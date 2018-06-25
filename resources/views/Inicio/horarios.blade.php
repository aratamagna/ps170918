@extends('layouts.bootstrap')

@section('head')
  
  <style>
.table td {
text-align: center;   
}
.table th {
   text-align: center;   
}
</style>                     

@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">
                <center><h2>Horarios</h2></center> 
               <!-- <table class="table table-bordered">-->
                <div class="table-responsive">   
                    <table class="table table-striped table-bordered">
                    <thead>
                            <tr>
                                <th>Clases</th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miércoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Baile entretenido</td>
                                <td>08:00 - 09:00 <br>Patricia Videla<br><br>20:00 - 21:00 <br>Jaime Vera</td>
                                <td>20:00 - 21:00 <br>Jaime Vera</td>
                                <td>08:00 - 09:00 <br>Patricia Videla<br><br>20:00 - 21:00 <br>Jaime Vera</td>
                                <td>20:00 - 21:00 <br>Jaime Vera</td>
                                <td>08:00 - 09:00 <br>Patricia Videla<br><br>20:00 - 21:00 <br>Jaime Vera</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Body combat</td>
                                <td></td>
                                <td>18:00 - 19:00 <br>Patricio Silva</td>
                                <td></td>
                                <td>18:00 - 19:00 <br>Patricio Silva</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pilates</td>
                                <td>14:00 - 15:00 <br>Isidora Vásquez<br><br>18:00 - 19:00 <br>Francisca Pinto</td>
                                <td>13:00 - 14:00 <br>Leonardo Bravo<br><br>19:00 - 20:00 <br>Leonardo Bravo</td>
                                <td>14:00 - 15:00 <br>Isidora Vásquez<br><br>19:00 - 20:00 <br>Leonardo Bravo</td>
                                <td>13:00 - 14:00 <br>Leonardo Bravo<br><br>19:00 - 20:00 <br>Leonardo Bravo</td>
                                <td>14:00 - 15:00 <br>Isidora Vásquez<br><br>18:00 - 19:00 <br>Francisca Pinto</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Spinning</td>
                                <td>08:30 - 09:30 <br>Joaquín Acosta<br><br>09:35 - 10:35 <br>Joaquín Acosta<br><br>20:35 - 21:45 <br>Sebastián Márquez</td>
                                <td></td>
                                <td>08:30 - 09:30 <br>Joaquín Acosta<br><br>09:35 - 10:35 <br>Joaquín Acosta<br><br>20:35 - 21:45 <br>Sebastián Márquez</td>
                                <td></td>
                                <td>08:30 - 09:30 <br>Joaquín Acosta<br><br>09:35 - 10:35 <br>Joaquín Acosta<br><br>20:35 - 21:45 <br>Sebastián Márquez</td>
                                <td>08:30 - 09:30 <br>Sebastián Márquez<br><br>09:35 - 10:35 <br>Sebastián Márquez</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taekwondo</td>
                                <td></td>
                                <td>10:00 - 11:00 <br>Carlos Sánchez<br><br>18:00 - 19:00 <br>Pedro Fuentes</td>
                                <td></td>
                                <td>10:00 - 11:00 <br>Carlos Sánchez<br><br>18:00 - 19:00 <br>Pedro Fuentes<br><br>19:00 - 20:00 <br>Ismael Vergara</td>
                                <td></td>
                                <td>10:00 - 11:00 <br>Ismael Vergara</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Yoga</td>
                                <td>10:30 - 11:30 <br>Isidora Vásquez<br><br>20:00 - 21:00 <br>Camila Rubio</td>
                                <td></td>
                                <td>20:00 - 21:00 <br>Camila Rubio</td>
                                <td></td>
                                <td>10:30 - 11:30 <br>Isidora Vásquez<br><br>20:00 - 21:00 <br>Camila Rubio</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Zumba</td>
                                <td>09:00 - 10:00 <br>Macarena Vidal<br><br>19:00 - 20:00 <br>Nicole Contreras</td>
                                <td>10:00 - 11:00 <br>Ignacio Sepulveda</td>
                                <td>09:00 - 10:00 <br>Macarena Vidal<br><br>19:00 - 20:00 <br>Nicole Contreras</td>
                                <td>10:00 - 11:00 <br>Ignacio Sepulveda</td>
                                <td>09:00 - 10:00 <br>Macarena Vidal<br><br>19:00 - 20:00 <br>Nicole Contreras</td>
                                <td>09:00 - 10:00 <br>Nicole Contreras</td>
                                <td></td>
                            </tr>
                          
                    </tbody>
                </table>
                </div>    
              
            </div>
        </div>
    </div>
</div>
@stop
