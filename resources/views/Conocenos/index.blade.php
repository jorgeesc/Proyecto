@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>{{ __('Filosofia') }}</h1></div>
<div class="card-body">

<html lang="en">
<head>
  <title>Conocenos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">DATAPLAY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">MISIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">VISIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">VALORES</a>
        </li>
        <li class="nav-item dropdown">
          
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">Link 1</a>
            <a class="dropdown-item" href="#section42">Link 2</a>
            <a class="dropdown-item" href="#section43">Link 3</a>
            <a class="dropdown-item" href="#section44">Link 4</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-7">
      <div id="section1" class="bg-black" >    
        <h1>DATAPLAY</h1>
        <p>Nuestro principal interés es mantenerte informado sobre los diferentes videojuegos y las noticias más interesantes de las compañías de videojuegos más grandes del mundo. 
        En este sitio encontraras: 
        </p>
        <li>Mantente informado sobre tus títulos favoritos.</li>
        <li>Encuentra los juegos de tu agrado.</li>
        <li>Comenta y valora los títulos según tu agrado.</li>
        <li>Conoce los juegos mejor valorados del año. </li>
        <li>Ve lo que piensan los usuarios sobre tu juego favorito. </li>
      </div><br>
      <div id="section2" class="bg-black"> 
        <h1>Visión</h1>
        <p>Somos un grupo de estudiantes universitarios del área de tecnologías de la información enfocados en el diseño y desarrollo web, tratando de innovar en el área del e-commerce, buscamos liderar la venta de videojuegos en línea con un sitio visualmente atractivo haciendo uso de temáticas “gaming” y que sea lo más intuitivo para el usuario.</p>
      </div>        
      <div id="section3" class="bg-black">         
        <h1>Valores</h1>
        <p>Buscamos estar bien posicionados en el e-commerce, al ser jóvenes siempre buscamos la competencia y mejorar la calidad en nuestro sitio, además de querer aprender de las nuevas tecnologías buscamos siempre estar actualizados e innovando y que nuestro trabajo genere eco en las empresas de desarrollo de videojuegos para así poder tener su confianza y nos permitan distribuir sus productos, creemos que nuestra ambición por ser los mejores es nuestra principal inspiración para llegar a serlo, buscando siempre la mejor atención para nuestros clientes.</p>
      </div>
      <div id="section4" class="bg-black">         
        <h1>Valores</h1>
        <li>Colaboración.</li>
        <li>Aprendizaje.</li>
        <li>Excelencia.</li>
        <li>Pasión.</li>
        <li>Desarrollo.</li>
        <li>Innovación.</li>
        <li>Calidad.</li>
        <li>Usabilidad.</li>
        <li>Creatividad.</li>
      </div>
     
  </div>
</div>

</body>
</html>
















  <style>
  body {
    position: relative;
  }
  ul.nav-pills {
    top: 350px;
    position: fixed;
  }
  div.col-8 div {
    height: 500px;
  }

  </style>

</body>


@endsection
