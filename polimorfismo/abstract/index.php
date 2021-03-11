<?php

include('Admin.php');
include('Guest.php');
include('User.php');


$guest = new Guest();

echo $guest->login();

$user = new User('David');

echo $user->login();

$admin = new Admin('Javier');

echo $admin->login();