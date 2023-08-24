<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CR_PROGRAM Ltd COMPANY </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="shortcut icon" href="files/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="files/css/main.css">
</head>
<body>

<?php
require_once 'php-functions.php';
?>



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
    
            <div class="logo"><a href="index" class="remove-decoration myLogo">
              <img src="files/images/1.png" width=50 height=50 class="img-fluid logo-image">
              </a>
            </div>
    
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bi bi-house">
                </span>&nbsp;Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="bi bi-briefcase-fill"></span>&nbsp;
                  About Us
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="mission_vission.php">Mission and Vission</a></li>
                  <li><a class="dropdown-item" href="membership.php">Membership</a></li>
                  <li><a class="dropdown-item" href="directors.php">Directors</a></li>
                  <li><a class="dropdown-item" href="management.php">Management</a></li>
                  <li><a class="dropdown-item" href="history.php">History</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="bi bi-journal-bookmark"></span>&nbsp;
                  Services
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="procurement.php">Procurement</a></li>
                  <li><a class="dropdown-item" href="Logistics.php">Logistics</a></li>
                  <li><a class="dropdown-item" href="E.commence_marketing.php">E.Commence Marketing</a></li>
                  <li><a class="dropdown-item" href="buy_sell_project.php">Buy and Sell Project</a></li>
                  li><a class="dropdown-item" href="Debtor_repayment.php">Debtor Re_Payment</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bi bi-pc-display"></span>&nbsp;
                 Find Job
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href=" ">Announcement</a></li>
                  <li><a class="dropdown-item" href="testimonies.php">Testimonies</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bi bi-megaphone"> </span>&nbsp;
                 Publication
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="announcements.php">Announcement</a></li>
                  <li><a class="dropdown-item" href="economic_growth.php">Economic Growth</a></li>
                </ul>
              </li>
              


              <li class="nav-item">
                <a class="nav-link" href="contact.php">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bi bi-person-video2"></span>&nbsp;
                    Contact Us</a>
              </li>

                
                
              </ul>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADMIN</button>



              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADMIN LOGIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  

                  <form action="files/admin-login-process.php" method="POST">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" name="admin_email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" name="admin_username" class="form-control" id="inputUsername" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" name="admin_password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row my-2">
                      <div class="col-sm-10 text-center">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                      </div>
                    </div>
                  </form>

                  


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>



              <form class="d-flex px-5" role="search">
                <input class="form-control me-2 d-none" type="search" placeholder="Search item..." aria-label="Search" name="searchItemChar" onkeyup="searchItem(this.value)">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
    
            </div>
    
          </div>
        </nav>
    
        </div>
      </header>