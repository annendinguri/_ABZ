<?php
$id=$_GET['id'];
$name=$_GET['name'];

$conn =mysqli_connect("localhost","root","","tuktuk");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
$date= date('l/m/Y');

$query= "SELECT * FROM receipts WHERE reg_no = '$id' AND datee = '$date'  limit 1";
        $result = mysqli_query($conn, $query);
        $postss = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        if(empty($postss)){
            $err= "yeah";
        }
        else{
            $err1= "yeah";

        }
        foreach($postss as $pos){
            $pas=$pos['paid_by'];
            
        }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="x.css">
</head>
<body>
    <div id="user">
    <h1>WELCOME   <?php echo strtoupper($name) ?></h1><br>
    <h5><?php if(isset($err)){echo "PLEASE PAY YOUR DAILY SUBSCRIPTION";}?></h5>
    <h6><?php if(isset($err1)){echo "SUBCRIPTION ACTIVE";}?></h6>
    </div>
</body>
</html>