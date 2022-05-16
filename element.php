<?php
require_once './php/Bdd.php';
$search = $_GET['id']? $_GET['id']:1;
$bdd = new Bdd;
$a = $bdd->Search($search);


foreach($a as $key){

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js" defer></script> 

    <title>Song</title>
</head>
<header>
        <div class="box-content">
    <div class = "infos">

<span class="songName"> Song name : <?= $key['name']?></span>
<br>
<span class="artist"> Artist : <?= $key['artist']?></span>
<br>
<span>Classement: <?= $key['classement']?></span>
</div>
                <div class="box">
                    <h1>Top spotify 2018</h1>
                    <form id="content">

                        <input type="text" name="input" class="input" placehorder="...">
                        <input type="submit" name="btn" class="btn" value="Search">
                    </form>
            
                </div>

                <div class="list">

                    <ul id="liste"></ul>
                </div>
        </div>
</header>
<body>
    

</body>
</html>