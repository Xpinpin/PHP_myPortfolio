<?php
$pageTitle = "Project Detail";
include 'includes/subHeader.php';
include 'includes/db/dbConnection.php';
$projectId = $_GET['id'];
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <?php
            $conn = connect('nguyen_portfolio');


            $results = getProjectByProjectId($conn, $projectId);

            foreach ($results as $row) {
            ?>



                <h2><?php echo $row["title"] ?></h2>


                <div><?php echo $row["description"]; ?></div>


            <?php
            }

            $conn->close();

            ?>
        </div>
        <a href="projects.php"> <i class="fas fa-arrow-circle-left"></i>



            Back to Project</a>

    </div>
</main>








<!-- <h1>My Top 5 Favourite Visual Studio Code 2019</h1>
    <br>
    <br>
    <p style="font-size:large"><Strong>Author:</Strong> Nguyen Pham |
        <strong>Date Posted:</strong> 24 Jan 2021 |
        5 Min Read

    </p>
    <br>
    <hr>
    <br>
    <div id="introductionVS">
        <p style="font-style:italic"><span id="bigLetter">V</span>isual studio code, is arguably the best code editor to use at the present time.
            Due to its wide range of extensions along with the adaptation to abundance of different programming languages. Therefore, today I want
            to introduce to everyone my top five Visual Studio Code Extensions facilitating the coding proccesses.
        </p>
    </div>

    <div id="prettierExtension" style="margin-top: 10%;">
        <h2>1. Prettier - Code Formatter</h2>
        <img class="vs_blog_img" src="/myPortfolio/images/prettierFormatter.png">
        <p>This is an extremely helpful extension for anyone from Beginner to Advanced Web Developers. It will automatically format your code in almost
            every language (notably HTML, CSS, JavaScript, etc.). The format will be focused on the indentation, opening/closing tag, etc. What I love most
            about this extension is that if your code has errors, the format will not be executed; therefore, you would know that your code is wrong.
        </p>
        <p>You can download it directly from your Visual Studio Code in the Extensions Section.
            <br>Link:<a style="margin: 0 0;" href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode">
                https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode
            </a>
        </p>

    </div>

    <div id="prettierExtension" style="margin-top: 10%;">
        <h2>2. Bracket Pair Colorizerr</h2>
        <img class="vs_blog_img" src="/myPortfolio/images/prettierFormatter.png">
        <p>This is an extremely helpful extension for anyone from Beginner to Advanced Web Developers. It will automatically format your code in almost
            every language (notably HTML, CSS, JavaScript, etc.). The format will be focused on the indentation, opening/closing tag, etc. What I love most
            about this extension is that if your code has errors, the format will not be executed; therefore, you would know that your code is wrong.
        </p>
        <p>You can download it directly from your Visual Studio Code in the Extensions Section.
            <br>Link:<a style="margin: 0 0;" href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode">
                https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode
            </a>
        </p>

    </div>
    -->