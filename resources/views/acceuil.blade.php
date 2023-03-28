@include('header.app')
@include('nav')
<div style="background-color: #ffff99;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="image-container">
        <img src="{{ asset('public/images/taxijolie.jpg') }}" alt="image1" class="d-block w-100">
        <div class="image-text">
        <div style="color:black">
          <h2 style="color:aliceblue">Bienvenue chez TAXI_BOK_BOK</h2>
         <p> Taxi Bok-Bok est une platforme de réservation de taxi en ligne </p>
          <p> qui émerge comme une solution innovante et pratique</p>
          <p>pour les passagers souhaitant se déplacer rapidement</p>
          <p>et confortablement.
                et de suivre en temps réel l'arrivée du taxi.</p>
        </div>
        </div>
      </div>

      <style>
      .image-container {
        position: relative;
      }
      .image-text {
        position: absolute;
        top: 200px;
        left: 50px;
        color: white;
        text-shadow: 1px 1px 1px black;
      }
      </style>
  </div>
    <div class="carousel-item">
      <div class="image-container">
        <img src="{{ asset('public/images/4.jpg') }}" class="d-block w-100" alt="Image 2">
        <div class="image-text">
        <div style="color:bisque">
          <h2 style="color:aliceblue">Bienvenue chez TAXI_BOK_BOK</h2>
         <p> Taxi Bok-Bok est une platforme de réservation de taxi en ligne </p>
          <p> qui émerge comme une solution innovante et pratique</p>
          <p>pour les passagers souhaitant se déplacer rapidement</p>
          <p>et confortablement.
                et de suivre en temps réel l'arrivée du taxi.</p>
        </div>
        </div>
      </div>

      <style>
      .image-container {
        position: relative;
      }
      .image-text {
        position: absolute;
        top: 200px;
        left: 50px;
        color: white;
        text-shadow: 1px 1px 1px black;
      }
      </style>
  </div>
    <div class="carousel-item">
      <div class="image-container">
      <img src="{{ asset('public/images/3.jpg') }}" class="d-block w-100" alt="Image 3">
        <div class="image-text">
          <div  style="color:aliceblue">
          <h2>Bienvenue chez TAXI_BOK_BOK</h2>
         <p> Taxi Bok-Bok est une platforme de réservation de taxi en ligne </p>
          <p> qui émerge comme une solution innovante et pratique</p>
          <p>pour les passagers souhaitant se déplacer rapidement</p>
          <p>et confortablement.
                et de suivre en temps réel l'arrivée du taxi.</p>
        </div>
        </div>
      </div>

      <style>
      .image-container {
        position: relative;
      }
      .image-text {
        position: absolute;
        top: 200px;
        left: 50px;
        color: white;
        text-shadow: 1px 1px 1px black;
      }
      </style>

      
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>


@include('footer.footer')