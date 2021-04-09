<?php
$pageTitle = 'Update Project';
include 'includes/subHeader.php';
$projectId = $_GET['projectId'];
?>
<main>
    <div class="main-content paddsection">
        <div class="container">
            <div class="mt-5"></div>
            <h2>Update Project ID: <?php echo $projectId ?></h2>
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
                    $projectId = $_POST['projectId'];
                    if (!empty($title) && !empty($teaser) && !empty($description) && !empty($typeId)) {
                        $dbLink = connect('nguyen_portfolio');
                        $msg = updateProject($dbLink, $title, $teaser, $description, $typeId, $projectId);
                        echo "<p class='alert alert-success' style='text-align:center; background-color: #61fac5'>$msg</p>";
                        $dbLink->close();
                        echo "<p style='text-align:center;'><a href='projects.php' style='margin-left: 0; color: #8f00ff;'>Back to Project Page</a></p>";
                    } else {
                        echo "<ul><li class='text-danger font-weight-bold mt-4' style='color: red'>Fields cannot be empty</li></ul>";
                        echo "<p><a href='updateProject.php?projectId=$projectId' style='margin-left: 0; color: #8f00ff;'>Try Again</a></p>";
                    }
                } else {

                ?>

                    <form action="updateProject.php" method="POST">
                        <?php

                        $conn = connect('nguyen_portfolio');
                        if (isset($_GET['projectId'])) {
                            $results = getProjectByProjectId($conn, $projectId);
                            foreach ($results as $row) {


                        ?>
                                <div class="form-group ">

                                    <label for="title" class="font-weight-bold">Title</label>
                                    <input type="text" id="title" name="title" value="<?php echo $row['title'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="teaser" class="font-weight-bold">Teaser</label>
                                    <textarea id="description" name="teaser" rows="5"><?php echo $row['teaser'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="font-weight-bold">Description</label>
                                    <textarea id="description" name="description" rows="5"><?php echo $row['description'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="typeId" class="font-weight-bold">Type</label><br>
                                    <select name="typeId" id="typeId" value="<?php echo $row['typeId'] ?>">
                                        <option value="">----Select A Type----</option>
                                        <option value="1" <?php if ($row['typeId'] === 1) {
                                                                echo "selected='selected'";
                                                            } ?>>Desktop App</option>
                                        <option value="2" <?php if ($row['typeId'] === 2) {
                                                                echo "selected='selected'";
                                                            } ?>>Web App</option>
                                        <option value="3" <?php if ($row['typeId'] === 3) {
                                                                echo "selected='selected'";
                                                            } ?>>Mobile App</option>

                                    </select>
                                </div>
                                <input type="hidden" name="projectId" value=<?php echo $projectId; ?>>
                                <button type="submit" class="btn btn-primary">Update</button>
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