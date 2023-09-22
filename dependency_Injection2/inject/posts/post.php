<?php

namespace inject\posts;
use inject\authors\author;

class post
{
    private $author,$content;

    public function __construct(author $author,$content)
    {
        $this -> author = $author;
        $this->content = $content;
    }

    public function getAuthor(){
        return $this-> author;
    }

    public function getContent(){
        return $this-> content;
    }
}



?>





