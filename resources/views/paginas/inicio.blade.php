@extends('layout.template')
@section('content')

  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/wpp1.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                <h2>Counter-Strike: <em>Global Offensive,</em> mais famoso como <em>CS:GO,</em> é um jogo competitivo de <em>tiro</em> em primeira pessoa (FPS).</h2>                  
                  <div class="div-dec"></div>                  
                  <div class="buttons">
                    <div class="green-button">
                      <a href="/mapas">Mapas</a>
                    </div>
                    <div class="orange-button">
                      <a href="/armas">Armas</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/wpp2.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">   
                 
                  <h2>As <em>armas</em> são divididas em cinco categorias: pistolas, submetralhadoras, <em>rifles,</em> armas pesadas e <em>granadas</em>.</h2>
                  <div class="div-dec"></div>                  
                  <div class="buttons">
                    <div class="green-button">
                      <a href="/mapas">Mapas</a>
                    </div>
                    <div class="orange-button">
                      <a href="/armas">Armas</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/wpp3.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  
                  <h2>Partidas <em>competitivas</em> do <em>CSGO</em> contam com 7 mapas oficiais. Eles são: <em>Inferno</em>, Mirage, Nuke, Overpass, Vertigo, <em>Ancient</em> e Anubis.</h2>
                  <div class="div-dec"></div>                  
                  <div class="buttons">
                    <div class="green-button">
                      <a href="/mapas">Mapas</a>
                    </div>
                    <div class="orange-button">
                      <a href="/armas">Armas</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  <!-- ***** Main Banner Area End ***** -->
  @endsection