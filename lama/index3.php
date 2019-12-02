<<<<<<< HEAD:index.php
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="image/filogo.png">
  <title>Filo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/bg_style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="image/filogo.png" alt="logo" width="50px;">
         
         </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?page=home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=contact">Contact</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              echo
              "
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=course'>Courses</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=home'>welcome,".$_SESSION['username'] . "</a>
              </li>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=logout'>Logout</a>
              </li>";
            }
            else{
              echo"<li class='nav-item'>
              <a class='nav-link' href='index.php?page=login_form'>Login</a>
              </li>";
            }
          ?>
          
          
        </ul>
      </div>
    </div>
  </nav>

  

  <!--restriction code -->
  <?php
        define("IS_INDEX",true);

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = "home";
        }
        require_once("aplikasi.php");
        require_once($page.".php");
    ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Team5 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
</body>

=======
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="image/filogo.png">
  <title>Filo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/bg_style.css" rel="stylesheet">

</head>

<body>

  <!--restriction code -->
  <?php
        define("IS_INDEX",true);

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = "home";
        }
        require_once("aplikasi.php");
        require_once($page.".php");
    ?>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
</body>

>>>>>>> 63c760a9981eea2ff39ea346b3f58cd5ee9f3b8b:filo alternative version/index.php
</html>