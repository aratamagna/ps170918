@extends('layouts.bootstrap')

@section('head')
<style>
 .modal-dialog {}
.thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
}
</style>
@stop

@section('content')

<div class="banner">
	
    <div class="container">
    
     
        <br>
    
        <div class="row">
     
            <div class="col-sm-12">
 			
                <div class="panel panel-default"> <!-- Permite crear paneles texto,formularios,videos-->
                    
        	<div class="panel-body">
                    
                <h2><center>Clases</center></h2><br>
                <center><img src="images/clases.png" class="img-rounded" width="550" height="550"></center><br>
                <div class="col-sm-12">
                <p class="text-justify">Nuestro gimnasio ofrece las siguientes clases a las que podrás asistir libremente 
                    una vez que te inscribas:</p>
                <div class="col-sm-6">
                <p class="text-justify"><strong>Yoga:</strong> Esta es una disciplina  física y mental que tiene su origen 
                    en India. En nuestros gimnasios podrás encontrar los elementos necesarios para poder desarrollar este 
                    tipo de ejercicio.</p>
                <p class="text-justify">Si practicas esta disciplina podrás obtener como resultados, si se es constante, 
                    un cuerpo fuerte, flexible y saludable.</p>
                <p class="text-justify">Los beneficios que posee son los siguientes: Fortalecimiento de huesos, agiliza 
                    la mente, combate el estrés, cuida la silueta, entre otros.</p>
                <p>
                <center><img src="images/clase-yoga.png" class="img-rounded" width="350" height="350"></center>    
                <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/HmGWPIx_2OI" >VIDEO</a></center>    
                <p><strong>Pilates:</strong> Método de acondicionamiento físico, creado por Joseph Pilates. Este es un sistema de entrenamiento físico y mental. El objetivo principal de este método no 
                    es la quema de calorías, sino reforzar la musculatura y aumentar el control, fuerza y flexibilidad 
                    de nuestro cuerpo.</p>
                <p>Al igual que Yoga, nuestro gimnasio consta con los elementos para poder realizar 
                    este entrenamiento. </p>
                <center><img src="images/clase-pilate.png" class="img-rounded" width="350" height="350"></center>
                <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/RpKLwxVG6uo" >VIDEO</a></p></center>    
                <p><strong>Zumba:</strong> Esta es una disciplina fitness, que está enfocado por una parte en mantener 
                    un cuerpo saludable, y también desarrollar, fortalecer y dar flexibilidad a nuestro cuerpo.</p>
                <p> El formato de la clase es de acondicionamiento físico que combina baile latino con intervalo 
                    y entrenamiento de resistencia para un entrenamiento rítmico de todo el cuerpo. </p>
                <p>Nuestro gimnasio consta con profesores certificados para liderar grupos que deseen realizar este 
                    ejercicio, que mezcla deporte con baile, dando como resultado horas de diversión.</p>
                <center><img src="images/clase-zumba.png" class="img-rounded" width="350" height="350"></center>
                <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/k2hAuaNBaiY" >VIDEO</a></center>    
                </div>
                
                <div class="col-sm-6">
                    <p><strong>Spinning:</strong> Este es un ejercicio aérobico de piernas, donde el profesor mediante el cambio de 
                        frecuencia de pedaleo, o aumento de resistencia, puede generar todo tipo de intensidades.</p>
                  
                    <center><img src="images/clase-spinning.png" class="img-rounded" width="350" height="350"></center>
                    <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/oTQlQHt55hs" >VIDEO</a></center> 
                    <p><strong>Baile entretenido:</strong> Si está recién comenzando a realizar ejercicio, esta es una buena opción, ya 
                        que no es un ejercicio de alto impacto. Consiste en clases que utilizan pasos de bailes 
                        correspondiente a distintos ritmos, los cuales pueden resultar una muy buena opción para 
                        estar en forma. </p>
                   
                   <center><img src="images/clase-baileentretenido.png" class="img-rounded" width="350" height="350"></center>
                   <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/YPUxAMZ71RI" >VIDEO</a></center>
                   
                   <p><strong>Body combat:</strong> Es coreografiado y está basado en las más variadas artes marciales, pretende 
                       desarrollar la técnica de golpes de Box simultáneamente con el entrenamiento físico de todo el cuerpo, 
                       principalmente en lo que se refiere a resistencia, fuerza, flexibilidad y agilidad.</p>
                   
                   <center><img src="images/clase-bodycombat.png" class="img-rounded" width="350" height="350"></center>
                   <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/QIP0o0ts7HA" >VIDEO</a></center>
                    <p><strong>Taekwondo:</strong> Arte marcial creada en el lejano oriente (Korea), ideal para aprender técnicas de ataque y 
                    defensa personal, desarrollando fuerza, elasticidad, resistencia, motricidad y concentración.</p>
                   
                   <center><img src="images/clase-taekwondo.png" class="img-rounded" width="350" height="350"></center>
                   <center><a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/0X3wVAJ6S5w" >VIDEO</a></center>


                </div>
                
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div>
                            <iframe width="100%" height="350" src=""></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                
                
                










       

         
                </div>
             

                </div>
		</div>
 
            </div>
        
     

            
    </div>
</div> 
</div>

@section('java')
<script>
    function autoPlayYouTubeModal(){
  var trigger = $("body").find('[data-toggle="modal"]');
  trigger.click(function() {
    var theModal = $(this).data( "target" ),
    videoSRC = $(this).attr( "data-theVideo" ), 
    videoSRCauto = videoSRC+"?autoplay=1" ;
    $(theModal+' iframe').attr('src', videoSRCauto);
    $(theModal+' button.close').click(function () {
        $(theModal+' iframe').attr('src', videoSRC);
    });   
  });
}

$(document).ready(function(){
  autoPlayYouTubeModal();
});

$("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});

$('li a').click(function (e) {
    $('#myModal img').attr('src', $(this).attr('data-img-url'));
});










/* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('.carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
  	var id = parseInt(idx);
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	
});
    </script>

@stop

@stop