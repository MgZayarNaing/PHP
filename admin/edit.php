<?php
include('db_con.php');
?>
<?php
if (isset($_GET['it_id'])) {
    $it_id = $_GET['it_id'];
    $sql = "SELECT it.*,ct.c_name FROM items AS it LEFT JOIN category AS ct ON it.cat_id=ct.c_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}
if (isset($_POST['add'])) {
    $it_name = $_POST['it_name'];
    $c_name = $_POST['c_name'];
    $it_price = $_POST['it_price'];
    $it_img = $_POST['it_img'];
    $sql = "UPDATE items SET it_name='$it_name',cat_id='$c_name',it_price='$it_price',it_img='$it_img' WHERE it_id='$it_id'";
    mysqli_query($con, $sql);
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg02">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <h1 class="tm-site-title mb-0">Restaurant</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="home.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="products.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="view_booking.php">Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.php">category</a>
                                </li>



                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="index.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-mt-big">
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                    <div class="bg-white tm-block">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="tm-block-title d-inline-block">Add Product</h2>
                            </div>
                        </div>
                        <div class="row mt-4 tm-edit-product-row">
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <form action="" class="tm-edit-product-form" method="post">
                                    <div class="input-group mb-3">
                                        <label for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                            Name
                                        </label>
                                        <input id="name" name="it_name" type="text"
                                            value="<?php echo $row['it_name']; ?>"
                                            class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                            Product Price
                                        </label>
                                        <input id="name" name="it_price" type="text"
                                            value="<?php echo $row['it_price']; ?>"
                                            class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input name="it_img" value="<?php echo $row['it_img'];?>" type="file">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="category"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                        <select name="c_name" class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                            id="category">
                                            <option selected><?php echo $row['c_name'];?></option>
                                            <?php
                                            $sql = "SELECT * FROM category";
                                            $res = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($res)):
                                                ?>
                                                <option value="<?php echo $row['c_id']; ?>" <?php
                                                if ($row['c_id'] == $row['c_name']) {
                                                    echo "selected";
                                                }
                                                ?>>
                                                    <?php echo $row['c_name']; ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                            <button type="submit" name="add" class="btn btn-primary">UPDATE
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-big">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- https://jquery.com/download/ -->
        <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
        <!-- https://jqueryui.com/download/ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- https://getbootstrap.com/ -->
        <script>
            $(function () {
                $('#expire_date').datepicker();
            });
        </script>
</body>

</html>