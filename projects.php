<?php
$pageTitle = "Project Page";
include 'includes/subHeader.php';
include 'includes/db/dbConnection.php'
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <h1>Nguyen Pham's Projects</h1>
            <br>
            <div class="form-wrapper">
                <div class="heading text-center">
                    <div class="mt-5"></div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="widget-sidebar sidebar-search">

                                <div class="mt-2"></div>
                                <div>
                                    <form action="projects.php" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="searchText" placeholder="Search by project title or type" aria-label="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-secondary ml-4" type="submit"> Search
                                                    <i class="fas fa-search"></i>

                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            </div>
            <div class="mt-5"></div>


            <?php
            if (isset($_SESSION['userId'])) { ?>
                <ul>
                    <li> <a href="insertProject.php">INSERT NEW PROJECT</a></li>

                </ul>

            <?php
            }
            ?>

            <br>

            <?php
            $conn = connect('nguyen_portfolio');

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $results = getProjectsBySearch($conn, $_POST['searchText']);
            } else {
                $results = getAllProjects($conn);
            }

            if ($results == null) {
                echo '<h3>There are no projects match the search result.</h3>';
                echo '<h3 style="text-decoration: underline;"><a href="project.php">All Projects</a></h3>';
            } else {



                foreach ($results as $row) {
            ?>
                    <?php
                    if (isset($_SESSION['userId'])) { ?>
                        <div class="card">
                            <ul>

                                <li> <a href="updateProject.php?projectId=<?php echo $row["projectId"] ?>">Update Project <?php echo $row["projectId"];  ?></a></li>
                                <li> <a href="deleteProject.php?projectId=<?php echo $row["projectId"] ?>">Delete Project <?php echo $row["projectId"] ?></a></li>
                            </ul>




                        </div>
                        <br>
                    <?php
                    }
                    ?>
                    <div class="card">
                        <h2><?php echo $row["title"] ?></h2>

                        <div><?php echo $row["teaser"]; ?></div>

                        <a href="./projectDetails.php?id=<?php echo $row['projectId'] ?>" style="text-align:left; font-size:large; font-weight:bolder">
                            SEE DETAILS <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </div>


                    <br>
                    <br>

            <?php
                }
            }
            $conn->close();

            ?>
        </div>

    </div>
</main>


<!-- <p style="font-size:large"><Strong>Author:</Strong> Nguyen Pham |
    <strong>Date Posted:</strong> 27 Feb 2021

</p>
<br>
<br>
<img class="vs_project_img" src="/myPortfolio/images/killer13_1.png">


<div>
    <p style="font-style:italic"><span id="bigLetter">T</span>his is a project specifying in Object Oriented Programming Course which I
        participated in my 2-year of college. <br>
        Here is the link for to the project:
        <a style="margin: 0 0;" href="https://github.com/Xpinpin/OOPKiller13Project">
            https://github.com/Xpinpin/OOPKiller13Project
        </a>
    </p>
</div>

<div style="margin-top: 10%;">
    <h3> 1. Introduction</h3>
    <p>
        Killer 13 is the most popular game in Vietnam. It does not require
        luck as many as other card games, it focuses more on cognitive thinking.
    </p>


    <h3> 2. Players and Cards</h3>
    <p>
        <strong>Players:</strong> There will be 4 number of players in total.<br>
        <strong>Card:</strong> Standard 52-card deck.
    </p>
    <img class="vs_project_img" src="/myPortfolio/images/killer13_2.png">


    <h3>Objectives</h3>
    <p>
    <ul>
        <li>The objective of this game is to get rid of all your cards (13 cards/person) by playing various combinations. There are seven types of combinations you can use: a solo card (which is one card not regarding any suits), a double set (which is two cards with same face values not regarding any suits), a triple set (which is three cards with same face values not regarding any suits), a sequence (which is a sequence of at least three cards in numerical order not regarding any suits), a four of a kind (which is four cards of the same value) and a consecutive pair (which is more than 2 double sets).</li>
        <li>The ranking of face value is from the lowest to highest: 3 4 5 6 7 8 9 J Q K A 2. (2 is the strongest face value in this game). Moreover, the suits have rank too (from highest to lowest): Hearts ♥, Diamonds ♦, Clubs ♣, Spades ♠.The card number takes precedence over the suit, so the 10♠ is higher than the 9♥. Therefore, the 2♥ is the highest single card in the game.</li>
    </ul>
    </p>
    <img class="vs_project_img" src="/myPortfolio/images/killer13_3.png">

    <h3>Gameplay</h3>
    <p>
    <ul>
        <li>A person who has a 3♠ can start with any kind of combinations he/she wants.</li>
        <li>After that, the next player has to draw out the same combination as the previous one but with higher value.</li>
        <li>The player can decide to draw or not. If not, then the next player is going to draw. A player who has passed can not play anymore until the new turn starts</li>
        <li>When a player plays a combination and all of the other players have passed, he/she can control the next combination and play.</li>
        <li>The first player to draw out all 13 cards will be the winner and 1st place, after that, the next player can start a new combination to make a new turn; the game still continues to choose the 2nd, 3rd and last place.</li>
    </ul>
    </p>
</div> -->