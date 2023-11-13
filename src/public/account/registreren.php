<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once LIB . '/util/util.php';

if (isset($_POST['register'])) {
  register($_POST);
  exit();
}

header('Location: /');
exit();

function register($formData) {
  
  $email = $formData['email'];
  $username = $formData['username'];
  $password = $formData['password'];
  $passwordConfirm = $formData['passwordConfirm'];
  
  $data = fetch("SELECT * FROM tblgebruikers WHERE email = ?", [ 'type' => 's','value' => $email ]);
  
  if ($data) {
    header('Location: /account/register?error=email');
    exit();
  }
  
  $data = fetch("SELECT * FROM tblgebruikers WHERE gebruikernaam = ?", [
    'type' => 's',
    'value' => $username,
  ]);
  
  if ($data) {
    header('Location: /account/register?error=username');
    exit();
  }
  
  if ($password !== $passwordConfirm) {
    header('Location: /account/register?error=password');
    exit();
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: /account/register?error=email');
  }
  
  $password = password_hash($password, PASSWORD_ARGON2ID);
  $initialized = insertUser($username, $password, $email);

  if (!$initialized) {
    header('Location: /account/register?error=server');
    return;
  }
  
  header('Location: /account/login?success=register');
  exit();
}

function insertUser($username, $password, $email) {
  global $connection;
  $userData = insert(
    'INSERT INTO tblgebruikers (gebruikernaam, wachtwoord, email) VALUES (?, ?, ?)',
    ['type' => 's', 'value' => $username],
    ['type' => 's', 'value' => $password],
    ['type' => 's', 'value' => $email]
  );

  $userId = mysqli_insert_id($connection);

  $userProfileData = insert(
    'INSERT INTO tblgebruiker_profile (userid,profielfoto,theme,admin) VALUES (?, ?, ?,?)',
    ['type' => 'i', 'value' => $userId],
    [
      'type' => 's',
      'value' => 'https://avatars.githubusercontent.com/u/64209400?v=4',
    ],
    ['type' => 's', 'value' => 'light'],
    ['type' => 'i', 'value' => '0'],
  );

  return $userData && $userProfileData;
}
