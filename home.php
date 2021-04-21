<?php
    include "header.php";
    include "navbar.php";

   
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="customer_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>
                    <section>
                    <div class="flex-item">
                        <button type="submit">Login</button>
                    </div>
                    </section>  
                    <section>
                    <div class="admin">
                        <a href="admin_login_action.php">Enter like admin</a>
                    </div>
                    </section>  
                    <div>
                        <a href="registr.php">registration</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
