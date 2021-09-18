<!DOCTYPE html>
<html>
    <head>
        <title>Banco Falabella</title>
        <link rel="stylesheet" href="css_nueva.css">

    </head>
    <body>
        <p> <img id ="old" src="https://www.bancofalabella.pe/assets/logo.svg"/> 
        <header>
            <nav>
                <a href="#">TARGETA DE CREDITO</a>
                <a href="#">CREDITOS</a>
                <a href="#">CUENTAS</a>
                <a href="#">CMR PUNTOS</a>
                <a href="#">SEGUROS</a>
                <a href="#">PROMOCIONES</a>
                <a href="https://github.com/0Esteban0/Falabella_Proyecto.git">GitHub</a>
                <a href="https://sites.google.com/view/infraestructuraef/sesi%C3%B3n">Infraestructura EF</a>
                <a href="https://www.google.com/url?q=https://drive.google.com/drive/folders/1OoC6i51YITaN-vX6LgGAaUvlAgLkc7bm?usp%3Dsharing&sa=D&source=hangouts&ust=1627071685241000&usg=AFQjCNFTfSEpDlvMGopbSEXfcadZAT6zew">Proyecto</a>
                <a href="http://20.69.122.48/ESTEBAN-MUNOZ/Home.html">Falabella</a>

            </header>
            </br>
            </br>
            </br>
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="Imagenes/uno.png" style="width:100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="Imagenes/dos.png" style="width:100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="Imagenes/tres.png" style="width:100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="Imagenes/cuatro.png" style="width:100%">
                    <div class="text"></div>
                  </div>
                
                  <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="Imagenes/cinco.png" style="width:100%">
                    <div class="text"></div>
                  </div>
                
                  <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="Imagenes/seis.png" style="width:100%">
                    <div class="text"></div>
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="Imagenes/siete.png" style="width:100%">
                    <div class="text"></div>
                  </div>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              
              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
              </div>
              <script>
                  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}



function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
              </script>
              </br>
            </br>
            </br>
            <div class="noticia">
                <img class="izquierda" src="Imagenes/111.png"><aside>Solicita tus Tarjetas Adicionales 100% online
                    Puedes realizarlo desde la Banca por Internet ingresando con tu Clave Internet.</aside>              </div>
              
              <div class="noticia">
                <aside>¡Tan simple como leer este banner, es crear tu Clave Internet!</aside><img class="derecha" src="Imagenes/222.png">
              </div>
              <div class="noticia">
                <img class="izquierda" src="Imagenes/333.png"><aside>¡Descuentos los 7 días de la semana!
                  Los Gennials aprovechamos los Días Imbatibles con nuestra CMR en Tottus.</aside>              </div>
              
              <div class="noticia">
                <aside>Canjea tus CMR Puntos en línea
                  Canjea productos, vales de descuentos y mucho más.</aside><img class="derecha" src="Imagenes/444.png">
              </div>

              <div class="noticia">
                <img class="izquierda" src="Imagenes/555.png"><aside>¡Descuentos en cientos de establecimientos!
                  Los Gennials disfrutamos más beneficios.</aside>              </div>
              
              <div class="noticia">
                <aside>¡Todo julio aprovecha esta gran descuento!
                  Los Gennials disfrutan con su familia y amigos.</aside><img class="derecha" src="Imagenes/666.png">
              </div>
              <div class="noticia">
                <img class="izquierda" src="Imagenes/777.png"><aside>¡No te pierdas esta oportunidad!
                  Con tu seguro de Auto puedes llevarte una GiftCard para canjear un Smart TV LG de 43” o lo que más quieras.</aside>              </div>
              
              <div class="noticia">
                <aside>Descubre Fpay y paga desde tu celular
                    Descarga la App, afilia tus Tarjetas y paga en Falabella, Sodimac y Tottus</aside><img class="derecha" src="Imagenes/888.png">
              </div>
              <div class="noticia">
                <img class="izquierda" src="Imagenes/999.png"><aside>¡Banco Falabella te acompaña!</aside>              </div>
              
              <div class="noticia">
                <aside>¡Conoce más sobre el nuevo diseño de tu Estado de Cuenta CMR junto a Eddu!</aside><img class="derecha" src="Imagenes/101010.png">
              </div>
              <div class="noticia">
                <img class="izquierda" src="Imagenes/11-11-11.png"><aside>Campaña Abono CTS
                  Revisa todos los medios por donde puedes realizar el abono a tus trabajadores.
                </aside>              </div>
              
              <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">SOBRE BANCO FALABELLA</h5>
<ul class="footer_ul_amrc">
    <li><a href="http://webenlance.com">Quiénes Somos</a></li>
    <li><a href="http://webenlance.com">Memoria Anual</a></li>
    <li><a href="http://webenlance.com">Hechos de Importancia (SMV)</a></li>
    <li><a href="http://webenlance.com">Trabaja con nosotros</a></li>
    <li><a href="http://webenlance.com">Responsabilidad Social</a></li>
    <li><a href="http://webenlance.com">Reporte de Sostenibilidad</a></li>
    <li><a href="http://webenlance.com">Comunicado Covid-19</a></li>
    <li><a href="http://webenlance.com">Extranet</a></li>
    </ul>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">TRANSPARENCIA</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Tasas y tarifa</a></li>
<li><a href="http://webenlance.com">Contratos</a></li>
<li><a href="http://webenlance.com">Fórmulas y ejemplos</a></li>
<li><a href="http://webenlance.com">Estadísticas de reclamos de clientes</a></li>
<li><a href="http://webenlance.com">Información del Sistema Financiero</a></li>
<li><a href="http://webenlance.com">Procedimientos de atención al cliente</a></li>
<li><a href="http://webenlance.com">Buenas Prácticas</a></li>
<li><a href="http://webenlance.com">Política de Privacidad</a></li>
<li><a href="http://webenlance.com">Hoja Informativa Videovigilancia</a></li>
<li><a href="http://webenlance.com">Recomendaciones de Seguridad</a></li>
<li><a href="http://webenlance.com">Simuladores</a></li>
<li><a href="http://webenlance.com">Código Interbancario</a></li>
<li><a href="http://webenlance.com">Canal de integridad</a></li>
<li><a href="http://webenlance.com">Código de ética</a></li>
<li><a href="http://webenlance.com">Términos y Condiciones de Campañas</a></li>
<li><a href="http://webenlance.com">Comprobantes de pago electrónico</a></li>
<li><a href="http://webenlance.com">Política de Prevención del Delito</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<img class="headin5_amrc col_white_amrc pt2" src="https://www.bancofalabella.pe/assets/libro-reclamaciones.png">


<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2"></h5>
<!--headin5_amrc ends here-->

<ul class="social_footer_ul">
    <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-youtube"></i></a></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>

<!--foote_bottom_ul_amrc ends here-->

</footer>


<!-- Crédit to https://bootsnipp.com/snippets/bxDBA -->
        </body>
        </html>