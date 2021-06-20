<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>TSF Bank</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>

<body>
<?php
  include 'navbar.php';
?>
  <!-- Home -->
    <section class="topContent">
        <div class="mainHeading">
        <div class="heading text-center my-5">
            <span class="main-content">
                <h3>Welcome to</h3>
                <h1>TSF Bank</h1>
            </span>
        </div>
        <div style="margin-top: 12px;">
            <span class="sub-content">Making Banking Simplified</span>
        </div>
        <a href="#services" class="btn btn-outline-primary mt-3">Get Started</a>
        </div>
        <div class="topContentImg">
        <img src="images/banking.jpg" alt="Banking">
        </div>
    </section>
  <!-- End Home -->

  <!-- Services -->
    <section class="container" id="services">
      <h2 class="heading">Our Services</h2>

      <div class="container  text-center">
        <div class="row">
          <div class="card col-md-3 mx-auto" style="width: 18rem; margin:15px;">
            <img src="images/customer.png" class="card-img-top mt-3 img" alt="Responsive image">
            <div class="card-body">
              <h5 class="card-title">View Customers</h5>
              <p class="card-text">View all Customer's data</p>
              <a href="viewcustomers.php" class="btn btn-primary">View Customers</a>
            </div>
          </div>

          <div class="card col-md-3 mx-auto" style="width: 18rem; margin:15px;">
            <img src="images/transactions.png" class="card-img-top mt-3 img" alt="Responsive image">
            <div class="card-body">
              <h5 class="card-title">View Transactions</h5>
              <p class="card-text">View all the past transactions</p>
              <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
            </div>
          </div>

          <div class="card col-md-3 mx-auto" style="width: 18rem; margin:15px;">
            <img src="images/new user.png" class="card-img-top mt-3 img" alt="Responsive image">
            <div class="card-body">
              <h5 class="card-title" id="harry">Create User</h5>
              <p class="card-text">Create a new user</p>
              <a href="createuser.php" class="btn btn-primary">Create User</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Services -->

  <!-- About -->
  <section id="about" class="container">
    <h2 class="heading">About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="images/about2.jpg" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4" style="padding-left:80px;">
          <div>
            <span class="text">TSF Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content">This is a Basic Banking System for making transactions between users. It can transfer Money between multiple accounts, view all Customer's data and view all the past transactions happened between different accounts.</span>
          </div>
          <a href="#services" class="btn btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Footer -->
  <footer class="text-center mt-5 py-2" id="footer">
    <h2 class="heading" style="padding-top:10px; margin:10px;">Contact</h2>
    <p>Made by <b><a href='https://www.linkedin.com/in/roshan-desale/'>Roshan Desale</a></b> <br>Web Developer Intern at GRIP @TSF
      <br class="text-copy">
      Copyright &copy; 2021 All rights reserved
    </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>

</body>
</html>