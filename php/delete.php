<?php
// require_once('connect.php');
// require_once('get_data.php');
if(isset($_POST['delete'])) {
    $a = $_POST['id'];
    $sql = mysqli_query($conn,"DELETE FROM `userdata` WHERE id ='$a'");
    if($sql) {
        echo "deleted";
        header('location:registration_form.php');
        } else {
        echo "fail";
    } 

}

?>