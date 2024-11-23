<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill">

                <div class="top">
                    <div>
                    <img class="icon" src="imgs/logo.png" alt="">
                    </div>
                    <div>
                    <h2>Sign In Now</h2>
                    </div>
                </div>
                <!-- ------------------------- -->

              
                <div class="input-box">
                <i class='bx bxs-envelope'></i>
            <form action="login.php" autocomplete="on" name="Formfill">
                    <input type="email" autocomplete="on"  name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                <i class='bx bx-lock'></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
               
    

                <div class="button">
                    <input type="submit" class="btn" value="Sign In">
                </div>
                <div class="group">
                    <span>Do Not Have an account? <a href="register.php">Register</a></span>
                </div>
            </form>
        </div>
    </div>

</body>