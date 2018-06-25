$(document).ready(function() {
            //ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
                    $(".bt_plus").each(function (el){
                            $(this).bind("click",addField);
                    });
        });

        function addField(){
        // ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número. Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest , así que dejo como seria por si a alguien le hace falta.

                    //var MaxInputs       = 8; //Número Maximo de Campos
                    //var contenedor       = $("#contenedor"); //ID del contenedor
                    //var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

                       // var x = $("#div_1 div").length + 1; //27   //40
                        //document.write(x);
        //-a
       var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
                    //document.write(clickID);   //2
                    // Genero el nuevo numero id
                    //clickID=clickID-1;
        //-b          //  document.write(clickID);
        var newID = (clickID+1);//2
                    // document.write(newID); //3

                    // Creo un clon del elemento div que contiene los campos de texto
        //a
        $newClone = $('#div_'+clickID).clone(true);
                    // document.write($newClone);
 
        //b            //Le asigno el nuevo numero id
        $newClone.attr("id",'div_'+newID);
                // document.write($newClone);
      

                //   $newClone.children("#fases_ent").attr("id",'fases_ent'+newID);
                 //  $newClone.children("#dias_sem").attr("id",'dias_sem'+newID);



                   //Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)

        //c
        $newClone.children("input").eq(0).attr("id",newID);
     //    $newClone.children("input").eq(1).val('');
         $newClone.children("input").eq(1).attr("id",'materiales'+newID).val('');
         $newClone.children("input").eq(2).attr("id",'materiales'+newID).val('');
         $newClone.children("select").eq(0).attr("name",'grupomuscular'+newID).val('');
          $newClone.children("select").eq(1).attr("name",'ejercicio'+newID).val('');
         $newClone.children("input").eq(3).attr("id",'materiales'+newID).val('');
         $newClone.children("input").eq(4).attr("id",'materiales'+newID).val('');
       //   $newClone.children("input").eq(2).val('');
        
        // $newClone.children("#fases_ent").attr("id","fase_ent"+newID+"").val('');  
   // $newClone.children("#fases_ent").eq(0).attr("id",'fase_ent'+newID).val('');
   // $newClone.children("#dias_sem").eq(0).attr("id",'fase_ent'+newID).val('');  
      /*   $newClone.children("#fases_ent").eq(1).attr("id",'fase_ent'+newID).val('');  
         $newClone.children("#fases_ent").eq(2).attr("id",'fase_ent'+newID).val('');  
         $newClone.children("#fases_ent").eq(3).attr("id",'fase_ent'+newID).val('');  
         $newClone.children("#fases_ent").eq(4).attr("id",'fase_ent'+newID).val('');  
    */
          //   $("#fases_ent").val($("").val());
      //  $("#fases_ent").val('');
       



          
          
                    // $newClone.children("#grupomuscular option::selected").remove();
                      //  $newClone.children("#grupomuscular").attr("name","grupomuscular["+newID+"]");
                       //  $newClone.children("#ejercicio").attr("name","ejercicio["+newID+"]");

        //d   
      //  $newClone.children("#grupomuscular").attr("id","grupomuscular"+newID+"").val('');
        //e
      //  $newClone.children("#ejercicio").attr("id","ejercicio"+newID+"").val('');
        
        

           
           
        //f   
       // $newClone.children("input").eq(1).val('');
        //g
       // $newClone.children("input").eq(2).val('');
        //   
        //   
        //   
                            //   $newClone.children("select").eq(0).attr("name",'grupomuscular'+newID).val('');
                            //   $newClone.children("select").eq(1).attr("name",'ejercicio'+newID).val('');

                              // $newClone.children("input").eq(3).val('');
                               //$newClone.children("input").eq(2).attr("id",newID)


                                // $('#form_rutina input[id="fases_ent_'+newID+'"]').val('');

                                 //placeholder="Texto '+ FieldCount +'"


                                       //     $(div_1).append('  {{Form::input("text", "fases_ent[]",Input::old("fases_ent[]"), array("class" => "form-control","id"=>"fases_ent_'+newID+'"))}}');

                              //  $(contenedor).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'"/><a href="#" class="eliminar">&times;</a></div>');
                              // $newClone.children("input").eq(1).val('');
                              //  $newClone.children("input").eq(2).val('');
                              //   $newClone.children("input").eq(3).val('');
                              // $newClone.children("input").eq(1).attr("id",'fases_ent'+newID).val('');
                             /*  $newClone.children("input").eq(2).val('');
                               $newClone.children("input").eq(3).val('');
                               $newClone.children("input").eq(4).val('');
                               $newClone.children("input").eq(5).val('');
                               $newClone.children("input").eq(6).val('');
                               $newClone.children("input").eq(7).val('');
                       */


                               //Asigno nuevo id al boton
                               //$newClone.children("input").eq(2).attr("id",newID)
                               //$newClone.children("input").eq(1).attr("id",newID);

                               //Inserto el div clonado y modificado despues del div original
        //h
        $newClone.insertAfter($('#div_'+clickID));

        //i                        //Cambio el signo "+" por el signo "-" y le quito el evento addfield
        $("#"+clickID).val(' Quitar Fase -').unbind("click",addField);

        //j                        //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
        $("#"+clickID).bind("click",delRow);					

        }

        //k
        function delRow() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();

        }
        
/******************************************************************************************************************/
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $(document).ready(function() {
            //ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
                    $(".bt_plus2").each(function (){
                            $(this).bind("click",addField2);
                    });
        });


        function addField2(){
        // ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número. Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest , así que dejo como seria por si a alguien le hace falta.

        var clickID2 = parseInt($(this).parent('div').attr('id').replace('di_',''));
        // Genero el nuevo numero id
        var newID2 = (clickID2+1);
        
        
       
            //agregar campo
           // $(di_500).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'"/><a href="#" class="eliminar">&times;</a></div>');
            //  $(di_500).append('{{ Form::select("grupomuscular[]", [null=>""] + $grupomuscular, Input::old("grupomuscular[]"),array("class" => "form-control","id"=>"grupomuscular_'+newID2+'")) }}');
           

        // Creo un clon del elemento div que contiene los campos de texto
        $newClone2 = $('#di_'+clickID2).clone(true);

        //Le asigno el nuevo numero id
        $newClone2.attr("id",'di_'+newID2);

        //Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
        $newClone2.children("input").eq(0).attr("id",newID2);
        $newClone2.children("input").eq(1).attr("id",'grupomuscular'+newID2).val('');
       // $newClone2.children("input").eq(2).attr("id",'ejercicio'+newID2).val('');






        //Borro el valor del segundo campo input(este caso es el campo de cantidad)
        //$newClone2.children("input").eq(2).val('');

        //Asigno nuevo id al boton
        //$newClone.children("input").eq(2).attr("id",newID)
        //$newClone.children("input").eq(1).attr("id",newID);

        //Inserto el div clonado y modificado despues del div original
        $newClone2.insertAfter($('#di_'+clickID2));

        //Cambio el signo "+" por el signo "-" y le quito el evento addfield
        $("#"+clickID2).val('quitar grupo muscular -').unbind("click",addField2);

        //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
        $("#"+clickID2).bind("click",delRow2);					

        }


        function delRow2() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();

        }
        