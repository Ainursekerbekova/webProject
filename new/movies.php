<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="movies.css">
</head>
<body>

<div class = "header">
    <div class = "header_section">
        <div class = "headerlogo"><a href="index.html">Marvel Universe</a></div>
        <div class = "headerButton"><a href = "characters.php">Characters</a></div>
        <div class = "headerButton"><a href = "comics.html">Comics</a></div>
        <div class = "headerButton"><a href = "#">Games</a></div>
        <div class = "headerButton"><a href = "movies.php">Movies</a></div>
        <div class = "headerButton"><a href = "signin.html">Sign in</a></div>
    </div>
</div>
<section>
    <div class="title">
        Первая фаза
    </div>
    <?php
    $host = 'localhost';
    $user='root';
    $password = 'root';
    $db = 'project';
    $conn = mysqli_connect($host,$user,$password,$db);
    $conn_error = mysqli_connect_error();
    if ($conn_error != null){
        echo "There is some connection error:<p>  $conn_error </p>";
    }
    $query="SELECT * FROM `movies` where `faze`=1";
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($results)) {
        echo '<div class="faze">';
        echo '<div class="movie">';
        echo '<img src="'.$row['img'].'" align="top">';
        echo '<div class="eventText">';
        echo "<span>".$row['name']."</span><br><b>";
        echo $row['date']."</b> <br>";
        echo $row['about'];
        echo '</div></div></div>';
    }
    mysqli_close($conn);
    ?>
    <div class="title">
        Вторая фаза
    </div>
    <?php
    $host = 'localhost';
    $user='root';
    $password = 'root';
    $db = 'project';
    $conn = mysqli_connect($host,$user,$password,$db);
    $conn_error = mysqli_connect_error();
    if ($conn_error != null){
        echo "There is some connection error:<p>  $conn_error </p>";
    }
    $query="SELECT * FROM `movies` where `faze`=2";
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($results)) {
        echo '<div class="faze">';
        echo '<div class="movie">';
        echo '<img src="'.$row['img'].'" align="top">';
        echo '<div class="eventText">';
        echo "<span>".$row['name']."</span><br><b>";
        echo $row['date']."</b> <br>";
        echo $row['about'];
        echo '</div></div></div>';
    }
    mysqli_close($conn);

    ?>
    <div class="title">
        Третья фаза
    </div>
    <?php
    $host = 'localhost';
    $user='root';
    $password = 'root';
    $db = 'project';
    $conn = mysqli_connect($host,$user,$password,$db);
    $conn_error = mysqli_connect_error();
    if ($conn_error != null){
        echo "There is some connection error:<p>  $conn_error </p>";
    }
    $query="SELECT * FROM `movies` where `faze`=3";
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($results)) {
        echo '<div class="faze">';
        echo '<div class="movie">';
        echo '<img src="'.$row['img'].'" align="top">';
        echo '<div class="eventText">';
        echo "<span>".$row['name']."</span><br><b>";
        echo $row['date']."</b> <br>";
        echo $row['about'];
        echo '</div></div></div>';
    }
    mysqli_close($conn);
    ?>


</section>
<footer>
    <p>©2018 MARVEL  Zharryssov Galym   Baikadamova Gauhar   Sekerbekova Ainur</p>
</footer>
</body>
</html>