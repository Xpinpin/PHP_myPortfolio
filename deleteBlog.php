<?php
$pageTitle = 'Delete Blog';
include 'includes/subHeader.php';
$blogId = $_GET['blogid'];
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <div class="mt-5"></div>
            <h2>Delete Blog ID: <?php echo $blogId ?></h2>
            <?php
            if (!isset($_SESSION['username'])) {
                redirect_to('login.php');
            } else {
            ?>
                <?php
                //check if form was posted
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    $blogId = $_POST['blogId'];

                    $dbLink = connect('nguyen_portfolio');
                    $msg = deletePost($dbLink, $blogId);
                    echo "<p class='alert alert-success' style='text-align:center; background-color: #61fac5'>$msg</p>";
                    $dbLink->close();
                    echo "<p style='text-align:center;'><a href='blog.php' style='margin-left: 0; color: #8f00ff;'>Back to Blog Page</a></p>";
                } else {

                ?>

                    <form action="deleteBlog.php" method="POST">
                        <?php

                        $conn = connect('nguyen_portfolio');
                        if (isset($_GET['blogid'])) {
                            $results = getBlogByBlogId($conn, $blogId);
                            foreach ($results as $row) {


                        ?>
                                <div class="form-group ">

                                    <label for="title" class="font-weight-bold">Title</label>
                                    <input type="text" id="title" name="title" value="<?php echo $row['title'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="teaser" class="font-weight-bold">Teaser</label>
                                    <input type="text" id="teaser" name="teaser" value="<?php echo $row['teaser'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="font-weight-bold">Blog</label>
                                    <textarea id="content" name="content" rows="3" disabled><?php echo $row['content'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="font-weight-bold">Category</label><br>
                                    <select name="category" id="category" value="<?php echo $row['categoryId'] ?>" disabled>
                                        <option value="">----Select A Category----</option>
                                        <option value="3" <?php if ($row['categoryId'] === 3) {
                                                                echo "selected='selected'";
                                                            } ?>>Daily Life</option>
                                        <option value="4" <?php if ($row['categoryId'] === 4) {
                                                                echo "selected='selected'";
                                                            } ?>>Programming Languages</option>
                                        <option value="5" <?php if ($row['categoryId'] === 5) {
                                                                echo "selected='selected'";
                                                            } ?>>Miscellaneous</option>

                                    </select>
                                </div>
                                <input type="hidden" name="blogId" value=<?php echo $blogId; ?>>
                                <button type="submit" class="btn btn-primary">Delete</button>
                    </form>






    <?php
                            }
                        }
                    }
                }
    ?>

        </div>

    </div>
</main>