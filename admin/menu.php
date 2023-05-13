<?php
include("db_con.php");
$con->set_charset("utf8");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin Template by Tooplate.com</title>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">
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

            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">

                            </div>
                            <div style=" align :center;">
                                <a href="add-product.php" class="btn btn-small btn-primary">Add New Product</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="intro">

                <table class="table table-dark mb-0" style="margin-top: 200px;">
                    <thead style="background-color: #ffffff;">
                        <tr class="text-uppercase text-success">
                            <th scope="col">ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT it.*,ct.c_name FROM `items` AS it LEFT JOIN category AS ct ON it.cat_id=ct.c_id";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['it_id']; ?>
                                </td>

                                <td>
                                    <?php echo $row['c_name']; ?>
                                </td>
                                <td><img src="items_img/<?php echo $row['it_img']; ?>"
                                        style="height:100px;overflow:hidden;"> </td>
                                <td>
                                    <?php echo $row['it_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['it_price']; ?>
                                </td>
                                <td><a href="edit.php?it_id=<?php echo $row['it_id']; ?>"
                                        class="btn btn-outline-danger">EDIT</a></td>
                                <td><a href="delete.php?it_id=<?php echo $row['it_id']; ?>"
                                        class="btn btn-outline-info">DELETE</a></td>

                            </tr>
                        <?php endwhile; ?>


                    </tbody>
                </table>
            </section>

        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
</body>

</html>