<?php
   include "config.php";

   if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "DELETE FROM library WHERE id='$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        header("Location: editbook.php");
        echo "Record deleted Successfully";
    }
    else{
        echo "Error:".$sql."<br>" . $conn->error;
    }
$conn->close();
}
?>