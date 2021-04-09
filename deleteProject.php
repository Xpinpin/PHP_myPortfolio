<?php
$pageTitle = 'Delete Project';
include 'includes/subHeader.php';
$projectId = $_GET['projectId'];
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <div class="mt-5"></div>
            <h2>Delete Project ID: <?php echo $projectId ?></h2>
            <?php
            if (!isset($_SESSION['username'])) {
                redirect_to('login.php');
            } else {
            ?>
                <?php
                //check if form was posted
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    $projectId = $_POST['projectId'];

                    $dbLink = connect('nguyen_portfolio');
                    $msg = deleteProject($dbLink, $projectId);
                    echo "<p class='alert alert-success' style='text-align:center; background-color: #61fac5'>$msg</p>";
                    $dbLink->close();
                    echo "<p style='text-align:center;'><a href='projects.php' style='margin-left: 0; color: #8f00ff;'>Back to Project Page</a></p>";
                } else {

                ?>

                    <form action="deleteProject.php" method="POST">
                        <?php

                        $conn = connect('nguyen_portfolio');
                        if (isset($_GET['projectId'])) {
                            $results = getProjectByProjectId($conn, $projectId);
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
                                    <label for="description" class="font-weight-bold">Description</label>
                                    <textarea id="description" name="description" rows="5" disabled><?php echo $row['description'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="typeId" class="font-weight-bold">Type</label><br>
                                    <select name="typeId" id="typeId" value="<?php echo $row['typeId'] ?>" disabled>
                                        <option value="">----Select A Category----</option>
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