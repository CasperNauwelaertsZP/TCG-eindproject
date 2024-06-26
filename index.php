<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once DATABASE . '/connect.php';
require_once LIB . '/util/util.php';
require_once ROUTES;

if(session_status() === PHP_SESSION_NONE){
  session_start();
}

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

$route = array_key_exists($uri, $routes) ? $routes[$uri] : $routes['/404'];

$userid = isset($_SESSION['login']) ? $_SESSION['login'] : null;

$data = fetch('SELECT * FROM tblgebruiker_profile WHERE userid = ?', [
  'type' => 'i',
  'value' => $userid,
]); 
$theme = $data ? THEME_MAPPING[$data['theme']] : THEME_MAPPING['default'];

?>

<!DOCTYPE html>
<html lang="en" data-theme="<?php echo $theme; ?>">

<head>
  
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.3/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./tailwind.config.js"></script>
  <script src="https://kit.fontawesome.com/de1fdb2223.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/public/css/theme.css">
  <link rel="stylesheet" href="public\css\background.css">
  <title><?php echo $route['title']; ?></title>

</head>

<body>
  <div class="h-screen">
    <?php $route['nav'] ? include COMPONENTS . '/nav.php' : null; ?>
    
    <div class="container mx-auto">
      <?php include PUBLIC_S . '/' . $route['view']; ?>
    </div>

    <?php //$route['footer'] ? include COMPONENTS . '/footer.php' : null; ?>
  </div>
  <?php
  if (isset($_SESSION['login'])) {
    
    $userid = $_SESSION['login'];
    $update = insert('UPDATE tblgebruikers SET last_active = NOW() WHERE gebruikerId = ?', ['type' => 'i', 'value' => $userid]);
  
}
  ?>
  
<div class="area">
      <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
</body>
</html>