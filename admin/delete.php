<?php
include("db_con.php");
?>
<?php
    if(isset($_GET['it_id']))
    {
    $it_id = $_GET['it_id'];
}
    $sql="DELETE FROM `items` WHERE it_id='$it_id'";
    $result=mysqli_query($con,$sql);
    header("Location:products.php");
?>

