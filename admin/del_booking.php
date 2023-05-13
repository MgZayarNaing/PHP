<?php
include("db_con.php");
?>
<?php
    if(isset($_GET['b_id']))
    {
    $b_id = $_GET['b_id'];
}
    $sql="DELETE FROM `booking` WHERE b_id='$b_id'";
    $result=mysqli_query($con,$sql);
    header("Location:view_booking.php");
?>

