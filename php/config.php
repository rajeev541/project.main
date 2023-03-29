<?php
// require_once ('connect.php');
if(isset($_POST['submit'])){
       
$firstname =$_POST['firstname'];
$email =$_POST['email'];
$address =$_POST['address'];
$phoneno =$_POST['phoneno'];
$pincode =$_POST['pincode'];
$result = mysqli_query($conn, "INSERT INTO userdata (`firstname`,`email`,`address`,`phoneno`,`pincode`)
VALUES('$firstname','$email','$address','$phoneno','$pincode')");

if(!$result){
    echo "error";

}
else{
    echo "1 row added";
    header('location:registration_form.php');
} 
}
?>
