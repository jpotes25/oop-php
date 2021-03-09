<?php

include 'Person.php';
include 'Admin.php';
include 'User.php';


$user = new User;

$user->type = new Admin;

echo $user->type->greet();