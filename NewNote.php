<html>
<head>
    <title>Page for add note</title>
</head>

<body>
<p>Add new note: </p>
<form id="newnote" name="newnote" method="post" action="">
    <div>Tittle</div>
    <input type="text" name="title" id="title" size="20" maxlength="20"/>
    <div>Content</div>
    <textarea name=" article" cols="55" rows="10" id=" article"> </textarea>
    <div></div>
    <input type="hidden" name = "created" id = "created"   	 	value ="<?php echo date("Y-m-d");?>"/>
    <input type="submit" name="send" id="send" value="Send" />
</form>

<a href="blog.php">Back to main page</a>
<div>
</body>
</html>

<?php

require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect('localhost', 'admin', 'admin', 'mySiteDB')
or die("[Error]" . mysqli_error($link));

if(isset( $_POST['send'] )){

    //Отримання даних з форми
    $title = $_POST['title'];
    $created = $_POST['created'];
    $article = $_POST['article'];

    if (($title)&&($created)&&($article))
    {
        //Формування запиту
        $query = "INSERT INTO notes (title, created, article) VALUES ('$title', '$created', '$article')";
        //Реализація запиту
        $result = mysqli_query ($link, $query);
        echo "Note sent", "<br>";
    }

}

?>
