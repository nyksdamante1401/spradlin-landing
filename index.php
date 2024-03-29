<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Web page CSS -->
    <link rel="stylesheet" type="text/css" href="assets/style.css" />

    <title>This is Moving!</title>
  </head>
  <body>
      <a href="https://www.spradlinrelocation.net/" class="logo">
        <h1>
          <img src="assets/images/Spradlin Logo.png" alt="Spradlin" width="180" height="100">
          <img src="assets/images/Bekins Logo.png" alt="Bekins" width="180" height="100">
        </h1>
      </a>

    <!-- Home section -->
    <section class="home">
      <div class="intro-text">
        <h2>
          <span class="moving">
            <p>Beat the excessive summer rates!</p>
          </span>
        </h2>
      </div>
      <a class="btn blue" id="show-popup">Get a quote now</a>
    </section>
    
    <!-- Get a quote -->
    <section class="quote" id="quote">
      <div class="container">  
        <div id="popup-form-container" style="display:none;"> 
          <form id="contact-form" method="POST" action="assets/quote.php">
            <div class="form-row form-error" style="display:none;"></div>
            <div class="form-row">
              <label for="contact-form-name">Full Name:</label>
              <input id="contact-form-name" class="form-input" type="text" name="name" required>
            </div>
            <div class="form-row">
              <label for="contact-form-email">Email Address:</label>
              <input id="contact-form-email" class="form-input" type="email" name="email" required>
            </div>
            <div class="form-row">
              <label for="contact-form-phone">Phone Number:</label>
              <input id="contact-form-phone" class="form-input" type="tel" name="phone" required>
            </div>
            <div class="form-row">
              <label for="contact-form-request">Request:</label>
              <textarea id="contact-form-request" class="form-input" name="request" required></textarea>
            </div>
            <button id="button" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>
    
    <!-- Web page script -->
    <script src="assets/main.js"></script>
  </body>
</html>

<?php

include("index.php");
//like
include("quote.php");
?>

<?php
require("index.php");
//like
include("quote.php");

?>