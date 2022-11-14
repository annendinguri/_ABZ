<?php
$conn =mysqli_connect("localhost","root","","tuktuk");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
if(isset($_POST['log'])){
    $reg_no=strtoupper($_POST['reg_no']);
    $driver=strtoupper($_POST['driver']);
    $pass=strtoupper($_POST['reg_no']);
    $query= "INSERT INTO driver (username, passwod, driver_name) VALUES ('$reg_no', '$pass','$driver')";
    if(mysqli_query($conn, $query)){
        header('Location:' .'manager.php');
    }
}
$date= date('l/m/Y');
$query= "SELECT * FROM receipts WHERE datee= '$date' ";
        $result = mysqli_query($conn, $query);
        $postss = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
       
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
       
        <form action="manager.php" method="POST"> 
            <h2>REGISTER NEW VEHICLE</h2><br><br>
            <h1>Reg Number</h1>
            <input class="form_input" type="text" name="reg_no"  ><br>
            <h1>Driver Name</h1>
            <input class="form_input" type="text" name="driver"  ><br><br>
            <input class="form_input" type="submit" name="log" value="REGISTER" ><br><br>
        </form>
    </div><br>
    

    <table border="1" id="tab">
    <caption id="table">SUBSCRIBED  USERS</caption>
    <tr>
        <th>REGISTRATION NO.</th>
        <th>PAID BY</th>
        <th>DATE</th>
    </tr>
    <?php foreach($postss as $post):?>

        <tr>
            <td><?php echo strtoupper($post["reg_no"]);?></td>
            <td><?php  echo strtoupper($post["paid_by"]);?></td>
            <td><?php  echo strtoupper($post["datee"]);?><br></td>
        </tr>

    <?php endforeach?>
    </table>

</body>
</html>