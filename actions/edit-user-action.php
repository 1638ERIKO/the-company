<?php
  include '../classes/User.php';

  #instantiate an object
  $user = new User;

  # call the method
  $user->update($_POST, $_FILES);
?>