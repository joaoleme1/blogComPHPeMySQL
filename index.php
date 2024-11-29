
<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $blogTitle = trim($_POST['blogtitle']);
    $blogDate = trim($_POST['blogdate']);
    $blogPara = trim($_POST['blogpara']);

    $filename = "NONE";

    if (isset($_FILES['uploadimage']) && $_FILES['uploadimage']['error'] === UPLOAD_ERR_OK) {
        $filename = $_FILES['uploadimage']['name'];
        $tempname = $_FILES['uploadimage']['tmp_name'];
        move_uploaded_file($tempname, "images/" . $filename);
    }

    $sql = "INSERT INTO blog_table (topic_title, topic_date, image_filename, topic_para) VALUES ('$blogTitle', '$blogDate', '$filename', '$blogPara')";

    if ($conn->query($sql) === TRUE) {
        echo "Post salvo";
    } else {
        echo "Erro" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meuBlog</title> 

</head>

<body>

    <div class="top-bar">

        <span id="topBarTitle">Posts</span>

    </div>

    <br>

    <div class="all-posts-container">

        <?php
        include 'conexao.php';

        $sql = "select topic_title, topic_date, image_filename, topic_para from blog_table;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div style='padding: 25px 25px;' class='post-container'>";
                echo "<span id='displayTitle'>" . $row["topic_title"] . "</span><br>";
                echo "<span id='displayDate'>" . $row["topic_date"] . "</span><br><br>";
                echo "<img style='max-width: 100%; height: auto' id='displayImage' src='images/" . $row["image_filename"] . "'><br>"; 
                echo "<p style='overflow: hidden; display: -webkit-box; -webkit-line-clamp: 10; line-clamp: 10; -webkit-box-orient: vertical;' id='displayPara'>" . $row["topic_para"] . "</p><br>";
                echo "</div>";
            }
        } else {
            echo "<center><span>Sem posts</span></center>";

            echo "<center><a style='color: dodgerblue;' href='index.html'>Escrever novo post</a></center>";
        }

        $conn->close();

        ?>

    </div>

    <?php echo "<br><center><a style='color: dodgerblue; text-decoration: none; background: dodgerblue; padding: 5px 25px; color: #fff; border-radius: 50px;' href='login.php'>Escrever um novo post</a></center><br>"; ?>

</body>
<style>

    .top-bar {
        background: #252525;
        color: #f5f5f5;
        margin: 0;
        text-align: center;
        padding: 10px;
    }


    :root {
        --primary-color: #007BFF; 
        --secondary-color: #F0F0F0; 
        --text-color: #333; 
    }


    body {
        font-family: Arial, sans-serif;
        background-color: var(--secondary-color);
        color: var(--text-color);
        margin: 0;
        padding: 0;
    }

    .all-posts-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-width: 800px; 
        margin: 0 auto; 
    }

    .post-container {
        border: 1px solid var(--primary-color);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    #displayTitle {
        font-size: 24px;
        font-weight: bold;
        color: var(--primary-color);
    }

    #displayDate {
        color: #888;
        font-size: 14px;
    }

    #displayPara {
        line-height: 1.6;
    }

    a {
        text-decoration: none;
        color: var(--primary-color);
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</html>