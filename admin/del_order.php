<?php
include("db_con.php");
?>
<?php
    if(isset($_GET['or_id']))
    {
    $or_id = $_GET['or_id'];
}
    $sql="DELETE FROM `ord` WHERE or_id='$or_id'";
    $result=mysqli_query($con,$sql);
    header("Location:view_order.php");
?>

