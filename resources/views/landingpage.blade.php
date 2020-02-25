
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Archs &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">


    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">linomu@unicauca.edu.co</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+57 3218598601</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class=""><a href="index.html">Satisfacción de Usuario </a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href="#home-section" class="nav-link">Inicio</a>
                    </li>
                    <li class="has-children">
                      <a href="#about-section" class="nav-link">Acerca de nosotros</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#our-team-section" class="nav-link">Equipo</a></li>
                      </ul>
                    </li>

                    <li><a href="#services-section" class="nav-link">Servicios</a></li>
                    <li><a href="#pricing-section" class="nav-link">Acciones</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    @if (Route::has('login'))

                    @auth
                        <li><a href="{{ url('/admin') }}" class="nav-link">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link">Ingresar</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
                        @endif
                    @endauth

            @endif
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/fondo.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">

            <h1 class="text-uppercase">Satisfacción de Usuario</h1>
            <span class="sub-text mb-3 d-block"><em>Creación y realización de encuestas para medir la satisfacción del usuario de una o varias páginas específicas.</em></span>
          </div>
        </div>
      </div>
    </div>





    <div class="site-section about-section" id="about-section">
      <div class="container">
        <div class="row align-items-center mb-5 pb-5">
          <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-4" style="color:#ff5733">Acerca de nosotros</h3>
<<<<<<< HEAD
            <p class="mb-4">Somo un equipo de desarrollo. Estamos formándonos en Ingeniería de Sistemas en la Universidad del Cauca. Nuestro equipo tiene solidas bases en diferentes áreas del desarrollo web, las cuáles aplicamos con su respectivo seguimiento en este sitio web. <br>Nuestros fuertes son: </p>
=======
            <p class="mb-4">Somo un equipo de desarrollo. Estamos formándonos en Ingeniería de Sistemas en la Universidad del Cauca. Nuestro equipo tiene solidas bases en diferentes áreas del desarrollo web, las cuáles aplicamos con su respectivo seguimiento en este sitio web. <br>Somos fuertes en: </p>
>>>>>>> 467a0eb07e642252faf9a6dfad9a40fe329ae7a7
            <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Trabajo en equipo y bajo presión</li>
                <li>Buena comunicación en el equipo</li>
                <li>Capacidad de adaptación al entorno de trabajo</li>
                <li>Aplicación de nuevas tecnologías a la medida que surguen</li>
              </ul>

          </div>
        </div>


      </div>
    </div>


    <div class="site-section" id="our-team-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Conoce nuestro equipo</span>
            <h2 class="font-weight-bold text-black">Zorros Privativos Comunes</h2>
            <p class="mb-5">Somos estudiantes del programa de Ingeniería de Sistemas de la Universidad del Cauca. Cada uno de nosotros cuenta con diferentes conocimientos y actitudes que han hecho de esta aplicación web una realidad.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/Juan.png" alt="Image" class="img-fluid" width="462" height="498">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Juan Felipe Muñoz</h2>
              <span class="sub-title d-block mb-3">Front End</span>
<<<<<<< HEAD
              <p>Decidí estudiar ingeniería porque me gusta administrar sistemas tecnológicos enfocados hacia distintas áreas para encontrar una solución con aplicación en dicha área</p>
=======
              <p>Decidí estudiar ingeniería porque me gusta administrar sistemas tecnológicos enfocados hacia distintas áreas para encontrar una solución con aplicación en esa área</p>
