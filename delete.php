<?php
include "db.php";

if(isset($_GET['id'])){
    $Deleteid = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$Deleteid'";

    $res = mysqli_query($con,$sql);
    if($res){
        // echo "Deleted Successfully";
        header("Location: /CRUD/List_Users.php"); /* Redirect browser */
        // exit();
    }else{
        die(mysqli_error($con));
    };
}

?>