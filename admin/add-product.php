<?php
include('db_con.php');
?>
<?php
if (isset($_POST['add'])) {
    $it_id=$_POST['it_id'];
    $c_name=$_POST['c_name'];
    $it_name = $_POST['it_name'];
    $it_price = $_POST['it_price'];
    $it_img = $_POST['it_img'];
    if ($con) {
        $sql = "INSERT INTO items(it_id,cat_id,it_name, it_price, it_img) VALUES ('$it_id','$c_name','$it_name','$it_price', '$it_img')";
        mysqli_query($con, $sql);
        header("Location:products.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
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
    <!-- <link rel="stylesheet" href="css/tooplate.css"> -->
</head>

<body class="bg02">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
                                    <a class="nav-link active" href="products.php">Products <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="view_order.php">Order <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="view_booking.php">Booking <span class="sr-only">(current)</span></a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="feedback.php">Contact <span class="sr-only">(current)</span></a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="category.php">category <span class="sr-only">(current)</span></a></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
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
        <!-- row -->
            <div  class="container">
                <br>
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
                <br>
            </div>
                    <div>
                            <form action=""  method="post">
                            <div class="form-group">
                                    <label class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label""
                                        >Category</label>
                                        <select name="c_name" class="form-control"
                                            id="category">
                                            <option>--Category--</option>
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
                            <div class="form-group">
                                    <label class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                        Name
                                    </label>
                                    <input id="name" name="it_name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        Product Price
                                    </label>
                                    <input id="name" name="it_price" type="text"
                                        class="form-control">
                            </div>
                                    <br><br>
                                    <input  name="it_img" type="file"  >

                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" name="add" class="btn btn-primary">Add
                                        </button>
                                        <a href="javascript:history.back()" class="btn btn-dark"> Back </a>
                                    </div>
                                </div>
                            </form>
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
            $('.tm-product-name').on('click', function () {
                window.location.href = "products.php";
            });
        })
    </script>
</body>

</html>