<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM goal WHERE id='$id'";
    include('connect.php');
    if (mysqli_query($conn, $query)) { 
        header('Location:../goal.php?msg=successfully deleted');
    }
    else{
        header("Location:../goal.php?errmsg=".mysqli_error($conn));
    }
}
?>