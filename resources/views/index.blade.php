@include('layouts.header')



<body>



  <div class="hero_area">

    <!-- header section strats -->

    @include('layouts.menu_principal')

    <!-- end header section -->

    <!-- slider section -->

    <section class="slider_section ">

      <div class="slider_bg_box">

        <div class="bg_img_box">

          <img src="images/formado.jpeg"  style = "width: 90%; height: 90%;">

         

        </div>

      </div>

      <div id="customCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active">

            <div class="container ">

              <div class="row">

                <div class="col-md-7 mx-auto">

                  <div class="detail-box">

                    <h1>

                      Benvindo <br>

                      Plataforma Académica & Ciêntífica de Angola

                    </h1>

                    <p>

                      Somos a porta de acesso ao conhecimento e a solução 

                      das suas pesquisas académicas.

                    </p>

                    <div class="btn-box">

                      <a href="" class="btn1">

                        Contacte-nos

                      </a>

                      <a href="" class="btn2">

                        Sobre Nós

                      </a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="carousel-item">

            <div class="container ">

              <div class="row">

                <div class="col-md-7 mx-auto">

                  <div class="detail-box">

                    <h1>

                      Encontre aqui! <br>

                      A sua Orientação Académica

                    </h1>

                    <p>

                      Temos para si um mundo de soluções para as suas dificuldades académicas desde trabalhos ciêntíficos  aos diversos apoios académicos.

                    </p>

                    <div class="btn-box">

                      <a href="" class="btn1">

                        Contacte-nos 

                      </a>

                      <a href="" class="btn2">

                       Sobre Nós

                      </a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="carousel-item">

            <div class="container ">

              <div class="row">

                <div class="col-md-7 mx-auto">

                  <div class="detail-box">

                    <h1>

                      Serviço de Apoio  <br>

                      ao estudante

                    </h1>

                    <p>

                     Aqui encontrará um  Professor ou Especialista a nível da difucldade  dos seus trabalhos Académicos e poderá  ter apoio com um Professor ou Especialista em tempo real..

                    </p>

                    <div class="btn-box">

                      <a href="" class="btn1">

                        Contacte-nos

                      </a>

                      <a href="" class="btn2">

                       Sobre Nós 

                      </a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <ol class="carousel-indicators">

          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>

          <li data-target="#customCarousel" data-slide-to="1"></li>

          <li data-target="#customCarousel" data-slide-to="2"></li>

        </ol>

      </div>

    </section>

    <!-- end slider section -->

  </div>







  <!-- about section -->



  <section class="about_section layout_padding ">

    <div class="container">

      <div class="row">

        <div class="col-md-6">

          <div class="img-box">

            <img src="images/6461.jpg" alt="">

          </div>

        </div>

        <div class="col-md-6">

          <div class="detail-box">

            <div class="heading_container">

              <h2>

                Quem Somos

              </h2>

            </div>

            <p>

              PACA é uma plataforma desenvolvida com o foco na resolução de dificuldades do mundo académico entre elas: Acesso facil aos conteúdos Digitais a Partilha de informação e Desenvolvimento de conhecimento Ciêntífico.  

            </p>

            <a href="quem_somos" :active="request()->routeIs('quem_somos')">

              Saiba mais

            </a>

          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- end about section -->



  <!-- course section start -->



  <section class="course_section layout_padding">

    <div class="course_bg_box ">

      <div class="bg_img_box">

        <img src="images/course-bg.jpg" alt="">

      </div>

    </div>

    <div class="container-fluid pr-0">

      <div class="heading_container">

        <h2>

          Apoio ao Estudante

        </h2>

        <p>

          Temos os melhores Especialistas e Professores para te apoiar !

        </p>

      </div>

      <div class="course_container">

        <div class=" course_owl-carousel owl-carousel owl-theme ">

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/xp.png" alt="">

              </div>

              <div class="detail-box">

                <h4>

                    

                  Trabalhos Académicos

                </h4>

                <p>

                   Dicertação-Tese-Monografias-Relatórios-Provas de Admissão as acdemias militares e civis .

                </p>

                <a href="">

                  Ver Mais

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/x1.png" alt="">

              </div>

              <div class="detail-box">

                <h4>

                  Aulas online

                </h4>

                <p>

                  Garantimos a continuidade do Apoio académico com os especialistas  apartir da nossa plataforma online.

                </p>

                <a href="">

                  Ver Mais

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/x2.png" alt="">

              </div>

              <div class="detail-box">

                <h4>

                  Preparatório

                </h4>

                <p>

                  Indicamos os melhores grupos de preparatórios Nacionais e Internacionais online ou presencial.

                </p>

                <a href="">

                  Ver Mais

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/x3.png" alt="">

              </div>

              <div class="detail-box">

                <h4>

                  Assis. Especializada

                </h4>

                <p>

                  Temos para si assistência especializada para cada área do mundo académico

                </p>

                <a href="">

                  Ver Mais

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- course section ends -->



  <!-- teacher section -->



  <section class="teacher_section layout_padding">

    <div class="container">

      <div class="heading_container heading_center">

        <h2>

          Nossos Colaboradores

        </h2>

      </div>

      <div class="row">

        <div class="col-sm-6 col-lg-3">

          <div class="box">

            <div class="img-box">

              <img src="images/t1.png" alt="">

            </div>

            <div class="detail-box">

              <h5>

                Soraia Silva

              </h5>

              <h6>

                Professora

              </h6>

            </div>

          </div>

        </div>

        <div class="col-sm-6 col-lg-3">

          <div class="box">

            <div class="img-box">

              <img src="images/t2.jpg" alt="">

            </div>

            <div class="detail-box">

              <h5>

                Martin Evans

              </h5>

              <h6>

              Professor

              </h6>

            </div>

          </div>

        </div>

        <div class="col-sm-6 col-lg-3">

          <div class="box">

            <div class="img-box">

              <img src="images/p2.png" alt="">

            </div>

            <div class="detail-box">

              <h5>

                Marta Dos santos

              </h5>

              <h6>

              Professora

              </h6>

            </div>

          </div>

        </div>

        <div class="col-sm-6 col-lg-3">

          <div class="box">

            <div class="img-box">

              <img src="images/t4.jpg" alt="">

            </div>

            <div class="detail-box">

              <h5>

                Clara Mark

              </h5>

              <h6>

              Professora

              </h6>

            </div>

          </div>

        </div>

      </div>

      <div class="btn-box">

        <a href="">

          Ver todos

        </a>

      </div>

    </div>

  </section>



  <!-- end teacher section -->



  <!-- client section -->



  <section class="client_section ">

    <div class="container">

      <div class="heading_container">

        <h2>

          O que relatam da nossa Plataforma

        </h2>

      </div>

      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active">

            <div class="row">

              <div class="col-md-11 col-lg-10 mx-auto">

                <div class="box">

                  <div class="img-box">

                    <img src="images/m1.jpeg" alt="" />

                  </div>

                  <div class="detail-box">

                    <div class="name">

                      <i class="fa fa-quote-left" aria-hidden="true"></i>

                      <h6>

                        Muriel

                      </h6>

                    </div>

                    <p>

                      A PACA veio para dar solução aos pequenos problemas que os jovens e não so enfrentam problemas pequenos mas com grande impacto na formação de cada pessoa Obrigado pela ajuda que tem dado a todos!

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="carousel-item">

            <div class="row">

              <div class="col-md-11 col-lg-10 mx-auto">

                <div class="box">

                  <div class="img-box">

                    <img src="images/m2.png" alt="" />

                  </div>

                  <div class="detail-box">

                    <div class="name">

                      <i class="fa fa-quote-left" aria-hidden="true"></i>

                      <h6>

                        Sheila

                      </h6>

                    </div>

                    <p>

                       PACA veio para dar solução aos pequenos problemas que os jovens e não so enfrentam problemas pequenos mas com grande impacto na formação de cada pessoa Obrigado pela ajuda que tem dado a todos!

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="carousel-item">

            <div class="row">

              <div class="col-md-11 col-lg-10 mx-auto">

                <div class="box">

                  <div class="img-box">

                    <img src="images/client.jpg" alt="" />

                  </div>

                  <div class="detail-box">

                    <div class="name">

                      <i class="fa fa-quote-left" aria-hidden="true"></i>

                      <h6>

                        Martha

                      </h6>

                    </div>

                    <p>

                       PACA veio para dar solução aos pequenos problemas que os jovens e não so enfrentam problemas pequenos mas com grande impacto na formação de cada pessoa Obrigado pela ajuda que tem dado a todos!

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="carousel_btn-container">

          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">

            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

            <span class="sr-only">Previous</span>

          </a>

          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">

            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            <span class="sr-only">Next</span>

          </a>

        </div>

      </div>

    </div>

  </section>



  <!-- end client section -->