>>>>>>> 467a0eb07e642252faf9a6dfad9a40fe329ae7a7
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/edwar.jpeg" alt="Image" class="img-fluid" width="310" height="200">
                </figure>
                <div class="social">
                  <a href="https://www.facebook.com/edwarjavier.cuasapudquenguan.3"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/javier_cuasapud?s=08"><span class="icon-twitter"></span></a>
                  <a href="https://instagram.com/javiiierse?igshid=12sg03heaz94p"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Edwar Javier Cuasapud</h2>
              <span class="sub-title d-block mb-3">Programador</span>
              <p>Me gusta el desarrollo por qué por medio de la tecnología se puede brindar soluciones al mundo para que sea un mejor lugar</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/lino.png" alt="Image" class="img-fluid"  width="330" height="200">
                </figure>
                <div class="social">
                  <a href="https://www.facebook.com/edwarjavier.cuasapudquenguan.3"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/javier_cuasapud?s=08"><span class="icon-twitter"></span></a>
                  <a href="https://instagram.com/javiiierse?igshid=12sg03heaz94p"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Lino Alejandro Muñoz</h2>
              <span class="sub-title d-block mb-3">Front End & Back End</span>
              <p>Decidí estudiar ingeniería de sistemas porque le apuesto a la tecnología como medio para </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/viviana.jpeg" alt="Image" class="img-fluid"  width="310" height="200">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Viviana Isabella Peña</h2>
              <span class="sub-title d-block mb-3">Diseñadora</span>
              <p>Hola soy Isabella peña tengo 24 años, estudio ingeniería de sistemas porque me apasiona el desarrollo y el trabajo en equipo. Mi rol dentro de este proyecto es el de diseñadora</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/thomas.jpeg" alt="Image" class="img-fluid"  width="270" height="100">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Thomas Jesús Escobar</h2>
              <span class="sub-title d-block mb-3">Requisitos</span>
              <p>Hola soy Thomas Jesús Escobar, tengo 21 años y me gusta mucho la ciberseguridad además del desarrollo de software y soy el ingeniero de requisitos.</p>
            </div>
          </div>





        </div>
      </div>
    </div>

    <div class="site-section" id="pricing-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Descubre que tipo de Acciones puedes hacer</span>
            <h2 class="font-weight-bold text-black">¿Qué rol tienes?</h2>
            <p class="mb-5">Nuestro sistema está diseñado para tres tipos de usuario diferentes, dependiendo de tu rol podrás realizar acciones diferentes.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
              <h3>Usuario</h3>

              <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Responder a encuestas</li>


              </ul>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
              <h3>Evaluador</h3>

              <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Gestionar encuestas</li>
                <li>Visualizar estadísticas por encuesta</li>
                <li>Gestionar perfil</li>


              </ul>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
              <h3>Administrador</h3>

              <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Gestionar  administradores</li>
                <li>Gestionar evaluadores</li>
                <li>Ver encuestas</li>
                <li>Ver estadísticas por encuesta</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </div>




    <div class="site-section" id="faq-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="images/about_2.jpg" alt="Image" class="img-fluid">
          </div>

          <div class="col-lg-6 ml-auto pl-lg-5">
            <span class="sub-title">Pregúntanos! Estaremos complacidos de responderte</span>
            <h2 class="font-weight-bold text-black mb-5">Preguntas comunes</h2>
            <div class="accordion" id="accordionExample">


              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ¿Qué tipo de encuestas puedo encotrar?</a>
                </h2>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Nuestro sistema está diseñado para la gestión de diferentes tipos de encuestas, nuestro desarrolladores se han encargado de hacer esto posible! Actualmente, estamos trabajando un tipo de encuesta denominado EasyAnswer.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cómo es el proceso de encuestas?
                  </a>
                </h2>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>En nuestro sistema encontramos varios tipos de usuario, por tal, tú como usuario solo debes preocuparte por responder a las diferentes preguntas relacionadas con el sitio web en cuestión, nada de crear usuarios y acciones tediosas! Solo marcas tus respuestas y envias! Facil y rápido como nos gusta.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How it works? Please let us know!
                  </a>
                </h2>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Nuestro sistema está pensado para soportar encuestas de todo tipo, es por esto que el número y tipo de preguntas varían de pendiendo de la encuesta en sí misma.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Tengo que pagar por las encuestas que yo haga?
                  </a>
                </h2>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>No! Nunca te cobrares por ninguna encuesta debido a que nuestro sistema está enfocado en la filosofía de software libre.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Puedo crear encuestas aún si soy solo un usuario?
                  </a>
                </h2>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Sí, no importa si solo has llenado encuestas como usuario, también tienes la opción de crear una encuesta siempre y cuando un administrador de agregue como evaluador.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>









    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Servicios</span>
            <h2 class="font-weight-bold text-black">Nuestros servicios</h2>
            <p class="mb-5">Nuestra finalidad es brindarle a las personas una manera fácil y sencilla de manejar y/o gestionar encuestas acerca de una o varias páginas específicas.</p>
          </div>
        </div>

        <div class="row">







          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Gestionar Usuarios</h5>
                Permitir a los usuarios registrarse e ingresar en nuestro sistema con sus datos personales básicos para poder realizar encuestas.
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-measuring display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Gestionar Evaluadores</h5>
                Permitir a los evaluadores  gestionar encuestas y su perfil para posteriormente poder visualizar estadísticas para cada una de las encuestas creadas.
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Gestionar Administradores</h5>
                Permitir a los administradores gestionar otros administradores y evaluadores. Además de eso, se permite ver las encuestas y ver sus propias estadísiticas.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">Acerca de nosotros</h3>
                <p>Somos estudiantes del programa de Ingeniería de Sistemas de la Universidad del Cauca. Cada uno de nosotros cuenta con diferentes conocimientos y actitudes que han hecho de esta aplicación web una realidad.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">


            <div class="mb-5">
              <h3 class="footer-heading mb-4">Navegación</h3>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#home-section">Inicio</a></li>
                  <li><a href="#about-section">Acerca de nosotros</a></li>
                  <li><a href="#services-section">Servicios</a></li>
                  <li><a href="#pricing-section">Acciones</a></li>
                  <li><a href="#faq-section">FAQ</a></li>
                </ul>
              </div>
            </div>

          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="col-md-12">
                <h3 class="footer-heading mb-4">Síguenos en</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>

            <div class="row">

            </div>


          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>
