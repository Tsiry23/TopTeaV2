<?php
    include("../inc/fonction.php");
    $defaultUser=getUser(1)[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="base-container sign-in">
            <form action="../controllers/traitLogin.php" method="post">
                <h1>log In</h1>
                    <input class="formInput" type="email" placeholder="Email" name="mail" values="<?php echo $defaultUser["email"] ?>">
                    <input class="formInput" type="password" placeholder="Password" name="pwd" values="<?php echo $defaultUser["pswd"] ?>">
                    <button class="fbtn-orange" type="submit">Sign In</button> 
            </form>
        </div>
        <div class="log-container">
            <div class="log">
                <div class="log-panel log-right">
                    <img src="../assets/logo1.png" alt="miandry" width="80" height="100">
                    <h1>TopTea</h1>
                    <p>Hello, Friend!</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php if (isset($_GET["error"])) { ?>
            alert('<?php echo $_GET["error"];?>');
        <?php } ?>
    </script>
</body>
</html>