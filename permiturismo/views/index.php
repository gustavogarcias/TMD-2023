<?php
// lógica dos passeios
class Local
{
  public $id;
  public $name;
  public $desc;
  public $path;
  public $image;
}

$tangua = new Local();
$tangua->id = '1';
$tangua->name = "Parque Tanguá";
$tangua->desc = 'Parque Tanguá fica localizado no coração de Curitiba. Saiba mais!';
$tangua->path = '/tangua.php';
$tangua->image = '/assets/turismo/parque-tangua.png';

$terrazza = new Local();
$terrazza->id = '2';
$terrazza->name = "Terrazza 40";
$terrazza->desc = 'O restaurante mais alto da cidade de Curitiba. Saiba Mais!';
$terrazza->path = '/terrazza.php';
$terrazza->image = '/assets/turismo/terraza.jpg';

$mon = new Local();
$mon->id = '3';
$mon->name = "Museu Oscar Niemeyer";
$mon->desc = 'O famoso Museu do olho. Saiba Mais!';
$mon->path = '/mon.php';
$mon->image = '/assets/turismo/mon.png';

$tourism_places = [$tangua, $terrazza, $mon];

// lógica dos lugares secretos
class Secret
{
  public $id;
  public $name;
  public $desc;
  public $image;
  public $link;
}

$sfco = new Secret();
$sfco->id = '1';
$sfco->name = "SFCO179";
$sfco->desc = 'A SFCO179 tem cafés especiais, gastronomia, drinks, fábrica de chocolate e área de eventos. Tudo isso dentro de uma porta "mágica" no centro de Curitiba.';
$sfco->image = '/assets/turismo/sfco.png';
$sfco->link = '/sfco.php';

$gomm = new Secret();
$gomm->id = '2';
$gomm->name = "Parque Gomm";
$gomm->desc = 'O Parque Gomm foi criado no ano de 2010 e desde 2019 abriga também o Memorial Inglês e fica atrás do Shopping Pátio Batel.';
$gomm->image = '/assets/turismo/parque-gomm.png';
$gomm->link = '/gomm.php';

$cine = new Secret();
$cine->id = '3';
$cine->name = "Cine Passeio";
$cine->desc = 'O Cine Passeio é um complexo cultural no centro da cidade, um cinema simples mas muito aconchegante.';
$cine->image = '/assets/turismo/cine-passeio.png';
$cine->link = '/cine.php';

$secret_places = [$sfco, $gomm, $cine];

?>

<main>
  <section class="hero">
    <h1>Permita-se ao turismo de Curitiba</h1>
    <img src="/assets/jardim-botanico.jpg" alt="Jardim Botânico Curitiba" decoding="async" loading="lazy" style="content-visibility: auto;" />
  </section>
  <section class="tourism">
    <h3>Site especializado no Turismo de Curitiba</h3>
    <div class="tourism-places">
      <?php foreach ($tourism_places as $item) {
        echo
        "<a href='$item->path' class='place-link'>
          <div class='place-content'>
            <h3>$item->name</h3>
            <p>$item->desc</p>
          </div>
          <img src='$item->image' alt='$item->name' class='place-image' decoding='async' loading='lazy' style='content-visibility: auto;' />
        </a>";
      } ?>
    </div>
  </section>
  <section class="carousel">
    <h3>Lugares secretos na cidade</h3>
    <div class="carousel-container">
      <div class="carousel-slider">
        <?php foreach ($secret_places as $item) {
          echo
          "<div class='slide'>
            <div class='slide-content'>
              <h3>$item->name</h3>
              <p>$item->desc</p>
              <a href='$item->link'>Veja Mais</a>
            </div>
            <img src='$item->image' alt='$item->name' class='slide-image' decoding='async' loading='lazy' style='content-visibility: auto;' />
          </div>";
        }
        ?>
      </div>
      <button class="prev"></button>
      <button class="next"></button>
    </div>
  </section>
  <section class="tour">
    <div class="tour-find">
      <h2>Passeo República</h2>
      <p>Uma nova praça gastronômica com espaços fechados e um vão central ao ar livre está tomando forma no Portão, na altura do número 2.557 da Avenida República Argentina. Um local agradável para passar a tarde com os amigos. O local conta com cafés, restaurantes, pizzaria, lojas e mercado.</p>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yiCWHX13gUo?si=86m1oBxob3gmbQ-M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="tour-video"></iframe>
  </section>

</main>

<!-- cdn da biblioteca embla-carousel -->
<script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
<script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

<!-- lógica do carrosel -->
<script type="text/javascript" src="/scripts/carousel.js"></script>