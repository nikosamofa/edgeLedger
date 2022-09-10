<?php
if(isset($_POST['email'])){

  // Email information
  $admin = $_POST['name'];
  $email = $_POST['email'];
  $phone = $POST['phone'];
  $message = $_POST['message'];
  // send email

  mail($admin_email, "New form submission", $message . ' - ' . $phone, "From:" . $email)

  header('Location: https://631ccdf19e1ad26d03a7b0bf--ubiquitous-cactus-0a6cd0.netlify.app/')
}