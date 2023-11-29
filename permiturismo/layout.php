<?php
class SubLink
{
  public $id;
  public $name;
  public $path;
}

class Link
{
  public $id;
  public $name;
  public $path;
}

$home = new Link();
$home->id = '1';
$home->name = 'Home';
$home->path = 'index.php';

$quem_somos = new Link();
$quem_somos->id = '2';
$quem_somos->name = 'Quem somos';
$quem_somos->path = 'quem-somos.php';

$restaurantes = new Link();
$restaurantes->id = '3';
$restaurantes->name = 'Restaurantes';
$restaurantes->path = 'restaurantes.php';

$passeios = new Link();
$passeios->id = '4';
$passeios->name = 'Passeios';
$passeios->path = 'passeios.php';

// lista de links
$links = [$home, $quem_somos, $restaurantes, $passeios];

// pegar link ativo baseado na página atual
function get_active_link($current_page)
{
  $url_array = explode('/', $_SERVER['REQUEST_URI']);
  $url = end($url_array);

  if ($current_page == $url) {
    return 'nav-link active';
  } else if ($url == '' && $current_page == 'index.php') {
    return 'nav-link active';
  } else {
    return 'nav-link';
  }
}
?>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <!-- css global -->
  <link rel="stylesheet" href="styles/layout.css">
  <!-- css da página -->
  <link rel="stylesheet" href=<?= $css; ?>>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- topo -->
  <nav>
    <div class="navbar">
      <!-- logo -->
      <a href="/index.php">
        <img src="/assets/logo2.png" alt="Logo" class="logo" decoding="async" loading="lazy" style="content-visibility: auto;" />
      </a>
      <!-- link de navegação -->
      <div class="nav-links">
        <?php foreach ($links as $item) {
          $active_link = get_active_link($item->path);

          if (isset($_COOKIE['permiturismo_cargo'])) {
            echo "<a href='/$item->path' class='$active_link'>$item->name</a>";
          } else {
            echo "<a href='/login.php' class='$active_link'>$item->name</a>";
          }
        } ?>
        <?php
        if (isset($_COOKIE['permiturismo_cargo'])) {
          echo "<form action='/connection/logout.php'>
            <button type='submit' class='login-btn'>
              Logout
            </button>
          </form>";
        } else {
          echo "<a href='/login.php' class='login-btn'>
            Login
          </a>";
        }
        ?>
        <?php
        if (isset($_COOKIE['permiturismo_cargo'])) {
          if ($_COOKIE['permiturismo_cargo'] == 'admin') {
            echo "<a href='/admin.php' class='login-btn'>
                    $_COOKIE[permiturismo_cargo]
                  </a>";
          }
        }
        ?>
      </div>
      <!-- link de navegação no celular -->
      <div class="nav-menu">
        <button type="button" class="toggle-sidebar"></button>
        <aside class="sidebar">
          <button type="button" class="close-sidebar"></button>
          <?php foreach ($links as $item) {
            $active_link = get_active_link($item->path);

            echo "<a href='/$item->path' class='$active_link'>$item->name</a>";
          } ?>
          <a href="/login.php">
            <button type="button" class="login-btn">Login</button>
          </a>
        </aside>
        <script type="text/javascript" src="/scripts/sidebar.js"></script>
      </div>
    </div>
  </nav>
  <!-- corpo das páginas -->
  <?php include($children); ?>
  <!-- rodapé -->
  <footer>
    <div class="footer">
      <a href="/index.php">
        <img src="/assets/logo2.png" alt="Logo" decoding="async" class="logo footer-logo" />
      </a>
      <p class="footer-desc">O PermiTurismo é um site feito por estudantes do Colégio Estadual Pedro Macedo para a conclusão do Trabalho Multidisciplinar do Técnico em Informática.</p>
      <div class="footer-socials">
        <a href="https://www.youtube.com/channel/UCJWVL8RjWsDYvzUzRU1ZtHQ" target="_blank">
          <img src="/assets/footer/youtube.png" alt="Youtube" class="footer-social" decoding="async" />
        </a>
        <a href="https://www.instagram.com/permiturismo?igshid=MW9lczQwcGd5MzV2cg%3D%3D&utm_source=qr" target="_blank">
          <img src="/assets/footer/instagram.png" alt="Instagram" class="footer-social" decoding="async" />
        </a>
      </div>
    </div>
  </footer>
</body>

</html>