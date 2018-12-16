<html>
<head>
    <title> Events</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="items.css">
</head>
<body>
<header>
    <h1>Предстоящие события</h1>
</header>
<nav>
    <div><a href="index.html">Home</a></div>
    <div><a href="items.php">Events</a></div>
    <div><a href="gallery.html">Gallery</a></div>
    <div><a href="#">Contact</a></div>
    <div><a href="#">Sign in/up</a></div>
</nav>
<div id="container">

<?php
$host = 'localhost';
$user='root';
$password = 'root';
$db = 'project';
$conn = mysqli_connect($host,$user,$password,$db);
$conn_error = mysqli_connect_error();
$query="SELECT * FROM `events`";
if ($conn_error != null){
    echo "There is error:<p>  $conn_error </p>";
}
$results = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($results)) {
    echo '<a href="'.$row['details'].'">';
    echo "<div class=\"event\">";
    echo '<img src="'.$row['img'].'" >';
    echo '<div class="eventText"><span >Поездка в '.$row['place'].'</span><br>';
    echo "<b>".$row['date']."</b><br>".$row['about'];
    echo "</div></div></a>";
}
mysqli_close($conn);
?>


</div>
</body>
</html>
