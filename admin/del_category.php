<?php
include("db_con.php");
?>
<?php
    if(isset($_GET['c_id']))
    {
    $c_id = $_GET['c_id'];
}
    $sql="DELETE FROM `category` WHERE c_id='$c_id'";
    $result=mysqli_query($con,$sql);
    header("Location:category.php");
?>

