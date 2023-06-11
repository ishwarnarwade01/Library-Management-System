<?php
   include "config.php";

   if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id='$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        header("Location: editusers.php");
        echo "Record deleted Successfully";
    }
    else{
        echo "Error:".$sql."<br>" . $conn->error;
    }
$conn->close();
}
?>