<?php
  include_once('../includes/session.php');
  
  include_once('../database/connection.php'); // connects to the database
  include_once('../database/users.php');      // loads the functions responsible for the users table
  include_once('../database/adopt_pet.php');      // loads the functions responsible for the users table
  include_once('../database/pets.php');      // loads the functions responsible for the users table

  if(!isLogged()) {
    header('Location: ../error404.php');
  }
  else {
    deletePost($_GET['id']);
    print('delete');
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>