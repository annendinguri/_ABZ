<?php
$conn =mysqli_connect("localhost","root","","tuktuk");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
if(isset($_POST['log'])){
    if($_POST['user']=='account'){
        $username=$_POST['id']; 
        $query= "SELECT * FROM account WHERE username = '$username' limit 1";
        $result = mysqli_query($conn, $query);
        $postss = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        if(empty($postss)){
            $err= "yeah";
        }
        else{
            foreach($postss as $pos){
                $pas=$pos['password'];
                
                
            }
            if($pas==$_POST['password']){
                header('Location:' .'account.php');
            }
            else{
                $err1="yeah";
            }

        }
    }
    if($_POST['user']=='manager'){
        $username=$_POST['id']; 
        $query= "SELECT * FROM manager WHERE username = '$username' limit 1";
        $result = mysqli_query($conn, $query);
        $postss = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        if(empty($postss)){
            $err= "yeah";
        }
        else{
            foreach($postss as $pos){
                $pas=$pos['password'];
                
                
            }
            if($pas==$_POST['password']){
                header('Location:' .'manager.php');
            }
            else{
                $err1="yeah";
            }

        }
    }
    if($_POST['user']=='driver'){
        $username=$_POST['id']; 
        $query= "SELECT * FROM driver WHERE username = '$username' limit 1";
        $result = mysqli_query($conn, $query);
        $postss = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        if(empty($postss)){
            $err= "yeah";
        }
        else{
            foreach($postss as $pos){
                $pas=$pos['passwod'];
                
                
                
            }
            
            if($pas==$_POST['password']){
                $id=$pos['username'];
                $name=$pos['driver_name'];
                header('Location:' .'user.php?id='.$id .'&name='.$name);
            }
            else{
                $err1="yeah";
            }

        }
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
        <img src="images (1).png" alt="">
        <form action="login.php" method="POST"> 
            <h1>User Type</h1>
            <select class="form_input"  name="user" >
                <option value="account">ACCOUNTS</option>
                <option value="manager">MANAGER</option>
                <option value="driver">DRIVER</option>
            </select><br><br>
            <h3><?php if(isset($err)){echo "INVALID USER ID";}?></h3>
            <h3><?php if(isset($err1)){echo "INCORRECT PASSWORD";}?></h3>
            <h1>UserName</h1>
            <input class="form_input" type="text" name="id"  ><br><br>
            <h1>Password</h1>
            <input  class="form_input" type="password" name="password" ><br><br>
            <input class="form_input" type="submit" name="log" value="LOGIN" ><br><br>
        </form>
    </div>

</body>
</html>