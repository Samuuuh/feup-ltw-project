<?php
  session_start();
  include_once('database/connection.php');
  include_once('database/pets.php');
  
  include_once('templates/common/header.php');
  include_once('search_advanced.php');
  include_once('display_pets.php');
  include_once('templates/common/footer.php');
?>