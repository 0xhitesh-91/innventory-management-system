<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        `
        <div class="reg-form">
            <form method="post" action="register-form.php">
                <h1 style="text-align: center">Sign Up</h1>
                <div class="name-reg-form">
                    <label for="fname">First Name</label>
                    <input class="reg-input-field" type="text" name="fname" placeholder="Enter First Name" required="Please enter your first name">
                    <label for="lname">Laste Name</label>
                    <input class="reg-input-field" type="text" name="lname" placeholder="Enter Last Name" required="Please enter your first name">
                </div>
                
                <div id="" style="margin-top: 30px">
                    <label for="Email">Email</label>
                    <input class="reg-input-field" type="email" name="email" placeholder="Enter Valid Email" required="Please enter a valid e-mail">
                    <label for="mobile">Mobile No</label>
                    <input class="reg-input-field" type="tel" name="mobile" placeholder="Enter Valid Mobile No" required="Please enter a valid mobile no.">
                </div>
                
                <div style="margin-top: 30px">
                    <label for="new-pass">New Password</label>
                    <input class="reg-input-field" type="password" name="new_pass" placeholder="Enter Password" required="" pattern=".{8,}"><a style="font-size: 15px;"> *min 8 character</a>
                </div>
                
                <div style="margin-top: 30px">
                    <label for="dob">Date Of Birth</label>
                    <input class="reg-input-field" type="date" name="dob" placeholder="Select DOB" required="Please select your DOB">    
                </div>
                
                <div style="margin-top: 30px">
                    <label for="gender">Gender</label>
                    <input class="reg-input-field" type="radio" name="gender" value="male" required=""> Male
                    <input class="reg-input-field" type="radio" name="gender" value="female" required=""> Female
                </div>
                
                <div style="margin-top: 50px; resize: horizontal;">
                    <input class="reg-submit-btn" name="submit" type="submit" value="Submit">
                    <button id="reset" type="reset" value="reset">Reset</button>
                </div>
                
                <P><a href="login-form.php">Sing In Instead</a></P>
                
            </form>
            
        </div>
        
  <?php include 'process.php'; ?>
    
    </body>
    
</html>