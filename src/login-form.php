<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body id="login-body">
        
        <div class="leftnav">
            <a class="active" href="index.php">Home</a>
            <a href="sell.php">Sell</a>
            <a href="purchase.php">Purchase</a>
            <a href="contact.php">Contact</a>
            <a href="about.html">About</a>
            <div class="right-nav">
                <a href="login-form.php" class="active">Sign In</a>
                <a href="register-form.php">Register</a>
            </div>
        </div>
       
        <div class="footer">
            <p>Products are offered through BHATI ENTERPRISES. Member FINRA, SIPC, 121 Lincoln Ave, Suite 100, Oakmont, CA 92101.</p>
        </div>

        
        <div class="login-form">
            <div class="login-img">
                <img src="avatar.png" height="80px" width="80px">
                <h2>Log In </h2>
            </div>
            
            <form action="login-form.php" method="post">
                <div>
                    <i class="fa fa-user icon" style="font-size: 25px"></i>
                    <input type="text" name="uname" placeholder="Enter Username" class="lbox">
                </div>
                <div>
                    <i class="fa fa-lock icon" style="font-size: 25px" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="Enter Password" class="lbox">
                </div>     
                    <input class="submitbtn" value="Submit" type="submit" name="login-btn" placeholder="Sign In">   
                    <p id="forgetpass"><a href="forget-pass.php"> Forget Password</a></p>
            </form>
        </div>
        <?php include 'process.php'; ?>
    </body>
</html>