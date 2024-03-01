<?php

$routes = [
  '/404' => [
    'view' => '404.php',
    'title' => 'Not Found',
    'nav' => false,
    'footer' => false,
  ],
  '/' => [
    'view' => 'home.php',
    'title' => 'Home',
    'nav' => true,
    'footer' => true,
  ],
  '/about' => [
    'view' => 'about.php',
    'title' => 'About',
    'nav' => true,
    'footer' => true,
  ],
  '/account/login' => [
    'view' => '/account/login.php',
    'title' => 'login',
    'nav' => true,
    'footer' =>false,
  ],
  '/account/register' => [
    'view' => '/account/register.php',
    'title' => 'register',
    'nav' => true,
    'footer' => false,
  ],
  '/account/reset-password' => [
    'view' => '/account/reset-password.php',
    'title' => 'reset password',
    'nav' => true,
    'footer' => false,
  ],

  '/account/process-reset-password' => [
    'view' => '/account/process-reset-password.php',
    'title' => 'reset password',
    'nav' => true,
    'footer' => false,
  ],

  '/user/payment' => [
    'view' => '/user/payment.php',
    'title' => 'payment',
    'nav' => true,
    'footer' => false,
  ],
  '/account/send-password-reset' => [
    'view' => '/account/send-password-reset.php',
    'title' => 'reset password',
    'nav' => true,
    'footer' => false,
  ],
  '/account/registreren' => [
    'view' => '/account/registreren.php',
    'title' => 'registreren',
    'nav' => true,
    'footer' => false,
  ],
  '/account/password' => [
    'view' => '/account/password.php',
    'title' => 'password regen',
    'nav' => true,
    'footer' => false,
  ],
  '/account/logout' => [
    'view' => '/account/logout.php',
    'title' => 'logout',
    'nav' => false,
    'footer' => false,
  ],
  '/account/mailer' => [
    'view' => '/account/mailer.php',
    'title' => 'mail',
    'nav' => false,
    'footer' => false,
  ],
  '/account/settings/edit' => [
    'view' => '/account/settings.php',
    'title' => 'edit account',
    'nav' => true,
    'footer' => false,
  ],
  '/user/friends' => [
    'view' => '/user/user/vrienden.php',
    'title' => 'vrienden',
    'nav' => true,
    'footer' => false,
  ],
  '/user/friends/delete' => [
    'view' => '/user/user/delete-friend.php',
    'title' => 'delete friend',
    'nav' => true,
    'footer' => false,
  ],
  '/user/friendrequest' => [
    'view' => '/user/user/send_Friendrequest.php',
    'title' => 'send friend request',
    'nav' => true,
    'footer' => false,
  ],
  '/member/user/shop' => [
    'view' => '/user/user/packs/shop.php',
    'title' => 'Shop',
    'nav' => true,
    'footer' => false,
  ],

  '/dashboard/users' => [
    'view' => '/user/admin/gebruikers.php',
    'title' => 'see users',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/users/edit' => [
    'view' => '/user/admin/change_user.php',
    'title' => 'edit users',
    'nav' => true,
    'footer' => false,
  ],
  '/dashboard/categorieen' => [
    'view' => '/user/admin/categorieen.php',
    'title' => 'categorieen',
    'nav' => true,
    'footer' => true,
  ],
  '/dashboard/categorieen/add' => [
    'view' => '/user/admin/add-categorieen.php',
    'title' => 'add categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/dashboard/categorieen/change' => [
    'view' => '/user/admin/change-categorieen.php',
    'title' => 'change categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/dashboard/categorieen/delete' => [
    'view' => '/user/admin/delete-categorieen.php',
    'title' => 'delete categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/toevoegenkaart' => [
    'view' => '/user/admin/toevoegenkaart.php',
    'title' => 'toevoegen_kaart',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/level' => [
    'view' => '/user/admin/levels/level.php',
    'title' => 'level',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/level/change' => [
    'view' => '/user/admin/levels/change-level.php',
    'title' => 'change level',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/group/change' => [
    'view' => '/user/admin/levels/change-group.php',
    'title' => 'change group',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/kaart' => [
    'view' => '/user/admin/kaart.php',
    'title' => 'kaarten',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/kaartGebruiker' => [
    'view' => 'user/admin/kaartGebruiker.php',
    'title' => 'Cards',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/packs' => [
    'view' => '/user/admin/packs/packs.php',
    'title' => 'packs',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/packs/add' => [
    'view' => '/user/admin/packs/add-packs.php',
    'title' => 'packs',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/packs/change' => [
    'view' => '/user/admin/packs/change-packs.php',
    'title' => 'packs',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/packs/delete' => [
    'view' => '/user/admin/packs/delete-packs.php',
    'title' => 'packs',
    'nav' => true,
    'footer' => false,
  ],
  'lang' => [
    'view' => 'src\public\lang.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],
  '/talen/en' => [
    'view' => 'talen\en.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],
  '/talen/fr' => [
    'view' => 'talen\fr.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],
  '/talen/nl' => [
    'view' => 'talen\nl.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],
  '/talen/zh' => [
    'view' => 'talen\zh.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],
  '/vendor/autoload' => [
    'view' => 'vendor\autoload.php',
    'title' => 'lang',
    'nav' => false,
    'footer' => false,
  ],

];
