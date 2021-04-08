<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>PHP Practice </title>
</head>
<body>
    <div class = "container">
        <div class = "header"> 
            <?php include "logo.inc.php"?>
            <?php include "menu.inc.php"?>
        </div>

    <div class = "about_me">
        <h1> <?php echo $p ?> </h1>

        <div class = "info">
            <div class = "phpImg">
                <?php 
                echo "<img src = 'img/php.jpg'>";
                ?>
            </div>
            <div class = fullname>
                <p> My name is
                    <?php echo $name, " ", $lastname . '<br>' ;
                    echo "I am from"," ", $city; ?>
                </p>

                <p> I am 
                <?php  echo $age , " year old"?>
                </p>
                <p>
                <?php echo $education," ", $school;?>
                </p>
            </div>
        </div>
    <div class = "knowledge">

        <?php  include "knowledge.inc.php"; ?>
        <?php  echo $a, " ", $b, " ", $c ?> <br>

        <?php 
            $a = 10;
            $b = 20;
            $c = $a + $b ;
            echo $c;
        ?> <br>
        <?php 
            echo $d;
        ?>
    </div>

    <div class = "lastpart">
        <p class = "text">
            Lorem ipsum dolor sit, amet consectetur adipisicing Lorem ipsum dolo
            r sit amet consectetur adipisicing elit. Voluptate, architecto! Lorem ipsum dolor
             sit amet consectetur, adipisicing elit. Repudiandae, impedit?
        </p>
    
    </div>
    </div>    
        <?php include "footer.inc.php"; ?>
    </div>
</body>
</html>