<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="I2.css">
</head>
<body>
    <form id="form1" action="I2.PHP" method="post">
        <table>
            <tr>
        <td>
        <label for="name"><b>Name:</b></label>
        </td>
        <td>
        <input type="text" name="name" value="">
        </td></tr>
        <tr><td>
        <label for="Roll_NO"><b>ROLL_NO:</b></label></td>
       <td> <input type="text" name="ROLL_NO" value=""></td>
        <tr> <td><label for="email"><b>Email:</label></td>
        <td><input type="email"  name="email" value=""> </td>
        <tr> <td colspan="2" ><input type="submit" value="submit"></td></tr>
        </table>
    </form>
<?php
$name=$_POST["name"];
$ROLL_NO=$_POST["ROLL_NO"];
$email=$_POST["email"];

$servername="localhost";
$dbusername="root";
$dbpassword="password";
$dbname="php";
$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);

$sql="INSERT INTO USERS(name,ROLL_NO,email) VALUES ('$name','$ROLL_NO','$email')";
$conn->query($sql);
$conn->close();



?>


    </form>
    
</body>
</html>