@include('layouts.header')

    <!-- header section strats -->
    @include('layouts.menu')
    <!-- end header section -->
<body>

  

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