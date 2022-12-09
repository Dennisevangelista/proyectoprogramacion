<?php
  $page_title = 'Nosotros';
  echo '<link rel="stylesheet" type="text/css" href="libs/css/Index.css" />';
  require_once('includes/load.php');

if (isset($_POST['submit']))
        {
            $Nombre   = $_POST['Nombre'];
            $Correo  = $_POST['Correo'];
            $Telefono = $_POST['Telefono'];
            $Mensaje    = $_POST['Mensaje'];

                
            $transaccion = insert("Contacto",$Nombre,$Correo,$Telefono,$Mensaje);
            echo "<script>
            
                        alert('Insertado Correctamente');
            </script>";

        }
?>
<?php include_once('layouts/header.php'); ?>
<meta charset="UTF-8">
<header id="header">
<div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="inicio.php" class="active">Inicio</a></li>
              <li role="presentation"><a href="about.html">Establecimientos</a></li>
              <li role="presentation"><a href="services.html">Equipo</a></li>
              <li role="presentation"><a href="nosotros.php">Nosotros</a></li>
              <li role="presentation"><a href="contacto.php">Contacto</a></li>
            </ul>
          </div>
        </div>
  </header>
   <!-- #fin header -->
   <div class="slideshow-container">
        <div class="mySlides fade2">
            <img src="libs/images/m-slide-1.jpg" style="min-height:40vh;" width="100%" height="240">

            <div class="text">

                <img src="libs/images/ElSaBorBLANCO.png" width="100%" height="100%">
            </div>
        </div>

        <div class="mySlides fade2">
            <img src="libs/images/Slider2.jpg" style="min-height:40vh;" width="100%" height="240">
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align: center;">

        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>

    </div>

    <br>

    <div class="flex-container-row">


        <div class="flex-child">
            <h2 style="font-size:16px;"> <span>QUÉ NOS DIFERENCIA</span>
                <hr>

        </div>

    </div>
    <div class="flex-container-row">

        <div class="flex-child">
            <div class="item">
                <img src="libs/images/breads.svg" class="imgCenter">
            </div>
            <h3>INNOVACIÓN</h3>
            <hr>
            <p>Apostamos por la innovación y el desarrollo de nuevos productos, diferenciales, que destaquen tanto
                por su sabor y calidad como por su fórmula innovadora. También trabajamos en descubrir productos
                funcionales que nos ayuden.</p>

        </div>
        <div class="flex-child">
            <div class="item">
                <img src="libs/images/cakes.svg" class="imgCenter">
            </div>
            <h3>PERSONALIZACIÓN </h3>
            <hr>

            <p>En nuestros establecimientos personalizamos cualquier tipo de dulce, sobre todo nuestras tartas, en
                las que incluimos nombres, fotos, objetos de chocolate y todo lo que quieras.</p>

        </div>

        <div class="flex-child">
            <div class="item">
                <img src="libs/images/home-delivery-service.svg" class="imgCenter">

            </div>
            <h3>PEDIDOS A DOMICILIO </h3>
            <hr>

            <p>Ofrecemos un servicio rápido y seguro para el transporte de nuestros productos al lugar que usted
                desee. Además, de disponer de un servicio a domicilio para llevarte el pan a casa, también
                comercializamos nuestros productos por el resto de la provincia.
                rnote
            </p>
        </div>
    </div>
    </h2>
    <br>
    <hr style="width: 100% !important">
    <br>

    <div class="flex-container-row">


        <div class="flex-child">
            <h2> <span>ENTRADAS DEL BLOG </span>
                <hr>
                <span style="font-size:14px;">Mira de que hablamos en nuestras últimas Entradas del Blog</span>

        </div>


    </div>

    <div class="flex-container-row">
        <div class="slideshow-container">

            <div class="mySlides2 fade2" style="border:none !important;">
                <div class="flex-child">
                    <h2>Panes que tienen su origen en España. Parte 2</h2>

                    <p>Como ya se ha comentado en el blog anterior, existen panes conocidos bajo las Indicaciones
                        Geográficas
                        Protegidas, que es lo [...]</p>
                    <hr>
                    <p><span>28 diciembre, 2019 | Sin Comentarios</span> </p>
                </div>
                <div class="flex-child">
                    <h2>Panes que tienen su origen en España. Parte 1</h2>

                    <p> En España existe bastante cultura de pan y por todo el territorio se puede disfrutar de panes de
                        gran calidad [...] </p>
                    <hr>

                    <p><span>28 diciembre, 2019 | Sin Comentarios</span> </p>
                </div>
                <div class="flex-child">
                    <h2>El pan con pasas</h2>

                    <p> El pan con pasas es típico de la gastronomía alemana y allí se conoce con el nombre de
                        Rosinenbrot,
                        también [...] </p>
                    <hr>

                    <p><span>28 diciembre, 2019 | Sin Comentarios</span> </p>
                </div>
            </div>
            <div class="mySlides2 fade2 " style="border:none !important;">
                <div class="flex-child">
                    <h2>El pan con pasas</h2>

                    <p> El pan con pasas es típico de la gastronomía alemana y allí se conoce con el nombre de
                        Rosinenbrot,
                        también [...] </p>
                    <hr>

                    <p><span>28 diciembre, 2019 | Sin Comentarios</span> </p>
                </div>
                <div class="flex-child">
                    <h2>Pan de molde ¿Te sabes su historia?</h2>

                    <p> Durante milenios, hacer pan, fue parte de la vida doméstica en Estados Unidos. Cerca del año
                        1890 alrededor del 90% [...] </p>
                    <hr>

                    <p><span>29 noviembre, 2019 | Sin Comentarios</span> </p>
                </div>
                <div class="flex-child">
                    <h2>La Masa Madre, preparación y conservación. Parte 2</h2>

                    <p> Para el día número dos se debe agregar azúcar, harina de fuerza y agua. Quizá no se note la
                        diferencia [...] </p>
                    <hr>

                    <p><span>26 octubre, 2019 | Sin Comentarios</span> </p>
                </div>
            </div>


            <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides2(1)">&#10095;</a>
        </div>
    </div>

    <br>
    <hr style="width: 100% !important">

    <div class="flex-container-row"  >


        <div class="flex-child">

            <div style="width:90%;">
            <form  id="myForm"  target="_blank" form action="" method = "POST">
                <h2> <span>CONTACTO </span>

                    <p style="text-align: left !important;">La Panadera es la más creativa, con un equipo que nunca duerme. Dinos algo para que nosotros te respondamos.</p>
         
                    <input type="text" name="Nombre" class="form-control" placeholder="Tu nombre(*)" >
                    <input type="text" name="Correo" class="form-control" placeholder="Tu correo electrònico(*)" >
                    <input type="text" name="Telefono" class="form-control" placeholder="Tu telèfono(*)" >
                    <input type="text" name="Mensaje" class="form-control" placeholder="Tu mensaje(*)" >
                    
               
                             <br>
                   <span style="display: flex;text-align: left;width: 100%;"
                     ><input type="checkbox" class="" id="">He leído y acepto la Política de Privacidad de La Panadera (*)</span>
                    <input type="submit" name="submit" style="margin-top: 10px;" class="btn" id="">
                    </form>
            </div>
        </div>
        <div class="flex-child">
            <div style="width:90%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d567.5992526874301!2d-1.8943031704367914!3d42.3079026686469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa08338a681c5d273!2sLa%20Panadera!5e0!3m2!1ses!2ses!4v1577486768646!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe> 

            </div>
         </div>
    </div>
    <hr style="width: 100% !important">
   
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy;Grupo 2 utp - All right reserved
              </p>
              <div class="credits">
             
                <a href="https://www.youtube.com">Grupo 2 </a> by <a href="https://www.youtube.com">UTP</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php 

include_once('layouts/footer.php');
  echo '<script src="libs/js/Index.js"></script>  ';
     echo '<script src="libs/js/Index2.js"></script>  ';
?>
