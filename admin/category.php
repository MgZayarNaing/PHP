<?php
include('db_con.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <!-- <link rel="stylesheet" href="css/tooplate.css"> -->
</head>

<body id="reportsPage" class="bg02">
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
            <br><br>
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                            </div>
                            <div style=" align :center;">
                                <a href="add_category.php" class="btn btn-small btn-primary">Add New Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <section class="intro">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                        <tr class="text-uppercase text-success">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['c_id']; ?>
                                </td>

                                <td>
                                    <?php echo $row['c_name']; ?>
                                </td>
                                <td><a href="edit_category.php?c_id=<?php echo $row['c_id']; ?>"
                                        class="btn btn-outline-danger">EDIT</a></td>
                                <td><a href="del_category.php?c_id=<?php echo $row['c_id']; ?>"
                                        class="btn btn-outline-info">DELETE</a></td>

                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </section>
            <footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
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
    </footer>
        </div>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>