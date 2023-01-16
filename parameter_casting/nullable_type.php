<?php

class Post {
  private $title;
  private $content;
  public function __construct(?string $title, string $content) {
    $this->title = $title;
    $this->content = $content;
  }
  public function getTitle(){
    return $this -> title;
  }
  public function getContent() {
    return $this -> content;
  }
}


class StringMutator {
  public static function bold(?string $word) {
    //return sprintf('<b>%s</b>', $word);
    echo $word;
  }
}

class PostMutator {
  private $post;
  public function __construct(Post $post) {
    $this -> post = $post;
  }
  
  public function getBoldTitle(){
    return StringMutator::bold($this -> post -> getTitle());
  }
}

$post = new Post(null, 'Saya sedang belajar OOP PHP');
$mutator = new PostMutator($post);
echo $mutator->getBoldTitle();
echo PHP_EOL;

