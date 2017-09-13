<?php
  class PagesController {
    public function home() {
      $first_name = 'Santi';
      $last_name  = 'AStete';
      require_once('views/home.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>