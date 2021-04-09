<!DOCTYPE html>
<html lang="en">
<?php
include "/xampp/htdocs/demos/myPortfolio/includes/db/dbFunctions.php";
include "includes/session.php";
include "includes/function.php"
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $pageTitle ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/myPortfolio/images/PersonalLogo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/hover/hover.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/db0e906b8e.js" crossorigin="anonymous"></script>


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Folio - v2.2.1
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        body {
            background-color: #f8f0ff;
            width: 100%;
            margin: 0;

        }

        .main-content {
            background-color: #f8f0ff;
        }

        p {
            color: #1d3350;

        }

        .container h1,
        h2,
        h3,
        h4 {
            text-align: center;
        }

        h3 {
            font-style: italic;
            font-weight: lighter;
        }

        a {
            margin-left: 5%;

        }

        a:hover {
            color: #8f00ff;
            text-decoration: underline;
        }

        ol li {
            margin-bottom: 1%;
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
            background-color: #8f00ff;
        }

        .vs_blog_img {
            display: block;

            height: 420px;
            width: 650px;
            border: 2px solid #8f00ff;
            margin: 2% auto;
            text-align: center;
        }

        .vs_project_img {
            display: block;

            height: 60%;
            width: 80%;
            border: 2px solid #8f00ff;
            margin: 2% auto;
            text-align: center;
        }


        #loginLogo {

            margin: 0 auto;
            height: 100px;
            width: 100px;
            object-fit: cover;
            border: 2px solid #8f00ff;
            border-radius: 50%;
        }

        #bigLetter {
            font-size: 200%;
            color: #8A2BE2;
        }


        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 100%;
            padding: 3%;
            opacity: 75%;
        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 12px 20px;
            box-sizing: border-box;


        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            opacity: 100%;
        }

        .btn:hover {
            background-color: #8f00ff;
        }
    </style>
</head>

<body>

    <!-- ======= Navbar ======= -->
    <nav id="main-nav" class="subpage-nav">
        <div class="row">
            <div class="container">
                <div class="logo">
                    <a href="/myPortfolio/index.php#hero"><img src="/myPortfolio//images/WordLogo.png"></a>
                </div>

                <div class="responsive">
                    <i data-icon="m" class="ion-navicon-round"></i>
                </div>

                <ul class="nav-menu list-unstyled">
                    <li><a href="/myPortfolio/index.php#aboutMe" class="smoothScroll">About <span class="sr-only">(current)</span></a></li>
                    <li><a href="/myPortfolio/index.php#backgroundsPage" class="smoothScroll">Backgrounds</a></li>
                    <li><a href="/myPortfolio/index.php#portfolio" class="smoothScroll">Projects</a></li>
                    <li><a href="/myPortfolio/index.php#journal" class="smoothScroll">Blogs</a></li>

                    <li><a href="/myPortfolio/index.php#contact" class="smoothScroll">Contact</a></li>

                    <?php
                    if (isset($_SESSION['userId'])) {

                        echo '<li><a href="/myPortfolio/logout.php" class="smoothScroll">Logout</a></li>';
                    } else {
                        echo   '<li><a href="/myPortfolio/login.php" class="smoothScroll">Login</a></li>';
                    }

                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main">