<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../requires/database.php";

$projecten = $con->query("SELECT * FROM Projecten ORDER BY id DESC");
$recentproject_array = [];
while ($data = $projecten->fetch_assoc()) {
   $recentproject_array[] = $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amar Baldewsing - Projecten</title>
    <link rel="shortcut icon" href="../media/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/project.css">
</head>
<body>
    <nav>
        <div class="wrapper con-nav">
            <a  href="../index.html" class="logo logo-nav">
                <h1>A</h1>
            </a>
            <ul class="links-nav">
                <li><a href="../index.html">Home</a></li>
                <li><a href="about.html">Over Mij</a></li>
                <li><a class="main" href="projecten.php">Projecten</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="wrapper con-main">
            <?php if(!empty($recentproject_array)) { ?>
                <?php foreach($recentproject_array as $project) {?>
                    <div class="card">
                        <img src="<?php echo $project['image'] ?>">
                        <div class="card-content">
                            <h1 class="title"><?php echo $project['title'] ?></h1>
                            <p class="desc"><?php echo $project['description'] ?></p>
                            <a href="<?php echo $project['link'] ?>" target="blank">Bezoeken</a>
                        </div>
                    </div>
                <?php }?>
            <?php } else { ?>
                <p>Er zijn geen projecten?</p>
            <?php } ?>
        </div>
    </main>
    <footer>
        <div class="wrapper con-footer">
            <ul class="links-footer">
                <li><a href="../index.html">Home</a></li>
                <li><a href="about.html">Over Mij</a></li>
                <li><a href="projecten.php">Projecten</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            <p>Amar Baldewsing ©2023 - All Rights Reserved</p>
        </div>
        </div>
    </footer>
</body>
</html>