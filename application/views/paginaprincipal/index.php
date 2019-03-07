<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?= base_url()?>template/Regna/img/logo.png" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="<?= base_url()?>#about">Dona por la Guajira</a></li>
          <li><a href="<?= base_url()?>#services">Qué lograremos</a></li>
          <li><a href="<?= base_url()?>#portfolio">Sé voluntario</a></li>
          <li><a href="<?= base_url()?>#contact">Contactanos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <!-- En Style se cambia la imagen de fondo -->
  <section id="hero">
    <div class="hero-container">
      <h1>Cruzada por la Guajira</h1>
      <h2>Más de 4.700 niños han muerto durante los últimos 8 años en la Guajira por causa de la desnutrición y más de 248 niños están en riesgo. </h2>
      <h2>Ayuda a que este número disminuya.</h2>
      <a href="<?= base_url()?>#about" class="btn-get-started">Dona por la Guajira</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Dona por la Guajira</h2>
            <p>
            Más de 4.700 niños han muerto durante los últimos 8 años en la Guajira por causa de la desnutrición y más de 248 niños están en riesgo.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-cutlery"></i></div>
              <h4 class="title"><a href="<?= base_url()?>">Niños Saludables</a></h4>
              <p class="description">La buena nutrición hace parte fundamental de la primera infancia, queremos ayudar a que estos
                  infantes tenga una comida de calidad y saludable.
              </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-heart"></i></div>
              <h4 class="title"><a href="">Asistencia Médica</a></h4>
              <p class="description">Una asistencia médica a tiempo puede salvar la vida de los más de 248 los niños en riego de desnutrición.</p>
            </div>


          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
          <!-- revisar Script para el cambio de iagen en #about -->
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      servicio Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Qué lograremos</h3>
          <p class="section-description">Con tu ayuda lograremos:</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1.</span>
            <p>Ayudar a más de 248 niños en riesgo de desnutrición.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2.</span>
            <p>Hacer entrega de agua potable.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">3.</span>
            <p>Hacer entrega de alimentos no perecederos.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4.</span>
            <p>Regalar una sonrisa a un pequeño.</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->


    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Llamanos</h3>
            <p class="cta-text"> Tienes alguna duda, contactanos.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?= base_url()?>#">Llamanos</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Portfolio</h3>
          <p class="section-description">A través de SE VOLUNTARIO podrás ayudarnos en:</p>
        </div>
        <div class="row">

          <div class="col-lg-12" >
            <ul id="portfolio-flters">
              <li data-filter=".filter-app">Voluntario Lógistica</li>
              <li data-filter=".filter-card">Voluntario Profesional de la Salud</li>
            </ul>
          </div>
        </div>
        <div class="row" id="portfolio-wrapper"text-center>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="<?= base_url()?>">
              <img src="<?= base_url()?>template/Regna/img/portfolio/app1.jpg" alt="">
              <div class="details">
              <h4>Voluntario lógistico</h4>
                <span>Ayudanos a coordinar todo, para que se puedan llegar con todas las donaciones</span>    
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="<?= base_url()?>template/Regna/img/portfolio/web2.jpg" alt="">
              <div class="details">
              <h4>Voluntario profesional</h4>
                <span>Ayudanos a llevar tu conocimiento sobre la salud.</span>
              </div>
            </a>
          </div>
      
        </div>

      </div>
    </section><!-- #portfolio -->

  
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contactanos</h3>
          <p class="section-description">Quieres ayudarnos o tienes alguna duda, contactanos.</p>
        </div>
      </div>


      <div class="container wow fadeInUp mt-4">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Bogotá<br>Cundinamarca</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>donandosonrisascol@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+57 322 345 9431</p>
              </div>
            </div>

            <div class="social-links">
              <a href="<?= base_url()?>#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="<?= base_url()?>#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-6 col-md-9">
            <div class="form">
              <div id="sendmessage">Tu mensaje se ha enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingresa tu nombre" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Por favor ingresa tu correo" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tu mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
