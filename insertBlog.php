<?php
$pageTitle = 'Insert Blog';
include 'includes/subHeader.php';
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <div class="mt-5"></div>
            <h2>Insert New Blog</h2>
            <?php
            if (!isset($_SESSION['username'])) {
                redirect_to('login.php');
            } else {
            ?>
                <?php
                //check if form was posted
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $title = $_POST['title'];
                    $teaser = $_POST['teaser'];
                    $content = $_POST['content'];
                    $categoryId = $_POST['category'];

                    if (!empty($title) && !empty($teaser) && !empty($content) && !empty($categoryId)) {
                        $dbLink = connect('nguyen_portfolio');
                        $msg = insertPost($dbLink, $title, $teaser, $content, $categoryId);
                        echo $msg;
                        $dbLink->close();
                    } else {
                        echo "<ul><li class='alert' style='color:#f5706c'>Fields cannot be empty</li></ul>";
                    }
                }

                ?>

                <form action="insertBlog.php" method="POST">

                    <div class="form-group ">
                        <label for="title" class="font-weight-bold">Title</label>
                        <input type="text" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="teaser" class="font-weight-bold">Teaser</label>
                        <input type="text" id="teaser" name="teaser">
                    </div>

                    <div class="form-group">
                        <label for="content" class="font-weight-bold">Blog</label>
                        <textarea id="content" name="content" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category" class="font-weight-bold">Category</label><br>
                        <select name="category" id="category">
                            <option value="">----Select A Category----</option>
                            <option value="3">Daily Life</option>
                            <option value="4">Programming Languages</option>
                            <option value="5">Miscellaneous</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Insert</button>
                </form>






            <?php
            }
            ?>
        </div>

    </div>
</main>