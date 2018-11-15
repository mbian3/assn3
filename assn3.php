<!-- Skeleton code from workshop -->
<!DOCTYPE html>
<html>
<head>
<title>Michael Bian assn3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Michael Bian Assn3</h1>


<p>
<hr>
<p>
<h2>Purchase History</h2>
<form action="gethistory.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Purchase History">
</form>


<p>
<hr>
<p>
<h2>Product Price</h2>
<form action="getprice.php" method="post">
<?php
   include 'getpricedata.php';
?>
<input type="submit" value="Get Prices">
</form>



<p>
<hr>
<p>
<h2> Add a New Purchase</h2>
<p>NOTE: if the a purchase already exists the purchase quantity will be updated only if the new quantity is greater than the previous one. <p>
<form action="addnewpurchase.php" method="post">
Customer's ID (2 char integer): <input type="text" name="ID"><br>
Product's ID (2 char integer): <input type="text" name="prodID"><br>
Quantity Purchased (integer): <input type="text" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>





<p>
<hr>
<p>
<h2> Add a New Customer</h2>
<form action="addnewcustomer.php" method="post">
New Customer's ID (2 char integer): <input type="text" name="ID"><br>
New Customer's First Name(max 30 char string): <input type="text" name="fname"><br>
New Customer's Last Name(max 30 char string): <input type="text" name="lname"><br>
New Customer's Last City(max 15 char string): <input type="text" name="city"><br>
New Customer's Last Phone Number(max 15 char string): <input type="text" name="phone"><br>
New Customer's Agent ID(2 char integer): <input type="text" name="aID"><br>
<input type="submit" value="Add New Customer">
</form>


<p>
<hr>
<p>
<h2> Update a Customer's Phone Number</h2>
<form action="changenumber.php" method="post">
Customer's ID (2 char integer): <input type="text" name="ID"><br>
<input type="submit" value="Go to Customer">
</form>


<p>
<hr>
<p>
<h2> Delete a Customer</h2>
<form action="deletecustomer.php" method="post">
Customer's ID (2 char integer): <input type="text" name="ID"><br>
<input type="submit" value="Delete the Customer">
</form>


<p>
<hr>
<p>
<h2> Show Customers That Bought More Than _____ Products</h2>
<form action="moreproducts.php" method="post">
Number of Products (integer): <input type="text" name="count"><br>
<input type="submit" value="Get The Products">
</form>



<p>
<hr>
<p>
<h2>Unpurchased items</h2>
<?php
   include 'unpurchased.php';
?>

<p>
<hr>
<p>
<h2> Show Total Quantity Purchased of a Product</h2>
<form action="calcproduct.php" method="post">
Select a Product (product ID with 2 char integer): <input type="text" name="product"><br>
<input type="submit" value="Get Total Quantity Purchased">
</form>




<?php
mysqli_close($connection);
?>
</body>
</html>
