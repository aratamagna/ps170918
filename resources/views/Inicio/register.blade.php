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
    
   <form class="form-horizontal" action="register" method="POST" id="form" name="form">
  <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="formGroupInputSmall">Rut</label>
    <div class="col-sm-10">
       {{Form::input("text", "email", Input::old('email'), array("class" => "input","id"=>"e","maxlength"=>"12","onkeypress"=>"return val(event)"))}}           
       <div class="bg-danger">{{$errors->first('email')}}</div>
    <!--  <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">-->
    </div>
  </div>
  <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
    <div class="col-sm-10">
      <!--<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">-->
       {{Form::input("password", "password",Input::old('password'), array("class" => "input"))}}
             <div class="bg-danger">{{$errors->first('password')}}</div>
    </div>
  </div>
  <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
    <div class="col-sm-10">
      <!--<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">-->
       {{Form::input("password", "repetir_password", Input::old('repetir_password'), array("class" => "input"))}}
            <div class="bg-danger">{{$errors->first('repetir_password')}}</div>
    </div>
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