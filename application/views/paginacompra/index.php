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
<br>
<div class="container">
<div class="hero-container">
      <div class="section-header">
      <h2 class="section-title">Compra Tú Manilla</h2>
      </div>


<br> 
<div>
<form action="<?= base_url();?>index.php/welcome/sendcompra" method="post" role="formcom" class="" >
<div class="row counters">
  <div class="col-md-3 text-center"> </div>
  <div class ="col-md-8">
     <div class="form-group" class="text-center">
        <input type="text" name="name" class="form-control col-lg-8" id="nombre" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingresa tu nombre" />
        <div class="validation"></div>
      </div>

      <div class="form-group" class="col-lg-6 col-6 text-center">
            <input type="text" name="apellido" class="form-control col-lg-8" id="apellido" placeholder="Tu Apellido" data-rule="minlen:4" data-msg="Por favor ingresa tu nombre" />
            <div class="validation"></div>
      </div>

      <div class="form-group" class="col-lg-5 col-6 text-center" >
           <select class="form-control col-lg-8" name="tipo" id="tipo">
             <option value="cc">Cedula de Cuidadania</option>
             <option value="ce">Cedula de Extranjeria</option>
             <option value="ni">Número de identidicaión tributaria</option>
             <option value="pp">Permiso especial de permanencia</option>
           </select>
          <div class="validation"></div>
        </div>

        <div class="form-group" class=" col-10 text-center">
          <input type="number" class="form-control col-lg-8 " name="numdoc" id="numdoc" placeholder="Tu número de documento" data-rule="minlen:4" data-msg="Por favor ingresa tu número de documento" />
          <div class="validation"></div>
        </div>
        
        <div class="form-group" class="text-center">
            <input type="text" name="departamento" class="form-control col-lg-8" id="departamento" placeholder="Tu departamento" data-rule="minlen:4" data-msg="Por favor ingresa tú departamento" />
            <div class="validation"></div>
         </div>

         <div class="form-group" class="text-center">
            <input type="text" name="cuidad" class="form-control col-lg-8" id="cuidad" placeholder="Tu Cuidad" data-rule="minlen:4" data-msg="Por favor ingresa tu cuidad" />
            <div class="validation"></div>
         </div>

        <div class="form-group">
            <input type="text" name="direccion" class="form-control col-lg-8" id="direccion" placeholder="Tu dirección" data-rule="minlen:4" data-msg="Por favor ingresa tu dirección" />
            <div class="validation"></div>
        </div>

        <div class="form-group">
            <input type="number" name="telefono" class="form-control col-lg-8" id="telefono" placeholder="Tu télefono" data-rule="minlen:4" data-msg="Por favor ingresa tú telefono" />
            <div class="validation"></div>
        </div>
        <div class="form-group">
           <input type="email" class="form-control col-lg-8" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Por favor ingresa tu correo" />
            <div class="validation"></div>
        </div>
  </div>
  <div class="col-md-4 text-center"></div>
  <div class="col-md-8">
      <div class="form-group ">
          <input type="number" name="cantidad" class="form-control col-lg-4" id="cantidad" placeholder="Compra tu(s) manilla(s)" data-rule="minlen:" data-msg="Por favor ingresa la cantidad que quiers comprar" />
         <div class="validation"></div>
      </div> 
  </div>
</div>
<div class="text-center"><button color="#2dc997" type="submit">Compra</button></div>   

</form>
    
    <div class="text-center col-12 container wow fadeInUp section-header" >
      <img class="img-fluid" src="<?= base_url()?>template/Regna/img/donando.jpg" href="https://www.facebook.com/Cruzada-por-la-Guajira-2749499318401423/?view_public_for=2749499318401423" alt="">
      <img class="img-fluid" src="<?= base_url()?>template/Regna/img/Captura.JPG" href="https://www.instagram.com/cruzadaxlaguajira/?hl=es-la/" alt="">
    </div>
</main>

  
