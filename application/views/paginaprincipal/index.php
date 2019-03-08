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
          <li><a href="<?= base_url()?>#somos">Quienes somos</a></li>
          <li><a href="<?= base_url()?>#about">Dona por la Guajira</a></li>
          <li><a href="<?= base_url()?>#facts">Qué lograremos</a></li>
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
      <h2>¡Tú también puedes donar sonrisas y gotitas de amor!</h2>
      <a href="<?= base_url()?>#about" class="btn-get-started">Dona por la Guajira</a>
    </div>
  </section><!-- #hero -->
<br>
<br>
<br>

  <main id="main">
  
<!--==========================
      somos Section
    ============================-->
    <section id="somos">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Quienes somos</h3>
          <p class="section-description">Somos una organización sin ánimo de lucro, que se preocupa por la niñez en Colombia.<br>
          Queremos regalar sonrisas a los niños en condiciones vulnerables y brindarles los recursos necesarios para su educación y bienestar.
       </p>
       
    </div>
      <div >
        <img src="<?= base_url()?>template/Regna/img/1.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/2.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/3.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/4.png" alt="">
      </div>

    </section><!-- #somos -->
 <br>
 <br>
 <br>
   
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
        <br>
        Por eso queremos llevar sonrisas a los niños de la Guajira, no solo queremos darles regalos y kit escolares, también queremos darles
        agua potable a ellos y sus familias, personal médico que los atienda y las suficientes medicinas para su salud y bienestar.    
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
<br>
<br>


 <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Cómo puedes dona por la Guajira</h2>
            

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-heart-o"></i></div>
              <h4 class="title"><a href="<?= base_url()?>">Compra una Manilla</a></h4>
              <a href="" class="btn-get-started col-4">Compra aquí</a>
              <p class="description">El valor de la manilla es de $10.000</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-credit-card-alt"></i></div>
              <h4 class="title"><a href="">Aporte Voluntario</a></h4>
              <a href="" class="btn-get-started col-4">Aporta aquí</a>
              <p class="description">Tú aporte economico lo puedes realizar por medio de: PayU y consignaciones bancarias.
              <br>
              ¡Tú también puedes donar sonrisas y gotitas de amor!
              </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-cutlery"></i></div>
              <h4 class="title"><a href="">Dona alimentos, agua, ropa o juguetes </a></h4>
              <a href="" class="btn-get-started col-4">Conoce los lugares aquí</a>
              <p class="description">Conoce los diferentes lugares en dónde recibiremos tu donación</p>
            </div>


          </div>

          <div class="col-8 col-lg-6  order-lg-2 order-1 wow fadeInRight">
          <img src="<?= base_url()?>template/Regna/img/pulsera.jpg" alt="">

          <!-- revisar Script para el cambio de iagen en #about -->
          </div>
        </div>

      </div>
    </section><!-- #about -->
<br>
<br>
<br>

 <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Llamanos</h3>
            <p class="cta-text"> Tienes alguna duda, contactanos.</p>
            <div >
            <a href="<?= base_url()?>https://www.facebook.com/groups/1610017615960811/" class="facebook"><i class="fa fa-facebook"></i>   Donando Sonrisas Facatativá</a>
            <br>
            <a href="<?= base_url()?>https://www.instagram.com/sonrisasdonando/?hl=es-la" class="instagram"><i class="fa fa-instagram"></i>  @sonrisasdonando</a>
            <br>
            <a href="<?= base_url()?>http://api.whatsapp.com/send?phone=573223459431" class="telefono"><i class="fa fa-whatsapp "></i>   +57 322 345 9431 </a>
         
            </div>
            </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?= base_url()?>tel:+573223459431">Llamanos</a>
          </div>

        </div>

      </div>
    </section><!-- #call-to-action -->
    <br>
        <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Qué lograremos</h3>
          <p class="section-description">Con tu ayuda lograremos:</p>
        </div>
        <div class="row counters text-center">

  			<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">248</span>
            <p>Ayudar a más de 248 niños en riesgo de desnutrición.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000</span>
            <p>Hacer entrega 1000 bolsas de agua potable de 5lt.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000</span>
            <p>Hacer entrega de 10000 mercados con alimentos no perecederos.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000</span>
            <p>Hacer entrega de 1000 prendas de ropa.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000</span>
            <p>Hacer entrega de 100 juguetes a los niños.</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10000</span>
            <p>Regalar más de 10000 sonrisas.</p>
  				</div>
         
  			</div>
        <br>
        <h3 class="section-title text-center">¡Tú también puedes donar sonrisas y gotitas de amor!</h3>

      </div>
    </section><!-- #facts -->
<br>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Se volutario</h3>
          <br>
          <p class="section-description">Puedes ser parte de nuestro equipo como voluntario LOGISTICO o voluntario PROFESIONAL DE LA SALUD</p>
        </div>
      <div class="container wow fadeInUp mt-4">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-9">
            <div class="form">
              <!-- <div id="sendmessage">Tu mensaje se ha enviado. Gracias!</div> -->
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
                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Tu telefono" data-rule="minlen:4" data-msg="Por favor ingresa tu telefono" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Voluntario en" data-rule="minlen:4" data-msg="Por favor ingresa voluntariado te postulas" />
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Postulate</button></div>
              </form>
            </div>
          </div>

        </div>

      </div> 
      <br>
      <br>       
      <div class=" justify-content-center " >
        <img src="<?= base_url()?>template/Regna/img/1.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/2.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/3.png" alt="">
        <img src="<?= base_url()?>template/Regna/img/4.png" alt="">
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
        <img src="<?= base_url()?>template/Regna/img/donando.jpg" alt="">
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
            <a href="<?= base_url()?>https://www.facebook.com/groups/1610017615960811/" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="<?= base_url()?>https://www.instagram.com/sonrisasdonando/?hl=es-la" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="<?= base_url()?>http://api.whatsapp.com/send?phone=573223459431" class="telefono"><i class="fa fa-whatsapp "></i></a>
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
