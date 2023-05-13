<?php
include("db_con.php");
?>
<?php
    if(isset($_GET['cont_id']))
    {
    $cont_id = $_GET['cont_id'];
}
    $sql="DELETE FROM `contact` WHERE cont_id='$cont_id'";
    $result=mysqli_query($con,$sql);
    header("Location:feedback.php");
?>

