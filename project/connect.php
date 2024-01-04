<?php
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['regno'];
$name = $_POST['password'];
//database connection
$conn = new mysqli('localhost','root','','test');
die(;connection_aborted :'$conn->connect_error');
}else{
    $stmt = $conn->prepare("insert into registration(name,email,regno,password)values(?,?,?,?)");
    $stmt->bind_param("sssi",$name, $email, $regno, $password);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
    
}
>