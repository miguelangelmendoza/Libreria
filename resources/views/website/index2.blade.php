<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Librería</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>

</head>
<body>
<header>
<nav class="deep-orange darken-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Libreria<i class="fa fa-book"></i></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/tienda">Tienda<i class="fa fa-shopping-bag"></i></a></li>
        <li><a href="/carrito">Carrito<i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="/acerca">Acerca<i class="fa fa-question"></i></a></li>
        <li><a href="/contacto">Contacto<i class="fa fa-phone"></i></a></li>
        <li><a href="/acceder">Acceder<i class="fa fa-share"></i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/tienda">Tienda<i class="fa fa-shopping-bag"></i></a></li>
        <li><a href="/carrito">Carrito<i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="/acerca">Acerca<i class="fa fa-question"></i></a></li>
        <li><a href="/contacto">Contacto<i class="fa fa-phone"></i></a></li>
        <li><a href="/acceder">Acceder<i class="fa fa-share"></i></a></li>
      </ul>
    </div>
  </nav>
</header>
<section id="slider-libreria" class="container">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="/img/libro2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bienvenido</h3>
          <h5 class="light grey-text text-lighten-3">Welcome</h5>
        </div>
      </li>
      <li>
        <img src="/img/libro.jpg"> <!-- random image -->
        <div class="caption center-align">
        <h5>Leer es vivir dos veces</h5>
        </div>
      </li>
      <li>
        <img src="/img/libro5.jpg"> <!-- random image -->
        <div class="caption center-align">
        <h5>La lectura es a la mente lo que el ejercicio al cuerpo</h5>
        </div>
      </li>
     <li>
        <img src="/img/libro4.jpg"> <!-- random image -->
        <div class="caption center-align">
        <h5>Cada ser humano es una novela de misterio e intriga, con un terminal sin resolver</h5>
        </div>
      </li>
    </ul>
  </div>

</section>

<section id="section2" class="container">
  <div class="row">
    <div class="col s12 l4">
    <center>
    <i class="fa fa-check-square-o fa-3x"></i>
    <h5>Calidad</h5>
    <p id="texto">
      Los libros que se ofrecen en esta tienda son seleccionados previamente para ofrecer material de calidad a los lectores
    </p>
  </center>
    </div>
    <div class="col s12 l4">
    <center>
    <i class="fa fa-truck fa-3x"></i>
    <h5>Entrega</h5>
    <p id="texto">
      El tiempo en el que tendrás el libro que deceas será menor al de nuestra competencia.
    </p>
  </center>
    </div>
    <div class="col s12 l4">
    <center>
    <i class="fa fa-credit-card fa-3x"></i>
    <h5>Pago</h5>
    <p id="texto">
      El pago es seguro, fácil y confiable, con tan solo unos clics podrás realizar la compra de tus libros favoritos.
    </p>
  </center>
    </div>
  </div>
</section>

<footer class="page-footer deep-orange darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Libreria<i class="fa fa-book"></i></h5>
                <p class="grey-text text-lighten-4">"Para viajar lejos, no hay mejor nave que un libro"</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Carrito</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Acerca</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Acceder</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 - Miguel Ángel Mendoza Calva
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square"></i></a>
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></i></a>
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-envelope"></i></i></i></a>
            </div>
          </div>
        </footer>

<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>