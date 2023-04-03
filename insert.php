<?php
include('connect.php'); 

if(isset($_POST['submit']))
{

    $roomtype=$_POST['roomtype'];
        $meal =$_POST['meal'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];
        $adult = $_POST['adult'];        
        $child = $_POST['child'];
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $request = $_POST['request'];
    /*    $confirmation = $_POST['confirmation'];
        $room_no = $_POST['room_no'];
        $stat = 'active';*/
            $sql=("INSERT INTO reservation (roomtype, meal,arrival, departure, adult, child ,name, phoneno,email, request)/* confirmation, room_no, status,*/  VALUES ('$roomtype','$meal','$arrival','$departure','$adult','$child','$name','$phoneno','$email','$request')");
    if (mysqli_query($con,$sql))
    {
            echo '<script> alert("Success ");</script>';
            include("adminlogin.php");
            echo "success";
           } 
                      else{
                       echo '<script> alert ("error"); </script>';
                    }
}

            ?>
          