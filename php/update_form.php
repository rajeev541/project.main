<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/external.css">
</head>
<body>
    
    <div class="container">
      <b><h1>UPDATE</h1></b>
      <h3>Please update your information </h3>
        <form action="registration_form.php" method="POST">
            <label for="firstname"></label>
            <input type="text" id="fname" placeholder="First Name" name="firstname" class="line" value="<?php $firstname;?>"><br><br>
            <label for="email"></label>
            <input type="text" id="E-mail" placeholder="mail@gmail.com" name="email" class="line" value="<?php $email;?>"><br><br>
            <label for="address"></label>
            <input type="text" id="address" placeholder="Address" name="address"class="line" value="<?php $address;?>"><br><br>
            <label for="phoneno"></label>
            <input type="text" id="phone" placeholder="Phone Number" name="phoneno"class="line" value="<?php $"><br><br>
            <label for="pincode"></label>
            <input type="text" id="pin" placeholder="Pin-Code" name="pincode" class="line"><br><br>
            <button class="btn" name="update" value="update" >update</button>
            
        </form>
</div>
</body>
</html>