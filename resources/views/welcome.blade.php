@extends('layout.app')


@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#home">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li><a href="#">Section 4</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="home" class="container-fluid">
  <h1>Section 1</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>




<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
  <p>Click on the different Section links in the navbar to see the smooth scrolling effect.</p>
</div>
@endsection

