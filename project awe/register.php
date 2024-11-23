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


                <div class="firstinput">
                    <div>
                        <input type="text" class="name-box" placeholder="First Name">
                    </div>
                    <div>
                        <input type="text" class="name-box" placeholder="Last Name">
                    </div>
                </div



                <!-- ----------------------------------------------------------------------- -->
                <div class="input-box">
                <i class='bx bxs-envelope'></i>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="input-box">
                <i class='bx bx-lock'></i>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="input-box">
                <i class='bx bx-lock'></i>
                    <input type="password" name="cPassword" placeholder="Confirm Your password">
                </div>
                <div class="input-box">
                <i class='bx bx-phone'></i>
                    <input type="text" name="phonenumber" placeholder="Enter your number">
                    
                </div>
                <div class="input-box">
                <i class='bx bxs-location-plus'></i>
                    <input type="text" name="address" placeholder="Enter your address">
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

<script src="script.js"></script>
</body>

</html>