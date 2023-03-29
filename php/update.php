<?php
  if(isset($_POST['update'])){
    $id = $_POST['update_id'];
  
  }
if(isset($_POST['update_data']))
  { 
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $pincode=$_POST['pincode'];

    $query = mysqli_query($conn,"UPDATE'userdata' SET `firstname`='$firstname',
  `email`='$email',`address`='$address',`phoneno`='$phoneno',`pincode`='$pincode' WHERE id='$id'");

  if($query)
  {
    echo "updated";
  }

  }

    ?>