<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?= base_url()?>template/Regna/img/donando.png" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="<?= base_url()?>#somos">Quiénes somos</a></li>
          <li><a href="<?= base_url()?>#about">Dona por la Guajira</a></li>
          <li><a href="<?= base_url()?>#facts">Qué lograremos</a></li>
          <li><a href="<?= base_url()?>#portfolio">Sé voluntario</a></li>
          <li><a href="<?= base_url()?>#contact">Contactanos</a></li>
        </ul>
        <br> <br><br><br>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <br>
<br>
<br>
<br>
  <main id="main">
    <br>
    <br>
<div class="container">
<div class="hero-container">
      <div class="section-header">
      <h2 class="section-title">Resumen Transacción</h2>
      </div>

<br>
<br>
<br>
<div class="row counters">
      <!-- <table> -->
      <div class="col-md-18">
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">
          Estado de la transacción:  
            <!-- <?php echo $estadoTx; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">ID de la transacción:  
            <!-- <?php echo $transactionId; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">
          Referencia de la venta:  
          <!-- <?php echo $reference_pol; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">Referencia de la transacción:  
             <!-- <?php echo $referenceCode; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">
          Cus:  
          <!-- <?php echo $cus; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">Banco:  
              <!-- <?php echo $pseBank; ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">
          Valor total:   
             $<!-- <?php echo number_format($TX_VALUE); ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">Moneda:  
             <!-- <?php echo $currency; ?> -->
          </p>
        
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">
          Descripción:   
          <!-- <?php echo ($extra1); ?> -->
          </p>
        </div>
        <div class="form-group" class="col-lg-5 col-6 text-center">
          <p class="description">Entidad:   
             <!-- <?php echo ($lapPaymentMethod); ?> -->
          </p>
        </div>

      </div>
      <!-- </table> -->
     
    </div>
</div>
</div>
<div class="text-center col-12 container wow fadeInUp section-header" >
    <img class="img-fluid" src="<?= base_url()?>template/Regna/img/donando.jpg" href="https://www.facebook.com/Cruzada-por-la-Guajira-2749499318401423/?view_public_for=2749499318401423" alt="">
    <img class="img-fluid" src="<?= base_url()?>template/Regna/img/Captura.JPG" href="https://www.instagram.com/cruzadaxlaguajira/?hl=es-la/" alt="">

    </div>
</main>

  
