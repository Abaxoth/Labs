<?php
require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect('localhost', 'admin', 'admin', 'mySiteDB')
or die("[Error]" . mysqli_error($link));

$query ="SELECT * FROM notes";
$result = mysqli_query($link, $query) or die("[Error]" . mysqli_error($link));
if($result)
{
}

while ($note = mysqli_fetch_array($result)){

    echo "ID:", $note['id'], "<br>";
    ?>
    <a href="comments.php?note=<?php echo $note['id']; ?>">
        <?php echo "Tittle:", $note ['title'], "<br>";?></a>

    <?php          	echo "Creation time:", $note ['created'], "<br>";
    echo $note ['content'], "<br>";
}

echo "Items ended", "<br>";

mysqli_close($link);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title (echo $ note [ 'title'];)</title>
</head>
<body>
<header>
    <div class="container">
        <!-- Навигационная панель. В expand указывается когда нужно свернуть навигационный бар в кнопку, на каком размере -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav  mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" id="enter-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="newgame-tab" data-toggle="tab" href="http://localhost/denwer/newnote.php" role="tab" aria-controls="gallery" aria-selected="false">New note</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="sendmess-tab" data-toggle="tab" href="#testing" role="tab" aria-controls="testing" aria-selected="false">Send message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="photo-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="datazz-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="foradmin-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">For admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="information-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="outofhere-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Exit</a>
                    </li>
                </ul>


            </div>
        </nav>
    </div>

    <a href="http://localhost/denwer/email.php">Write about your impression</a>
</header>

