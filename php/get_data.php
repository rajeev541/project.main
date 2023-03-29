<?php
// require_once('connect.php');
require_once('delete.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:100%;
            text-align:center;
        }
        table,tr,td{
         border: 2px solid black;
         border-collapse: collapse;
         height:30px;
        }
        table td{
            width:10%;
            text-align:center;
        }
        </style>
</head>
<body>
    
<?php

$show_data="SELECT * FROM `userdata`";

if($result=mysqli_query($conn,$show_data))
{
while($row=$result->fetch_assoc()){
$id=$row['id']; 
$firstname=$row['firstname'];
$email=$row['email'];
$address=$row['address'];
$phoneno=$row['phoneno'];
$pincode=$row['pincode'];

echo '
<table>
<tr>
<td>'.$id.'</td>
<td>'.$firstname.'</td>
<td style=width:20%;>'.$email.'</td>
<td>'.$address.'</td>
<td>'.$phoneno.'</td>
<td>'.$pincode.'</td>
<form method="post">
<input type="hidden" name="id" value="'.$id.'">
<td><input type="submit" name="delete" value="delete"></td>
</form>
<form action="update_form.php" method="post">
<input type="hidden" name="update_id" value="'.$id.'">
<td><input type="submit" name="update" value="update"></td>
</form>
</tr>
</table>

';
}}

?>
</body>
</html>
