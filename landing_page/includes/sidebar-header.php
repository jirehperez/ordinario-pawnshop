<?php include "start.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Ordinario Pawnshop
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="../assets/css/material/material-dashboard.css" rel="stylesheet" />
  <link href="../assets/css/material/material.min.css" rel="stylesheet" />
  <link href="../assets/css/material/datatables-material.min.css" rel="stylesheet" />
  <link href="../assets/css/form.css" rel="stylesheet" />
  <?php isset($_GET['sub']) == 'renew_redeem' ? '<link href="../assets/css/modal.css" rel="stylesheet" />' : ''; ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white">
      <!-- data-color="purple | azure | green | orange | danger" data-image="../assets/img/ordinario.jpg" -->
      <div class="logo">
        <a class="simple-text logo-normal">
          ORDINARIO PAWNSHOP
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?= empty($tbl) ? 'active' : '' ;?>">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $tbl == 'pawn_and_auction' ? '' : 'collapsed' ;?>" data-toggle="collapse" href="#pagesExamples" 
              aria-expanded="<?= $tbl == 'pawn_and_auction' ? 'true' : 'false' ;?>">
              <i class="material-icons">star</i>
              <p> Pawn & Auction
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?= $tbl == 'pawn_and_auction' ? 'show' : '' ;?>" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item <?= $sub == 'sangla' ? 'active' : '' ;?>">
                  <a class="nav-link" href="<?= $connect->url_enc('form','sangla','pawn_and_auction'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">star</i> </span>
                    <span class="sidebar-normal"> Sangla </span>
                  </a>
                </li>
                <li class="nav-item <?= $sub == 'renew_redeem' ? 'active' : '' ;?>">
                  <a class="nav-link" href="<?= $connect->url_enc('table','renew_redeem','pawn_and_auction'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">star</i> </span>
                    <span class="sidebar-normal"> Renew & Redeem </span>
                  </a>
                </li>
                <li class="nav-item <?= $sub == 'auction' ? 'active' : '' ;?>">
                  <a class="nav-link" href="<?= $connect->url_enc('form','auction','pawn_and_auction'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">star</i> </span>
                    <span class="sidebar-normal"> Auction </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Start of Navigation -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">
                <?= isset($_GET['pg']) ? strtoupper(str_replace('_',' ',$tbl)) : strtoupper(str_replace('.php','',basename($_SERVER['REQUEST_URI']))); ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">0</span>
                  <p class="d-lg-none d-md-block">Notifications</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Notification</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of Navigation -->