
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
                  <span class="d-none d-md-inline-block">info@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
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
                    <li>
                      <a href="#projects-section" class="nav-link">Projects</a>
                    </li>
                    
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#pricing-section" class="nav-link">Acciones</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    @if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/admin') }}" class="nav-link">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
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
            <span class="sub-text mb-3 d-block"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam molestiae ipsam, atque.</em></span>
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
            <span class="sub-title">Learn To Know</span>
            <h3 class="mb-4">Acerca de nosotros</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fuga ipsum commodi aliquid aspernatur reiciendis enim cum voluptas id itaque, asperiores modi, voluptatibus sed voluptate nulla et ratione aliquam! Quaerat.</p>
            <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Asperiores modi sed</li>
                <li>Enim cum voluptas</li>
                <li>Commodi aliquid aspernatur</li>
                <li>Cupiditate fuga ipsum commodi</li>
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
              <p>Decidí estudiar ingeniería porque me gusta administrar sistemas tecnológicos enfocados hacia distintas áreas para encontrar una solución con aplicación en ese área</p>
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
              <h3>Encuestador</h3>
              
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
                <li>Gestionar encuestadores</li>
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
            <span class="sub-title">Pregúntanos! Estamos felices de responderte</span>
            <h2 class="font-weight-bold text-black mb-5">Preguntas comunes</h2>
            <div class="accordion" id="accordionExample">
              

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ¿Qué tipo de encuestas puedo encotrar?</a>
                </h2>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Nuestro sistema está diseñado para la gestión de diferentes tipos de encuestas, nuestro desarrolladores se han encargado de hacer esto posible!. Actualmente, estamos trabajando un tipo de encuesta denominado EasyAnswer. </p>
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
                    <p>En nuestro sistema encontramos varios tipos de usuario, por tal, tú como usuario solo debes preocuparte por responder a las diferentes preguntas relacionadas con el sitio web en cuestión, nada de crear usuarios y acciones tediosas! Solo marcas tus respeustas y envias! Facil y rápido como nos gusta.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum et dolorum libero consequuntur facere molestias beatae quod labore quidem ad quasi eius pariatur quae nam quo soluta optio dicta, doloribus ullam fugit nulla! Itaque necessitatibus eum sed quam eos id!</p>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Is it free?
                  </a>
                </h2>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quos incidunt, perspiciatis, ad saepe, magnam error adipisci vitae ut provident alias! Odio debitis error ipsum molestiae voluptas accusantium quibusdam animi, soluta explicabo asperiores aliquid, modi natus suscipit deleniti. Corrupti, autem.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Where to find you? Where is your location?
                  </a>
                </h2>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quos incidunt, perspiciatis, ad saepe, magnam error adipisci vitae ut provident alias! Odio debitis error ipsum molestiae voluptas accusantium quibusdam animi, soluta explicabo asperiores aliquid, modi natus suscipit deleniti. Corrupti, autem.</p>
                  </div>
                </div>
              </div>
             
            </div>

          </div>
        </div>
      </div>
    </div>

   

    
    <div class="site-section" id="projects-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Awesome Projects</span>
            <h2 class="font-weight-bold text-black">Our Projects</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_1.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Butterfly House</a></h3>
            <span class="text-muted">Interior</span>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_2.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Interior Bed Design</a></h3>
            <span class="text-muted">Design</span>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_3.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Kitchen Sink Design</a></h3>
            <span class="text-muted">Interior</span>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_4.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Lobby Interior Design</a></h3>
            <span class="text-muted">Interior</span>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_5.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Relaxation Room Design</a></h3>
            <span class="text-muted">Design</span>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_6.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="mb-0"><a href="#">Butterfly House</a></h3>
            <span class="text-muted">Interior</span>
          </div>
        </div>
      </div>
    </div>


    

 

    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Services</span>
            <h2 class="font-weight-bold text-black">Our Services</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
          </div>
        </div>

        <div class="row">

         


         


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Modern Window Design</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-measuring display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Experts Architect</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Sofa Design</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non rem iusto nisi, eum vitae quas culpa fugiat itaque aliquam nulla, accusamus aspernatur molestias recusandae voluptates ratione dolores deleniti velit. Corporis.</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Team</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Interior Design</a></li>
                  <li><a href="#">Architect</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Membership</a></li>
                </ul>
              </div>
            </div>

            
          </div>
          <div class="col-lg-4">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-4">Recent News</h3>
              <div class="block-25">
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/img_2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/img_3.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/img_4.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post" class="form-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
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