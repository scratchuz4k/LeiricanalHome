@extends('layout.app')


@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produtos e Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Distinções</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portfólio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>

    </ul>
  </div>
</nav>

<div id="home" class="container-fluid">
  <div class="row justify-content-md-center align-items-center" style="min-height:100%;">
    <div class="col-md-auto">
      One of three columns
    </div>
  </div>
</div>




<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>


<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section4" class="container-fluid">
  <h1>Section 4</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section5" class="container-fluid">
  <h1>Section 5</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section6" class="container-fluid">
  <h1>Section 5</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
@endsection