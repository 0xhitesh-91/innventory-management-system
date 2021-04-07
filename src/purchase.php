<!doctype html>
<html>
    <head>
        <title>BHATI ENTERPRISES</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
         <form action="process.php" method="post">
        <div id="purchase-party-detail">
            <label>Date - </label>
            <input class="pur-party-input" type="date" name="date" required="">
            <label class="pur-party-label">Party No - </label>
            <input class="pur-party-input" type="text" name="partyno" placeholder="Enter Party No." required="" >
            <label class="pur-party-label">Party Name - </label>
            <input class="pur-party-input" type="text" name="partyname" placeholder="Enter Party Name" required="" >
            <label class="pur-party-label">Invoice No - </label>
            <input class="pur-party-input" type="text" name="invoiceno" placeholder="Enter Invoice No" required="" >
            <label class="pur-party-label">GST No - </label>
            <input class="pur-party-input" type="text" name="gstno" placeholder="Enter GST No" required="">
        </div>
        
        <table id="pur-table-header">
              <tr>
                <th>ITEM</th>
                <th>QTY.</th>
                <th>PRICE</th>
                <th>GST</th>
                <th>DIS.</th>
                <th>AMOUNT</th>
              </tr>
        </table>
       
            <table id="pur-item-detail">
                    <tr>
                        <td ><input type="text" name="item-name" placeholder="Enter item name" style="width: 200px; margin-left: 10px;" class="item-detail" required="" > </td>
                        <td><input type="text" name="quantity" placeholder="Quantity" class="item-detail" style="margin-left: 40px; width: 80px;" onchange="getdata()" required=""> </td>
                        <td><input type="text" name="price" placeholder="Price" class="item-detail" style="margin-left: 130px; width: 80px;"  onchange="getdata()" required=""> </td>
                        <td><input type="text" name="gstrate" placeholder="GST%" class="item-detail" style="margin-left: 130px; width: 80px;"  onchange="getdata()" required=""> </td>
                        <td><input type="text" name="discountrate" placeholder="Dis." class="item-detail" style="margin-left: 80px; width: 80px;"  onchange="getdata()" > </td>
                        <td><p id="amount"></p></td>
                    </tr>
            </table>
            <input type="submit" name="add-new-item" value="Submit" class="submitbtn" style="width: 20%; margine-left: 200px;"/>
        </form>
        
        <div class="footer">
            <p>Products are offered through BHATI ENTERPRISES. Member FINRA, SIPC, 121 Lincoln Ave, Suite 100, Oakmont, CA 92101.
            </p>
        </div>
        
        <script type="text/javascript">
            
            var item_name, quantity, price, gstRate, discountRate, amountWithGst, amountWithoutGst, discountPrice;
            
            function getdata(){ 
                quantity = document.getElementById("quantity").value;
                price = document.getElementById("price").value;
                gstRate = document.getElementById("gstrate").value;
                discountRate = document.getElementById("discountrate").value;
                discountPrice = price*(discountRate/100);
                price = price-discountPrice;
                amountWithoutGst = (price*gstRate)/100;
                amountWithGst= quantity*(price+amountWithoutGst);
                document.getElementById("amount").innerHTML=amountWithGst;
            }
      
        </script>
            <?php include 'process.php'; ?>
    </body>

</html>