<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>HOME</title>
            <link rel="stylesheet" href="style.css">
        </head>
        
        <body>
            <h1>HELLO, <?php echo $_SESSION['username']; ?></h1>
        </body>

    </html>
    <?php
}
else{
    header("Location: index.php");
}