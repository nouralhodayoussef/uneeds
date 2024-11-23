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
                    <h2>Register Now</h2>
                    </div>
                </div>
                <!-- ------------------------- -->

                <p id="result"></p>

                <div class="firstinput">
                    <div>
                        <input type="text" class="name-box" name="fname" placeholder="First Name" required>
                    </div>
                    <div>
                        <input type="text" class="name-box" name="lname" placeholder="Last Name" required>
                    </div>
                </div



                <!-- ----------------------------------------------------------------------- -->
                <div class="input-box">
                <i class='bx bxs-envelope'></i>
            <form action="login.php" autocomplete="on" name="Formfill">
                    <input type="email" autocomplete="on"  name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                <i class='bx bx-lock'></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                <i class='bx bx-lock'></i>
                    <input type="password" name="cPassword" placeholder="Confirm Your password" required>
                </div>
                <div class="input-box">
                <i class='bx bx-phone'></i>
                    <input type="text" name="phonenumber" placeholder="Enter your number" required>
                    
                </div>
                <div class="input-box">
                <i class='bx bxs-location-plus'></i>
                    <input type="text" autocomplete="off" name="address" placeholder="Enter your address" required>
                </div>

                <div class="button">
                    <input type="submit" class="btn" value="Register">
                </div>
                <div class="group">
                    <span>Have an account? <a href="login.php">login</a></span>
                </div>
            </form>
        </div>
    </div>

</body>

</html>