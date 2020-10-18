<?php
    $UserID = $_POST ['UserID'];
    $Password = $_POST ['Password'];

    $conn = new mysqli('localhost', 'root','', 'test')
    if ($conn->connect_error){
        die('connection Failed : '-$conn->connect_error);
    
    }else{
        $stmt = $conn->prepare("insert into Login(UserID, Password)
            values(?, ?);
        $stmt->bind_param("sssssi", $UserID, $Password);
        $stmt->execute();
        echo "Login Successful";
        $stmt->close();
        $conn->close();
    }
?>