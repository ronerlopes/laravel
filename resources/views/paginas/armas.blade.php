@extends('layout.template')
@section('content')

<section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4><strong>Armas</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="green-button">
              <a href="/inicio">Inicio</a>
            </div>
            <div class="orange-button">
              <a href="/mapas">Mapas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="services" id="services">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h1>Conheça as armas do CSGO</h1>           
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">       
            <img src = 'assets/images/ak-47.webp'>
            <h4>AK-47</h4>
            <p>Poderoso e confiável, o AK-47 é um dos rifles de assalto mais poderosos do mundo. Ele é mais mortal em rajadas curtas e controladas</p>
            <br>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
          <img src = 'assets/images/M4A1-S.webp'>            
            <h4>M4A1-S</h4>
            <p>Com menos balas no pente que o seu concorrente sem silenciador (M4A4), o M4A1 tem disparos mais silenciosos com menor coice e melhor precisão</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
          <img src = 'assets/images/AWP.webp'>            
            <h4>AWP</h4>
            <p>A infame AWP é reconhecida por recompensar aqueles que arriscam, sendo famosa pelo funcionamento "Um tiro, uma morte"</p>
            <br>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="service-item">
          <img src = 'assets/images/SSG_08.webp'>            
            <h4>SSG08</h4>
            <p>O SSG08 é um rifle de precisão que não causa muito dano, mas é barato e tem grande poder de disparo,sendo ideal para confrontos a longa distância no início de rodadas</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
          <img src = 'assets/images/Desert_Eagle.webp'>            
            <h4>Desert Eagle</h4>
            <p>Tão cara quanto poderosa, a Desert Eagle é uma pistola icônica difícil de domar, mas surpreendetemente precisa a longa distância</p>
            <br>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
          <img src = 'assets/images/R8_Revolver.webp'>            
            <h4>Revólver R8</h4>
            <p>O Revólver R8 dispara balas precisas e poderosas em troca de um gatilho duro. Disparar rapidamente girando o cão pode ser a melhor opção quando for necessário um poder de parada á queima-roupa.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection