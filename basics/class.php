<?php
  class Book { 
    public $title;
    public $aurthor;
    public $pages;
    private $isbn;

    function __construct(){
      echo "New Book Created";
      // $this->title = $aTitle;
      $this->isbn = 1;
    }
  }

  class Article extends Book {

  }

  $book1 = new Book();
  $book1 -> title = "Yael loves pugs";
  $book1 -> author = "Yael Brown";
  $book1 -> pages = 400;

  echo $book1->title;

  $article = new Article();
  $article -> title = "good article";

  echo $article -> title;

?>