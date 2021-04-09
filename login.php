<?php

$pageTitle = 'Login';
include 'includes/subHeader.php';

?>

<main id="main">

    <div class="main-content paddsection">
        <div class="container">
            <div class="card">
                <img id="loginLogo" src="./images/PersonalLogo.png">
                <br>
                <h2 style=" font-weight: bold;">LOGIN</h2>
                <?php
                //if the user is registered, show a message
                if (isset($_SESSION['username'])) {
                    echo '<div class="mt-3"></div>';
                    echo "You are logged in as ", $_SESSION['username'];
                    echo '<div class="mt-2"></div>';
                } else if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    if (!empty($_POST['username']) && !empty($_POST['password'])) {
                        //store escaped $_Post values in variables
                        $username = htmlentities($_POST['username']);
                        $password = htmlentities($_POST['password']);

                        $dbName = connect('nguyen_portfolio');
                        $userId = getLoggedInId($dbName, $username, $password);

                        if ($userId > 0) {
                            $_SESSION['username'] = $username;
                            $_SESSION['userId'] = $userId;
                            redirect_to("login.php");
                            exit();
                        } else {
                            echo '<p class="text-danger font-weight-bold mt-4">Incorrect username or password.</p>';
                        }
                    } else {
                        echo '<p class="text-danger font-weight-bold mt-4">Please fill out both fields.</p>';
                    }
                } else {
                    if (isset($_GET['logout'])) {
                        if ($_GET['logout'] == 1) {
                            echo "<ul><li class='alert' style='color: green;'>You have been logged out.</li></ul>";
                        }
                    }
                }
                ?>

                <?php

                if (!isset($_SESSION['username'])) {
                ?>

                    <div class="mt-4"></div>
                    <form action="login.php" method="post">
                        <div class="form-group ">
                            <label for="username" style=" font-weight: bold;">Username:</label>
                            <input type="text" name="username" />
                        </div>
                        <div class="form-group ">
                            <label for="email" style=" font-weight: bold;">Password:</label>
                            <input type="password" name="password" />
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                <?php
                }

                ?>
            </div>
        </div>
    </div><!-- End Blog Single -->

</main><!-- End #main -->