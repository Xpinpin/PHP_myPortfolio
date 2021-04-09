<?php
$pageTitle = 'Insert Project';
include 'includes/subHeader.php';
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <div class="mt-5"></div>
            <h2>Insert New Project</h2>
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
                    $description = $_POST['description'];
                    $typeId = $_POST['typeId'];

                    if (!empty($title) && !empty($teaser) && !empty($description) && !empty($typeId)) {
                        $dbLink = connect('nguyen_portfolio');
                        $msg = insertProject($dbLink, $title, $teaser, $description, $typeId);
                        echo $msg;
                        $dbLink->close();
                    } else {
                        echo "<ul><li class='alert' style='color:#f5706c'>Fields cannot be empty</li></ul>";
                    }
                }

                ?>

                <form action="insertProject.php" method="POST">

                    <div class="form-group ">
                        <label for="title" class="font-weight-bold">Title</label>
                        <input type="text" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="teaser" class="font-weight-bold">Teaser</label>
                        <textarea id="description" name="teaser" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Description</label>
                        <textarea id="description" name="description" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category" class="font-weight-bold">Type</label><br>
                        <select name="typeId" id="category">
                            <option value="">----Select A Type----</option>
                            <option value="1">Desktop App</option>
                            <option value="2">Web App</option>
                            <option value="3">Mobile App</option>

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