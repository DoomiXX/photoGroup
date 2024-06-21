<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php include_once 'includes/navbar.php'; ?>
    <main class="main-log-in">
        <div class="primary-bg">
            </div>
            <p class="action">Account aanmaken</p>
            <p class="what-you-have-to-do">maak je account aan</p>
            <form method="post" class="input-fields">

                <input type="text" name="username" placeholder="username"><br>

                <input type="password" name="password" placeholder="password"><br>
                
                <button type="submit" name= "submit" >account creëren</button>
                
            </form>
            <a href="login.php">log in</a>
        </div>
    </main>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>
