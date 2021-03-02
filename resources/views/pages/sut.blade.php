<?php
          class Post {
            public $title;

            public $author; 

            public $published;


            public function __construct($title, $author, $published) {

              $this->title = $title;
              $this->author = $author;
              $this->published = $published;
            }
          }

          $posts = [
            new Post('My First Post', 'JW', true),
            new Post('My Second Post', 'JW', true),
            new Post('My Third Post','SV', false)
          ];

          //$titles = array_column($posts, 'title');

          //$modified = array_map(function($post) {
            //return['title' => $post->title];
          //}, $posts);

          $posts = array_map(function($post) {
              return (array) $post;
          }, $posts);

          var_dump($posts);

          $titles = array_column($posts, 'title', 'author');

          var_dump($titles);

          //function view($name, $data = []) {

              //extract($data);
              //return require "view/{$name}.view.php";
          //}

          //function redirect($path) {
              //header("Location: /{$path}");
          //}