<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta content="jquery, forumlario dinamico, timersys, tutorial" name="keywords"/>
<title>Timersys </title>
<script type="text/javascript" src="DateTableBootstrap/js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="FormularioDinamico/js/estilo.css">
</head>
    
    
<body>
    <div id="stylized" class="myform" style="margin:20px auto;">
    <form id="form" name="form" method="post" action="index.php">

        <div id="material_comprado"  > </div>  

        <h1>Compra de material</h1>
        <p>Si es necesario a&ntilde;ade el material a comprar</p>
            <div id="div_1">
                    <label>Material de compra
                    <span class="small">A&ntilde;ade los materiales</span>
                    </label>

                <input  type="text"  name="materiales[]"  style="width:200px;" /> 
                <span style="float:left;padding: 8px 0px 8px 8px;">Cantidad:</span> 
                <input type="text"   name="cantidadmateriales[]"  style="width:40px;" />
                <input class="bt_plus" id="1" type="button" value="+" />
                <div class="error_form"></div>
            </div>


            <button type="submit" class="boton">Save</button>
    
        <div class="spacer"></div>
    </form>
</div>
    
    
    
    <script>
    $(document).ready(function() {
	//ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
		$(".bt_plus").each(function (el){
			$(this).bind("click",addField);
                });
    });


function addField(){
// ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número. Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest , así que dejo como seria por si a alguien le hace falta.

var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
document.write(clickID);
// Genero el nuevo numero id
var newID = (clickID+1);
document.write(newID);

// Creo un clon del elemento div que contiene los campos de texto
$newClone = $('#div_'+clickID).clone(true);
document.write($newClone);

//Le asigno el nuevo numero id
$newClone.attr("id",'div_'+newID);
document.write($newClone);

//Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
$newClone.children("input").eq(0).attr("id",'materiales'+newID).val('');

//Borro el valor del segundo campo input(este caso es el campo de cantidad)
$newClone.children("input").eq(1).val('');

//Asigno nuevo id al boton
$newClone.children("input").eq(2).attr("id",newID)

//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));

//Cambio el signo "+" por el signo "-" y le quito el evento addfield
$("#"+clickID).val('-').unbind("click",addField);

//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);					
					   
}


function delRow() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();

}
</script>
    
</body>
</html>