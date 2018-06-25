<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Test Site</title>
    <script type="text/javascript" src="sha512.js"></script>
    <script type="text/javascript" src="prototype.js"></script>
    <script type="text/javascript">
      Event.observe(window, 'load', function(){
        Event.observe( 'login_button', 'click', formProcess);
      });
      function formProcess(){
        //agregar validaciones
    
        $('login_form').submit();
      }
      function checkEnter(e){
        var codigoCaracter = (e && e.which) ? e.which : event.keyCode;
        if(codigoCaracter == 13) {
          formProcess();
        }
        else {
          return true;
        }
      }
    </script>
  </head>

  <body>
    <form action="index.cgi" autocomplete="off" method="post" id="login_form" name="login_form">
      Email: <input type="text" name="e" id="email" onkeypress="checkEnter(event)" /><br />
      Password: <input type="password" name="p" id="password" onkeypress="checkEnter(event)" /><br />
      <input type="hidden" name="ps" id="secret">
      <input type="button" value="Login" id="login_button" />
    </form>
  </body>
</html>