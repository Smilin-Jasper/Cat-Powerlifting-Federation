<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $name = htmlspecialchars($_POST['name']);
  $dob  = htmlspecialchars($_POST['dob']);
  $email  = htmlspecialchars($_POST['email']);
  $ph  = htmlspecialchars($_POST['ph']);
  $address  = htmlspecialchars($_POST['address']);


  echo  $name, ' ', $dob, ' ',$email, ' ', $ph, ' ', $address;
?>