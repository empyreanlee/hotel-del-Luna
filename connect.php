
<?php

$conn = "";


	$host = "localhost: 3306";
	$username = "root";
	$password = "";

		$db_name = "hotel";

    $con = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) { 
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
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
        do {
            $confirmation = rand(100000, 999999);
            $sql = "SELECT * FROM reservation WHERE confirmation = $confirmation";
            $result = mysqli_query($con, $sql);
        } while (mysqli_num_rows($result) > 0);
            $sql=("INSERT INTO reservation (roomtype, meal,arrival, departure, adult, child ,name, phoneno,email, request,confirmation)/* confirmation, room_no, status,*/  VALUES ('$roomtype','$meal','$arrival','$departure','$adult','$child','$name','$phoneno','$email','$request','$confirmation')");
    if (mysqli_query($con,$sql))
    {
            echo '<script> alert("Success ");</script>';
            include("book.php");
            
           } 
                      else{
                       echo '<script> alert ("error"); </script>';
                    }
                 /*   $sql="SELECT *FROM reservation";
                    $result= mysqli_query($con,$sql);

                 
                        echo"<table><tr><th>Name</th><th><th>Phone No</th><th>Email</th><th>Arrival</th><th>Departure</th><th>Room Type</th></tr>";
                        while($row=$result->mysqli_fetch_assoc()){
                            echo" <tr><td>"  .$row["name"]. "</td><td" .$row["phoneno"]."</td><td>"  .$row["email"]. "</td><td>".$row["arrival"]. <"</td><td>" .$row["departure"]."</td><td>".$row["roomtype"]."</td></tr>";
                        }
                        echo "</table";
                    } else{
                        echo"0 results";
                    }

                   */ 
                
mysqli_close($con);
            ?>
        


                                                            