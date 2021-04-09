<?php
$pageTitle = "Blog Page";
include 'includes/subHeader.php';
include 'includes/db/dbConnection.php'
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <h1>Nguyen Pham's Blogs</h1>
            <br>
            <div class="form-wrapper">
                <div class="heading text-center">
                    <div class="mt-5"></div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="widget-sidebar sidebar-search">

                                <div class="mt-2"></div>
                                <div>
                                    <form action="blog.php" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="searchText" placeholder="Search by blog title or category" aria-label="Search for...">
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
                    <li> <a href="insertBlog.php">INSERT NEW BLOG</a></li>

                </ul>

            <?php
            }
            ?>

            <br>

            <?php
            $conn = connect('nguyen_portfolio');

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $results = getBlogBySearch($conn, $_POST['searchText']);
            } else {
                $results = getAllPosts($conn);
            }

            if ($results == null) {
                echo '<h3>There are no blogs match the search result.</h3>';
                echo '<h3 style="text-decoration: underline;"><a href="blog.php">All Blogs</a></h3>';
            } else {


                foreach ($results as $row) {




            ?>
                    <?php
                    if (isset($_SESSION['userId'])) { ?>
                        <div class="card">
                            <ul>

                                <li> <a href="updateBlog.php?blogid=<?php echo $row["blogId"] ?>">Update Blog <?php echo $row["blogId"];  ?></a></li>
                                <li> <a href="deleteBlog.php?blogid=<?php echo $row["blogId"] ?>">Delete Blog <?php echo $row["blogId"] ?></a></li>
                            </ul>




                        </div>
                        <br>
                    <?php
                    }
                    ?>
                    <div class="card">


                        <h2><?php echo $row["title"] ?></h2>


                        <div><?php echo $row["teaser"]; ?></div>

                        <a href="./blogDetails.php?id=<?php echo $row['blogId'] ?>" style="text-align:left; font-size:large; font-weight:bolder">SEE DETAILS <i class="fas fa-sign-in-alt"></i>

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