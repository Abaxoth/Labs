<html>
<head>
    <title>Note details</title>
</head>

<body>
<form id="deleteNote" name="deleteNote" method="post" action="">
    <input type="submit" name="deleteNote" id="deleteNote" value="Delete note" />
</form>

<a href="blog.php">Back to main page</a>
<div></div>
<div>
</body>
</html>

<?php
require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect('localhost', 'admin', 'admin', 'mySiteDB')
or die("[Error]" . mysqli_error($link));

$note_id = $_GET['note'];

$query ="SELECT * FROM notes where id = $note_id";
$query_comments = "SELECT * FROM comments WHERE art_id = $note_id";


$result = mysqli_query($link, $query_comments) or die("[Error]" . mysqli_error($link));

$commentsExists = false;

?>
<div><div>
<a href="http://localhost/denwer/editnote.php?note=<?php echo $note_id; ?>">Edit note</a>
<div><div>
<?php

echo "Comments:", "<br>";

while ($note = mysqli_fetch_array($result)){
    $commentsExists = true;
    echo $note ['comment'], "<br>";
}

if($commentsExists == false){
    echo "Have no comments", "<br>";
}

if(isset( $_POST['deleteNote'] )){

    echo "Deleting...", "<br>";

    require_once 'connection.php'; // подключаем скрипт
    $link = mysqli_connect('localhost', 'admin', 'admin', 'mySiteDB');

    $id = $_GET['note'];

    //Формування запиту
    $query = "DELETE FROM notes WHERE id = $id";
    //Реализація запиту
    $result = mysqli_query ($link, $query);
    echo "Note removed", "<br>";

}


?>




