                $(document).ready(function() {

                    var MaxInputs           = 8; //Número Maximo de Campos
                    var fase_entrenamiento  = $("#fase_entrenamiento");
                    var dia_semana          = $("#dia_semana");
                    var grupo_muscular      = $("#grupo_muscular");
                    var ejercicio           = $("#ejercicio");
                    var series              = $("#series");
                    var repeticiones      = $("#repeticiones");

                    var completar      = $("#completar");

                    var contenedor       = $("#contenedor"); //ID del contenedor
                    var AddButton       = $("#agregarFaseEntrenamiento"); //ID del Botón Agregar

                    var a = $("#fase_entrenamiento div").length + 1;  //4
                    var b = $("#dia_semana div").length + 1;
                    var c = $("#grupo_muscular div").length + 1;       //5
                    var d = $("#ejercicio div").length + 1;
                    var e = $("#series div").length + 1;
                    var f = $("#repeticiones div").length + 1;

                    var g = $("#completar div").length + 1;

                    var FieldCount = a-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                

                    //document.write(FieldCount);

                        $(AddButton).click(function (e) {
                            if(a <= MaxInputs) //max input box allowed
                            {
                                FieldCount++;

$(completar).append('<div class="ja">\n\
                        <a href="#" class="eliminar">&times;</a><br> \n\
                                <div class="col-md-6">\n\
                                    <div class="form-group">\n\
                                        <label for="fases_ent'+FieldCount+'">*Fases del entrenamiento</label>\n\
                                        <input type="text" class="form-control" name="fases_ent[]" id="fases_ent'+FieldCount+'" placeholder="fases_ent'+FieldCount+' ">\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-6">\n\
                                    <div class="form-group">\n\
                                        <label for="dias_sem">*Días de la semana</label>\n\
                                        <input type="text" class="form-control" name="dias_sem[]" id="dias_sem'+FieldCount+'" placeholder="dias_sem'+FieldCount+'"/>\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-3">\n\
                                    <div class="form-group">\n\
                                         <label for="grupomuscular">*Grupo Muscular</label>\n\
                                         <div class="selectpicker">\n\
                                            <select name="grupomuscular'+FieldCount+'" id="grupomuscular'+FieldCount+'" class="form-control">\n\
                                                <option value=""></option>\n\
                                                @foreach($grupomusculares as $grupomuscular)\n\
                                                <option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>\n\
                                                @endforeach\n\
                                            </select>\n\
                                         </div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-3">\n\
                                    <div class="form-group">\n\
                                        <label for="ejercicio'+FieldCount+'">*Ejercicio</label>\n\
                                         <select name="ejercicio[]" id="ejercicio'+FieldCount+'" class="form-control">\n\
                                            <option value=""></option>\n\
                                        </select>\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-2">\n\
                                    <div class="form-group">\n\
                                        <label for="series'+FieldCount+'">*Series</label>\n\
                                         <input type="text" class="form-control" name="series[]" id="series'+FieldCount+'" placeholder="series'+FieldCount+' ">\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-2">\n\
                                    <div class="form-group">\n\
                                        <label for="repeticiones'+FieldCount+'">*Repeticiones</label>\n\
                                         <input type="text" class="form-control" name="repeticiones[]" id="repeticiones'+FieldCount+'" placeholder="repeticiones'+FieldCount+' ">\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
                                <div class="col-md-2">\n\
                                    <div class="form-group">\n\
                                        <label for="descanso'+FieldCount+'">*Descanso (minutos)</label>\n\
                                         <input type="text" class="form-control" name="descanso[]" id="descanso'+FieldCount+'" placeholder="descanso'+FieldCount+' ">\n\
                                    </div>\n\
                                        <div class="bg-danger"></div>\n\
                                    </div>\n\
                                </div>\n\
</div>');

a++; //text box increment
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar", function(e){ //click en eliminar campo
                            if( a > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a--;
                            }
                            return false;
                        });
                    });