<!-- course section start -->



  <section class="course_section layout_padding">

    <div class="course_bg_box ">

      <div class="bg_img_box">

        <img src="images/course-bg.jpg" alt="">

      </div>

    </div>

    <div class="container-fluid pr-0">

      <div class="heading_container">

        <h2>

          NOSSOS PARCEIROS

        </h2>

        <p>

          Seja nosso parceiro e ajude-nos a expandir o conhecimento

        </p>

      </div>

      <div class="course_container">

        <div class=" course_owl-carousel owl-carousel owl-theme ">

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/pa1.png" alt="">

              </div>

              <div class="detail-box">

                

            

                 

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/pa2.png" alt="">

              </div>

              <div class="detail-box">

                

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/pa3.png" alt="">

              </div>

              <div class="detail-box">

                

                  

                </a>

              </div>

            </div>

          </div>

          <div class="item">

            <div class="box">

              <div class="img-box">

                <img src="images/x3.png" alt="">

              </div>

              <div class="detail-box">

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- course section ends -->

  

  <!-- contact section -->

  <section class="contact_section layout_padding ">

    <div class="container">

      <div class="heading_container">

        <h2>

          Contacte-nos

        </h2>

      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="form_container">

            <form action="">

              <div>

                <input type="text" placeholder="Nome" />

              </div>

              <div>

                <input type="text" placeholder="Telefone" />

              </div>

              <div>

                <input type="email" placeholder="Email" />

              </div>

              <div>

                <input type="text" class="message-box" placeholder="Messagem" />

              </div>

              <div class="btn_box">

                <button>

                  Enviar

                </button>

              </div>

            </form>

          </div>

        </div>

        <div class="col-md-6">

          <div class="map_container">

            <div class="map">

              <div id="googleMap"></div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- end contact section -->



 



  <!-- info section -->

  <section class="info_section ">



    <div class="container">

      <div class="info_top ">

        <div class="row ">

          <div class="col-sm-6 col-md-4 col-lg-3">

            <div class="info_detail">

              <a href="index.html">

                <h4>

                  Fundador e C&O

                </h4>

              </a>

              <p>

                 WIK TANIMOR teve a ideia de criar uma plataforma de apoio ao estudante e que integrasse serviços que facilitassem os Docentes e alunos bem como pesquisadores interagirem, partilharem informações e elevar os seus conhecimentos.    .

              </p>

              <div class="social_box">

                <a href="">

                  <i class="fa fa-facebook" aria-hidden="true"></i>

                </a>

                <a href="">

                  <i class="fa fa-twitter" aria-hidden="true"></i>

                </a>

                <a href="">

                  <i class="fa fa-linkedin" aria-hidden="true"></i>

                </a>

                <a href="">

                  <i class="fa fa-instagram" aria-hidden="true"></i>

                </a>

              </div>

            </div>

          </div>

          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">

            <h4>

              Contacte-nos

            </h4>

            <p>

              Nosso escritório Centralidade do Sequele Bloco 5-26b

            </p>

            <div class="contact_nav">

              <a href="">

                <i class="fa fa-map-marker" aria-hidden="true"></i>

                <span>

                  Localização

                </span>

              </a>

              <a href="">

                <i class="fa fa-phone" aria-hidden="true"></i>

                <span>

                  Ligue-nos : +244 942 547 440

                </span>

              </a>

              <a href="">

                <i class="fa fa-envelope" aria-hidden="true"></i>

                <span>

                    

                 Email :   Pacangola@gmail.com

                </span>

              </a>

            </div>

          </div>

          <div class="col-md-4">

            <div class="info_form">

              <h4>

                Inscreva-se para receber os nossos conteúdos

              </h4>

              <form action="">

                <input type="text" placeholder="Digite o seu Email" />

                <button type="submit">

                  Subscreva-se

                </button>

                

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- end info_section -->





  <!-- footer section -->

  <footer class="footer_section">

    <div class="container">

      <p>

        &copy; <span id="displayYear"></span> Direitos Reservados Plataforma Académica & Ciêntífica de Angola.

        <a href="https://html.design/">O conhecimento num CLIQUE</a>

      </p>

    </div>

  </footer>

  <!-- footer section -->





  <!-- jQery -->

  <script src="js/jquery-3.4.1.min.js"></script>

  <!-- bootstrap js -->

  <script src="js/bootstrap.js"></script>

  <!-- owl carousel -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- custom js -->

  <script src="js/custom.js"></script>

  <!-- Google Map -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

  <!-- End Google Map -->



</body>



</html>