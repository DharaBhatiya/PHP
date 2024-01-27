<?php
if(isset ($_POST['name'])){

   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

//    if($con){
//     die("connection to this database failed due to".mysqli_connect_error());
//    }
//    echo "Success connecting to the db...!";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql ="INSERT INTO `us_trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone No.`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc',current_timestamp());"
    // echo $sql;

    // if($con->query($sql) == TRUE){
    //     echo "Successfully inserted";}
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form....!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg1.jpg" alt="Travel Form">
    <div class="container">
        <h1>
            Welcome to Travel Form...!
        </h1>
        <p>
            Enter your details and submit this form to confirm your participation in the trip.
        </p>
        <p class="submitMsg">
            Thanks for submitting your form.We are happy to see you joining us for the US Trip.
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name:">
            <input type="age" name="age" id="age" placeholder="Enter Your Age:">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender:">
            <input type="email" name="email" id="email" placeholder="Enter Your Email:">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone No.:">
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Enter any other information here:"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>