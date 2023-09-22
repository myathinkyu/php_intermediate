<?php

require_once "vendor/autoload.php";
use inject\posts\post;
use inject\authors\author;

class index
{
    public function __construct()
    {
        $fname = "maybel";
        $lname = "josepth";
        $content = "Have a nice day";

        $author = new author($fname,$lname);

        $post = new post($author,$content);
        $this->answerOut($post);
 
    }

    public function answerOut (post $post){
        $author = $post->getAuthor();
        echo $author-> getFirstName();
        echo "<br>";
        echo $post->getContent();
    }

}


new index;

?>