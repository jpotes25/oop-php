<?php

interface Search
{
    public function all();
}

class User implements Search
{
    public function all()
    {
        return "Gettin' Users <br>";
    }
}

class Post implements Search
{
    public function all()
    {
        return "Gettin' Post, JSON <br>";
    }
}

$user = new User();

echo $user->all();

$post = new Post();
echo $post->all();