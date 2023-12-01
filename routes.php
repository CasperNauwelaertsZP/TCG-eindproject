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
  '/account/registreren' => [
    'view' => '/account/registreren.php',
    'title' => 'registreren',
    'nav' => true,
    'footer' => false,
  ],
  '/account/logout' => [
    'view' => '/account/logout.php',
    'title' => 'logout',
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
    'title' => 'edit account',
    'nav' => true,
    'footer' => false,
  ],
  '/user/friends/delete' => [
    'view' => '/user/user/delete-friend.php',
    'title' => 'edit account',
    'nav' => true,
    'footer' => false,
  ],
  '/user/friendrequest' => [
    'view' => '/user/user/send_Friendrequest.php',
    'title' => 'edit account',
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
    'title' => 'categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/dashboard/categorieen/change' => [
    'view' => '/user/admin/change-categorieen.php',
    'title' => 'categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/dashboard/categorieen/delete' => [
    'view' => '/user/admin/delete-categorieen.php',
    'title' => 'categorieen',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/toevoegenkaart' => [
    'view' => '/user/admin/toevoegenkaart.php',
    'title' => 'toevoegen_kaart',
    'nav' => true,
    'footer' => false,
  ],
  '/admin/user/kaart' => [
    'view' => '/user/admin/kaart.php',
    'title' => 'kaarten',
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

];
