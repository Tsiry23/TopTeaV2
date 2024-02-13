<?php
    include("../../inc/fonction.php");
    $defaultUser=getUser(2)[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="base-container log-in">
            <form action="../../controllers/traitLogin.php" method="post">
                <h1>log In User</h1>
                    <input class="formInput" type="email" placeholder="Email" name="mail" value="<?php echo $defaultUser["email"] ?>">
                    <input class="formInput" type="password" placeholder="Password" name="pwd" value="<?php echo "motdepasse123" ?>">
                    <button class="fbtn-orange" type="submit">Sign In</button>
                    <a style="color:grey;" href="../BackOffice/index.php">Passer en Admin</a>
            </form>
        </div>
        <div class="log-container">
            <div class="log">
                <div class="log-panel log-right" style="color: hsl(118, 33%, 43%)">
                    <img src="../../assets/logo2.png" alt="miandry" width="100" height="100">
                    <h1>TopTea</h1>
                    <p>Hello, Friend!</p>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center;bottom: 5px;position: fixed;">
    <p>ETU002719 - ETU002575 - ETU002363</p>
    </div>
    <script>
        <?php if (isset($_GET["error"])) { ?>
            alert('<?php echo $_GET["error"];?>');
        <?php } ?>
    </script>
</body>
</html>