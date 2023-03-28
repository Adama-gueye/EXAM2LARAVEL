@include('header.app')
@include('nav')
<div style="background-color: #ffff99;">
<div class="container">
<div class="row">

<div class="col-md-6">
    <h1>
    A propos de Faster
    </h1>
    <h2 style="font-family: Times;">
          Le meilleur choix de transport pour une agréable journée.
      Faster est le service VTC à la demande qui <br>
      vous accompagnera en toute sécurité dans tous <br>vos déplacements locaux.  
      Via l’application FASTER<br> vous pourrez commander votre chauffeur <br>et vous déplacer vers la destination de votre choix en <br>indiquant simplement la géolocalisation de votre destination finale.
      <br>
      <div class="col-md-12 mt-4">
        <a type="button" class="btn btn-warning btn-block" href="{{ route('register') }}">
          <h3>S'INSCRIRE</h3>
        </a>
      </div>
    </h2>
</div>
<div class="col-md-6">
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/11.jpg" class="d-block w-100" alt="Image 1" height="600">
    </div>
    <div class="carousel-item">
      <img src="public/images/7.jpg" class="d-block w-100" alt="Image 2" height="600">
    </div>
  </div>
</div>

</div>

</div>
</div>

</div>




@include('footer.footer')