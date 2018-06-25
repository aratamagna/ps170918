@extends('layouts.bootstrap')

@section('head')
@stop

@section('content')


<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-6">

<h2>Formulario de Registro de usuarios</h2>
    
   
    
    <form action="register" method="POST" id="form" name="form">
  
        
        <div>
            <label class="cuerpo">Rut</label><br>
            <!--{{Form::input("text", "email", Input::old('email'), array("class" => "input","onblur"=>"this.value = this.value.replace( /^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4'  )","maxlength"=>"9","onkeypress"=>"return validarn(event)"))}}-->
            {{Form::input("text", "email", Input::old('email'), array("class" => "input","id"=>"e","maxlength"=>"12","onkeypress"=>"return val(event)"))}}           
        <!--<input name="email" id="email" type="text" class="form-control"  maxlength="12" onfocus="this.value=''" />
            -->
            <div class="bg-danger">{{$errors->first('email')}}</div>
        <!--  if ($errors->has('rut')) { //si tiene errores mostrar mensaje-->
        </div>
   
        <div>
            <label class="cuerpo">Password:</label><br>
             {{Form::input("password", "password",Input::old('password'), array("class" => "input"))}}
             <div class="bg-danger">{{$errors->first('password')}}</div>
             
        </div>

        <div>
           <label class="cuerpo">Repetir password:</label><br>
            {{Form::input("password", "repetir_password", Input::old('repetir_password'), array("class" => "input"))}}
            <div class="bg-danger">{{$errors->first('repetir_password')}}</div>
        </div> 
     
        <div>
            <br><br><br>
            {{Form::input("hidden", "_token", csrf_token())}}
            {{Form::input("submit", null, "Registrarme", array("class" => "myButton"))}}
        </div>
        
    </form>
      
            </div>
        </div>
    </div>
</div>
    
  
       
                <script type="text/javascript" src="rut/jquery.Rut.js"></script>
                <script type="text/javascript" src="rut/jquery.Rut.min.js"></script>
                <script type="text/javascript" src="rut/jquery-1.11.2.min.js"></script>
                
                <script language="javascript" type="text/javascript"> 
                    $(document).ready(function() {      
                        $('#email').Rut({
                            format_on: 'keyup'
                    });
                  
                  //     $('#e').Rut({           
                  //on_error: function(){ alert('Rut incorrecto');
                  //  document.getElementById("form").reset();},
                  //format_on: 'keyup'
                //});
                
                
                $('#e').Rut({
                        
                on_error: function(){ alert('Rut incorrecto');
                    document.getElementById("form").reset();},
                });
                
    
                });
                    
                </script>

                <script>
function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[0-9kK)]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
</script>
          
               
@stop