<?php
require('g.php');
if(isset($_POST['log'])){
    $reg=strtoupper($_POST['reg_no']) ;
    $by= strtoupper($_POST['payee']);
    $date= date('l/m/Y');
    receipt($reg,$by,$date);
}

$conn =mysqli_connect("localhost","root","","tuktuk");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
if(isset($_POST['log'])){
    $reg_no= strtoupper($_POST['reg_no']);
    $paid_by=strtoupper($_POST['payee']);
    $date= date('l/m/Y');
    $query= "INSERT INTO receipts (reg_no, paid_by, datee) VALUES ('$reg_no', '$paid_by','$date')";
    if(mysqli_query($conn, $query)){
        header('Location:' .'account.php');
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="x.css">
</head>
<body>

    <div id="header"></div>
    <div id="form">
       
        <form action="account.php" method="POST"> 
            <h2>ACCOUNTS PAGE</h2><br><br>
            <h1>Reg Number</h1>
            <input class="form_input" type="text" name="reg_no"  ><br><br>
            <h1>Payed By</h1>
            <input  class="form_input" type="text" name="payee" ><br><br>
            <input class="form_input" type="submit" name="log" value="CONFIRM PAYMENT" ><br><br>
        </form>
    </div>

</body>
</html>
