@extends('layout.template')
@section('content')
<section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4><strong>Mapas</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="green-button">
              <a href="/inicio">Inicio</a>
            </div>
            <div class="orange-button">
              <a href="/armas">Armas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h1>Conheça os mapas do CSGO</h1>           
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 3;">
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Anubis é a novidade mais recente da rotação de mapas do CS:GO. Ela entrou em novembro de 2022 para o lugar da Dust2. Sua primeira aparição oficial foi na BLAST Premier: World Final.</p>
              <span>Ela é inspirada numa cidade egípcia e conta com bombsites em cada ponta do mapa. O bomb A fica pertinho do respawn dos CTs, que podem se deslocar para lá rapidamente. O local é bem fechadinho e ainda conta com uma janela, perfeita para o posicionamento de um awper.</span>
              <h4>Anubis</h4>              
              <div class="right-image">
                <img src="assets/images/anubis.png" alt="Anubis">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Ancient entrou no lugar da Train em maio de 2021. Ela tem como inspiração aqueles sítios arqueológicos de civilizações antigas que existem especificamente na América Latina.</p>
              <span>O bomb A é uma área aberta com várias caixas posicionadas no perímetro, objetos que dão cover aos CTs. Os terroristas podem acessá-lo por meio de dois caminhos. Para os TRs, o bomb B é uma área mais difícil de rushar. É preciso ter um bom domínio do meio para enfraquecer a defesa dos contra-terroristas, principalmente o awp.</span>
              <h4>Ancient</h4>             
              <div class="right-image">
                <img src="assets/images/ancient.png" alt="Ancient">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Inferno existe desde os primórdios do Counter-Strike e se passa na Itália. Pela tamanha longevidade, se tornou um dos mapas mais tradicionais do competitivo. Se você acompanhou o cenário profissional nos últimos tempos, infelizmente sabe que esse mapa tem sido o algoz de muitos times brasileiros, sobretudo Furia e Imperial.</p>
              <span>A Inferno é um mapa predominantemente CT. Isso significa que os contra-terroristas têm mais facilidade para marcar pontos nela. Eles costumam colocar três jogadores para defender o bomb A (por causa da Banana, região mais disputada da arena) e dois para defender o bomb B.</span>
              <h4>Inferno</h4>             
              <div class="right-image">
                <img src="assets/images/inferno.webp" alt="Inferno">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Mirage é um dos mapas do CS:GO mais dinâmicos da atual lista. Ela se passa no Marrocos e foi a única arena que marcou presença em todos os Majors até o momento.</p>
              <span>O Meio é o lugar mais importante da Mirage. Caso os terroristas consigam o seu controle, poderão executar entradas em qualquer bomb vindo de diversos caminhos. Uma particularidade desse mapa é que o bomb A é bem fácil de ser retomado por parte dos CTs. Eles, inclusive, costumam deixar os TRs plantarem a C4 pra depois tentarem recuperar o perímetro</span>
              <h4>Mirage</h4>             
              <div class="right-image">
                <img src="assets/images/mirage.jpg" alt="Mirage">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Nuke entrou para o lugar da Cache em março de 2019. Esta arena é uma das mais complexas do CS:GO, então não costumamos vê-la com muita frequência em partidas ranqueadas. Nos torneios, entretanto, é figurinha carimbada no map pool de várias equipes, como Astralis e Team Liquid.</p>
              <span>Com exceção da base CT, que fica a céu aberto, os demais locais da arena são extremamente apertadinhos. Essa característica dificulta um pouco o trabalho dos awpers. A grande parte das trocações se dão com rifles entre curtas e médias distâncias. Embora não seja uma callout “oficial” dos brasileiros, o Vestiário (porta que desemboca no bomb B), também é chamada de Breaking Bad nas transmissões do streamer Gaulês. Neste local existe um jaleco amarelo idêntico ao que os protagonistas da série utilizavam para cozinhar drogas.</span>
              <h4>Nuke</h4>             
              <div class="right-image">
                <img src="assets/images/nuke.png" alt="Nuke">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Overpass foi – e continua sendo – um dos mapas do CS:GO mais icônicos do jogo. Pelo menos para nós, brasileiros. Isso porque ela é a queridinha de Fallen, Fer e os integrantes da Imperial.</p>
              <span>Em termos de área total, a Overpass é o maior mapa do competitivo. Em função disso, você verá trocações rolando em qualquer lugar da arena, pois o contra-terroristas possuem espaço de sobra para avançarem suas linhas. A marca registrada do mapa é a a curta distância entre os bombsites, que são bem pertos um do outro. A rotação defensiva dos CTs, portanto, acontece de forma muito rápida. Essa dinâmica complica a vida dos terroristas, principalmente quando estão em desvantagem numérica.</span>
              <h4>Overpass</h4>             
              <div class="right-image">
                <img src="assets/images/overpass.webp" alt="Overpass">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>A Vertigo vem se destacando recentemente por ser o pick de segurança da Furia. Os brasileiros costumam mandar muito bem quando estão jogando por lá.</p>
              <span>Parecido com a Nuke, este mapa tem espaços curtos e bombsites em níveis diferentes. A rotação defensiva dos CTs é bem ligeira, o que dá dinamismo às partidas. Os duelos com rifles, submetralhadoras e pistolas são rápidos e ferozes. Ela leva esse nome pois se passa no alto de um edifício em construção. Pessoas com medo de altura costumam ter vertigens quando olham para baixo.</span>
              <h4>Vertigo</h4>              
              <div class="right-image">
                <img src="assets/images/vertigo.webp" alt="Vertigo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
@endsection