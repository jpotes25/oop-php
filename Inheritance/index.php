<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

/**
 * We can use inheritance to take the info of one class to another.
 * We can't use inheritance if the class is a final class
 */
class Admin extends User
{
    //.. we can overwrite superclass methods, only if that method is not "final"
}

$admin = new Admin('David');
echo $admin->getName();