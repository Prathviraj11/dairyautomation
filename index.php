<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

    <form action="login.php" method="POST">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label for="">User name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label for="pwd">Password</label>
        <input type="password" name="password" placeholder="Password" id=""><br>
        <button type="submit" name="" id="">LOGIN</button>
    </form>
 
</body>
</html>