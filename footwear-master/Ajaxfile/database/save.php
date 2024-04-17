<?php 

include "./db.php";

if(isset($_POST))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['psw'];
    $city = $_POST['city'];

    $sql = "insert into ajax (name,email,phone,city) values('$name','$email','$phone','$city')";

    $run = $conn->query($sql);

    if($run)
    {
        echo json_encode(array("status"=>200));
    }
}
