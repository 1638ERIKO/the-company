<?php
  include '../classes/User.php';
  #instantiate an object
  $user = new User;
  
  # Call the logout method inside the User.php
  $user->logout();
?>