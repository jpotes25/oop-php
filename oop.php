<?php

class User
{
    public $type;
}

class Admin
{
    public function Greet()
    {
        echo "Hola administrador";
    }
}

$user1 = new User;
$user1->type = new Admin;

$user1->type->Greet();