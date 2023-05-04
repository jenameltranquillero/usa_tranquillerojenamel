<?php

if (isset($_POST)) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $query = "INSERT INTO usa_tranquillero (firstname, lastname, email, message) VALUES ('$firstname', '$lastname', '$email', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo ("COMMENTED");
      header('Location: table.php');
   } else {
      echo mysqli_error($connection);
   }
}