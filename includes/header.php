    <!DOCTYPE html>
    <html lang="en">
    <?php
    include "includes/db/dbFunctions.php";
    include "includes/session.php";
    include "includes/function.php"
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicons -->
        <link href="./images/PersonalLogo.png" rel="icon">
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

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">


        <script src="https://kit.fontawesome.com/db0e906b8e.js" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Nguyen Pham</title>
        <style>
            body {
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

            #profilePic {
                display: block;
                margin: 0 auto;
                height: 250px;
                width: 250px;
                object-fit: cover;
                border: 2px solid #8f00ff;
                border-radius: 50%;
            }

            #bigLetter {
                font-size: 200%;
                color: #8A2BE2;
            }


            input[type=text],
            textarea {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }

            #backgroundsPage {
                margin-bottom: 5%;
            }

            #portfolio-flters li .filter-active {
                color: #8f00ff;
            }

            #journal,
            #journal-blog {
                height: auto;
                width: 100%;
                padding-bottom: 60px;
                position: relative;
                background-color: #f8f0ff !important;
            }
        </style>
    </head>

    <body>

        <!-- <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #545454;">
        <a class="navbar-brand" href="#">
            <img src="/myPortfolio/images/PersonalLogo.png" width="50" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/myPortfolio/index.php#aboutMe" style="color: #fff;">About <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#" style="color: #fff;">Backgrounds</a>
                <a class="nav-item nav-link" href="#" style="color: #fff;">Abilities</a>
                <a class="nav-item nav-link" href="#" style="color: #fff;">Projects</a>
                <a class="nav-item nav-link" href="#" style="color: #fff;">Contacts</a>
                <a class="nav-item nav-link" href="/myPortfolio/VSExtensionBlog.php" style="color: #fff;">Blog</a>


                <?php
                // if (isset($_SESSION['userId'])) {
                //     echo '<a class="nav-item nav-link" href="insertBlog.php" style="color: #fff;">Insert</a>';
                //     echo '<a class="nav-item nav-link" href="/myPortfolio/logout.php" style="color: #fff;">Logout</a>';
                // } else {
                //     echo   ' <a class="nav-item nav-link" href="/myPortfolio/login.php" style="color: #fff;">Login</a>';
                // }

                // 
                ?>
            </div>
        </div>
    </nav> -->
        <nav id="main-nav">
            <div class="row">
                <div class="container">
                    <div class="logo">
                        <a href="../index.php#hero"><img src="./images/WordLogo.png"></a>
                    </div>

                    <div class="responsive">
                        <i data-icon="m" class="ion-navicon-round"></i>
                    </div>

                    <ul class="nav-menu list-unstyled">
                        <li><a href="./index.php#aboutMe" class="smoothScroll">About <span class="sr-only">(current)</span></a></li>
                        <li><a href="./index.php#backgroundsPage" class="smoothScroll">Backgrounds</a></li>
                        <li><a href="./index.php#portfolio" class="smoothScroll">Projects</a></li>
                        <li><a href="./index.php#journal" class="smoothScroll">Blogs</a></li>

                        <li><a href="./index.php#contact" class="smoothScroll">Contact</a></li>

                        <?php
                        if (isset($_SESSION['userId'])) {

                            echo '<li><a href="./logout.php" class="smoothScroll">Logout</a></li>';
                        } else {
                            echo   '<li><a href="./login.php" class="smoothScroll">Login</a></li>';
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div>