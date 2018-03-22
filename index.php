<?php

$configs = include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AutoRIV service - Cel mai bun auto services</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <!-- Section: navigation -->
  <?php include 'navigation.php';?>
  <!-- /Section: navigation -->

  <!-- Section: intro -->
  <?php include 'intro.php';?>
  <!-- /Section: intro -->

  <!-- Section: about -->
  <?php include 'about.php';?>
  <!-- /Section: about -->

  <!-- Section: team -->
  <?php include 'team.php';?>
  <!-- /Section: team -->

  <!-- Section: services -->
  <?php include 'services.php';?>
  <!-- /Section: services -->

  <!-- Section: projects -->
  <?php include 'projects.php';?>
  <!-- /Section: projects -->

  <!-- Section: contact -->
  <?php include 'contact.php';?>
  <!-- /Section: contact -->

  <!-- Section: footer -->
  <?php include 'footer.php';?>
  <!-- /Section: footer -->

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
