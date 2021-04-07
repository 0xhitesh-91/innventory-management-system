 <?php
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "demo";
    
    //create connection
    $con = new mysqli($server, $user, $pass, $db);
    
    //check connection
    if($con->connect_error) {
        die("connection failed :" .$con->connect_error);
    }echo"Connected<br/>";
    
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $new_pass = $_POST['new_pass'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        
       

        $con->close();
    }
    
    if (isset($_POST['login-btn'])) {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        
        $quary = "SELECT * FROM user_detail WHERE email='$username' AND newPassword = '$password'";
        $result = mysqli_query($con,$quary);
        
        if(mysqli_num_rows($result)>0) {
            echo "<script>alert('Login Successfull')</script>";
        }
        else {
            echo "<script>alert('incorrect user name or password')</script>";    
        }
        $con->close();
    }

    if(isset($_POST['add-new-item'])) {
        $invoice_date = $_POST['date'];
        $party_no = $_POST['partyno'];
        $party_name = $_POST['partyname'];
        $invoice_no = $_POST['invoiceno'];
        $gst_no = $_POST['gstno'];
        $item_name = $_POST['item-name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $gstrate = $_POST['gstrate'];
        $discountrate = $_POST['discountrate'];
        
        $quary = "INSERT INTO purchase_detail(invoice_no, invoice_date, party_name, party_gst, item_name, price, quantity, gst_rate) VALUES($invoice_no, '$invoice_date', '$party_name', '$gst_no', '$item_name', $price, $quantity, $gstrate)";
        
        //$result = mysqli_query($con,$quary);
        
        if ($con->query($quary) === TRUE) {
            echo "New record created successfully<br/>";
                    } 
        else {
            echo "Error: " . $quary . "<br>" . $con->error;
            }

        $con->close();
    }

     if(isset($_POST['contact_us_btn'])) {
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $issue = $_POST['issue'];
         $message = $_POST['message'];
         
         $quary = "INSERT INTO feedback(fname, lname, issue, message) VALUES ('$fname', '$lname', '$issue', '$message')"; 
         
         if ($con->query($quary) === TRUE) {
            echo "Thank you for feedback<br/>";
                    } 
        else {
            echo "Error: " . $quary . "<br>" . $con->error;
            }

        $con->close();
     }

    if(isset($_POST['forget-submit-btn'])) {
        $username = $_POST['username'];
        
        $query = "SELECT * FROM user_detail WHERE email = '$username'";
        $result = mysqli_query($con,$query);
        
        while($row = $result->fetch_assoc())
        {
            $email = $row['email'];
            
                if($username==$email)
                {
                    header('location: forget-pass-validation.php');
                    
                  // echo"<script>alert('Enter valid e-mail address')</script>";                   
                    
                }
                else
                {
                    echo"Enter valid e-mail address";
                }
        }
    }

    if(isset($_POST['forget-pass-validation'])) {
        $mobile = $_POST['mobile'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
       
        $quary = "SELECT * FROM user_detail WHERE mobileNo = '$mobile'";
        $result = mysqli_query($con,$quary);
        
        if(mysqli_num_rows($result)>0) {
                if($password1 == $password2)
                {
                    $quary = "UPDATE user_detail SET newPassword='$password1' WHERE mobileNo = '$mobile' ";
                    $result = mysqli_query($con,$quary);
                    header('location: index.php');
                    echo"password has been changed";
                    echo"<script>alert('Password has been changed!')</script>";
                }
                else{
                    echo"password not match";
                }
        $con->close();
    }}

    if(isset($_POST['sale-item-btn'])) {
        $date = $_POST['date'];
        $cus_name = $_POST['cus_name'];
        $cus_mobile = $_POST['cus_mobile'];
        $cus_gstno = $_POST['cus_gstno'];
        $item_name = $_POST['item-name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $gst_rate = $_POST['gstrate'];
        $discountrate = $_POST['discountrate'];
        
        $quary = "INSERT INTO sales_detail(invoice_date, cus_name, cus_mobile, cus_gstno, item_name, price, quantity, gst_rate) VALUES('$date', '$cus_name', '$cus_mobile', '$cus_gstno', '$item_name', $price, $quantity, $gst_rate)";
        
        //$result = mysqli_query($con,$quary);
        
        if ($con->query($quary) === TRUE) {
            echo "New record created successfully<br/>";
                    } 
        else {
            echo "Error: " . $quary . "<br>" . $con->error;
            }

        $con->close();
    }
$output = '';

    if(isset($_POST['item-name'])){
        $itemq = $_POST['item-name'];
        $itemq = preg_replace('#[^0-9a-z]#i','',$itemq);
        
        $query = mysql_query("SELECT * FROM purchase_detail WHERE item_name LIKE '%$itemq%'") or die("could not search!");
        $count = mysql_num_rows($query);
        
            if($count == 0) {
                $output = 'There are no search result!';
            }
            else{
                while($row = mysql_fetch_array($query)) {
                    $item_name = $row['item_name'];
                    
                    $output .= '<div> '.$item_name.' </div>';
                }
            }
    }
?>