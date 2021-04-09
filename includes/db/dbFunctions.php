<?php

function connect($dbName)
{
    $dbLink = new mysqli('localhost', 'dev', 'Dev1234$', $dbName)
        or die("there is a problem connecting to the database");
    return $dbLink;
}


function getLoggedInId($conn, $uName, $pWord)
{
    $sql = 'SELECT UserId  FROM user WHERE Username = ? and Password = ?';
    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param('ss', $uName, $pWord);
        $stmt->execute();
        $stmt->bind_result($id);
        $userId = 0;
        while ($stmt->fetch()) {
            $userId = $id;
        }
        $stmt->close();
        return $userId;
    }
}

function insertProject($conn, $title, $teaser, $description, $typeId)
{
    $sql = "INSERT INTO project(Title, Teaser,MainDescription, TypeId) VALUES (?,?,?,?)";
    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param('sssi', $title, $teaser, $description, intVal($typeId));
        $stmt->execute();
        $stmt->close();
        $msg = "Successfully inserted '$title'. New record id is " . $conn->insert_id;
    } else {
        $msg = "Error inserting record";
    }
    return $msg;
}


function updateProject($conn, $title, $teaser, $description, $typeId, $projectId)
{
    $sql = "UPDATE project SET Title ='$title', Teaser ='$teaser', MainDescription ='$description', TypeId = $typeId WHERE ProjectId = $projectId";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $msg = "Successfully updated Project $projectId";
    } else {
        $msg = "Error updated record";
    }

    return $msg;
}

function deleteProject($conn, $projectId)
{
    $sql = "DELETE FROM project WHERE ProjectId = $projectId";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $msg = "Successfully deleted Project $projectId";
    } else {
        $msg = "Error deleted record";
    }

    return $msg;
}

function getAllProjects($conn)
{

    $stmt = $conn->prepare("SELECT * FROM project") or die("Problem with query");
    $stmt->execute();
    $stmt->bind_result($projectId, $title, $teaser, $description, $typeId, $imageId, $created_at);

    while ($row = $stmt->fetch()) {
        $item = array(
            'projectId' => $projectId,
            'title' => $title,
            'teaser' => $teaser,
            'description' => $description,
            'created_at' => $created_at,
            'typeId' => $typeId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    return $rows;
}

function getProjectByProjectId($conn, $projectId)
{
    $stmt = $conn->prepare("SELECT * FROM project WHERE ProjectId = ?") or die("Problem with query");
    $stmt->bind_param('i', intval($projectId));
    $stmt->execute();
    $stmt->bind_result($projectId, $title, $teaser, $description, $typeId, $imageId, $created_at);

    while ($row = $stmt->fetch()) {
        $item = array(
            'projectId' => $projectId,
            'title' => $title,
            'teaser' => $teaser,
            'description' => $description,
            'created_at' => $created_at,
            'typeId' => $typeId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    return $rows;
}


function getProjectsBySearch($conn, $searchText)
{
    $stmt = $conn->prepare("CALL GetProjectsBySearch(?)") or die("Problem with query");
    $stmt->bind_param('s', $searchText);
    $stmt->execute();
    $stmt->bind_result($projectId, $title, $teaser, $description, $typeId, $imageId, $created_at);
    $rows = null;

    while ($row = $stmt->fetch()) {
        $item = array(
            'projectId' => $projectId,
            'title' => $title,
            'teaser' => $teaser,
            'description' => $description,
            'created_at' => $created_at,
            'typeId' => $typeId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    if ($rows == null) {
        return null;
    } else {
        return $rows;
    }
}


function insertPost($conn, $title, $teaser, $content, $categoryId)
{
    $sql = "INSERT INTO blog(Title, Teaser, Content, BlogCategoryId) VALUES (?,?,?,?)";
    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param('sssi', $title, $teaser, $content, intVal($categoryId));
        $stmt->execute();
        $stmt->close();
        $msg = "Successfully inserted $title. New record id is " . $conn->insert_id;
    } else {
        $msg = "Error inserting record";
    }
    return $msg;
}


function updatePost($conn, $title, $teaser, $content, $categoryId, $blogId)
{
    $sql = "UPDATE blog SET Title ='$title', Teaser ='$teaser', Content ='$content', BlogCategoryId = $categoryId WHERE BlogId = $blogId";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $msg = "Successfully updated Blog $blogId";
    } else {
        $msg = "Error updated record";
    }

    return $msg;
}

function deletePost($conn, $blogId)
{
    $sql = "DELETE FROM blog WHERE BlogId = $blogId";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $msg = "Successfully deleted Blog $blogId";
    } else {
        $msg = "Error deleted record";
    }

    return $msg;
}



function getAllPosts($conn)
{

    $stmt = $conn->prepare("SELECT * FROM blog") or die("Problem with query");
    $stmt->execute();
    $stmt->bind_result($blogId, $title, $teaser, $content, $created_at, $categoryId, $imageId);

    while ($row = $stmt->fetch()) {
        $item = array(
            'blogId' => $blogId,
            'title' => $title,
            'teaser' => $teaser,
            'content' => $content,
            'created_at' => $created_at,
            'categoryId' => $categoryId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    return $rows;
}

function getBlogByBlogId($conn, $blogId)
{
    $stmt = $conn->prepare("SELECT * FROM blog WHERE BlogId = ?") or die("Problem with query");
    $stmt->bind_param('i', intval($blogId));
    $stmt->execute();
    $stmt->bind_result($blogId, $title, $teaser, $content, $created_at, $categoryId, $imageId);

    while ($row = $stmt->fetch()) {
        $item = array(
            'blogId' => $blogId,
            'title' => $title,
            'teaser' => $teaser,
            'content' => $content,
            'created_at' => $created_at,
            'categoryId' => $categoryId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    return $rows;
}

function getBlogBySearch($conn, $searchText)
{
    $stmt = $conn->prepare("CALL GetBlogsBySearch(?)") or die("Problem with query");
    $stmt->bind_param('s', $searchText);
    $stmt->execute();
    $stmt->bind_result($blogId, $title, $teaser, $content, $created_at, $categoryId, $imageId);
    $rows = null;
    while ($row = $stmt->fetch()) {
        $item = array(
            'blogId' => $blogId,
            'title' => $title,
            'teaser' => $teaser,
            'content' => $content,
            'created_at' => $created_at,
            'categoryId' => $categoryId,
            'imageId' => $imageId

        );

        $rows[] = $item;
    }
    $stmt->close();
    if ($rows == null) {
        return null;
    } else {
        return $rows;
    }
}
