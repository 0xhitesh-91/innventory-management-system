<!doctype html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            
            .contact-form{
                margin-top: 20px;
                margin-left: 20px;
            }
            
            input[type=text], select, textarea {
                width: 30%;
                padding: 12px;
                border: 1px solid ;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 0px;
                margin-bottom: 16px;
                resize: horizontal;
            }

            input[type=submit] {
                width: 30%;
                background-color: white;
                color: red;
                padding: 12px 20px;
                border: solid;
                border-radius: 40px;
                
            }
            
            input[type=submit]:hover{
                background-color: red;
                color: white;
                cursor: pointer;
                border: solid;
                border-radius: 40px;
                padding: 12px 20px;
            }
        </style>
        
    </head>
    <body>
        
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
        
        <img id="about-us-image" src="contact-us.jpg">
        <h1 class="all-h1">Contact Us</h1>
        <hr class="hr">
        
        <div class="contact-form">
            <form action="contact.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Enter first name" required=""><br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Enter last name" required=""><br>
                
                <label for="regarding">Regarding</label>
                <select id="issue" name="issue" required="">
                    <option value="service">Service</option>
                    <option value="quality">Quality</option>
                    <option value="other">Other</option>
                </select><br>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your messahe here.." required="" style="height: 100px"></textarea>
                
                <input type="submit" value="Submit" name="contact_us_btn">

            </form>
        </div>
       
        <div class="footer">
            <p>Products are offered through BHATI ENTERPRISES. Member FINRA, SIPC, 121 Lincoln Ave, Suite 100, Oakmont, CA 92101.
            </p>
        </div>
            <?php include 'process.php'; ?>
    </body>
</html>