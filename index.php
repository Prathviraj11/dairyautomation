<!-- 

<!DOCTYPE html>
<html>

<head>
    <title> Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" a href="style.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>

<body>
    <div class="container">
        <img src="image/login.png" />
        <form action="login.php" method="POST">
      

            <div class="form-input">
                <input type="text" name="text" placeholder="Enter the User Name" />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="password" />
            </div>
            <input type="submit" type="submit" value="LOGIN" class="btn-login" />
        </form>
    </div>
</body>

</html>


 -->


<!DOCTYPE html>
<html>

<head>
    <title> Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" a href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>
            <div class="logo m-3">
                <!-- <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> -->
            </div>
            <div class="text-center mt-4 name">
                Dairy Automation
            </div>
            <form class="p-3 mt-3">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="userName" id="userName" placeholder="Username">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                <button  type="submit" class="btn mt-3">Login</button>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a href="#">Sign up</a>
            </div>
    </div>
    </form>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>