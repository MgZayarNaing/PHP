<?php
include('db_con.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
    <!-- <link rel="stylesheet" href="css/tooplate.css"> -->
</head>

<body>
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
    <br><br><br>

    <h1 align="center" style="color:#111057;">
        <b>
            <i>
                Hello Welcome Admin
            </i>
        </b>
    </h1>


    <br><br><br>

    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                    // select book count
                    $sql = "SELECT COUNT(c_id) AS ccount FROM category";
                    $res = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($res);
                    ?>
                    <h3 class="card-title h2">
                        <?php echo $row['ccount']; ?>
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i> Total Category</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                    // select book count
                    $sql = "SELECT COUNT(it_id) AS ccount FROM items";
                    $res = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($res);
                    ?>
                    <h3 class="card-title h2">
                        <?php echo $row['ccount']; ?>
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i> Total Products</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                    // select book count
                    $sql = "SELECT COUNT(b_id) AS ccount FROM booking";
                    $res = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($res);
                    ?>
                    <h3 class="card-title h2">
                        <?php echo $row['ccount']; ?>
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i> Total Booking</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                    // select book count
                    $sql = "SELECT COUNT(cont_id) AS ccount FROM contact";
                    $res = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($res);
                    ?>
                    <h3 class="card-title h2">
                        <?php echo $row['ccount']; ?>
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i> Total Contact</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                    // select book count
                    $sql = "SELECT COUNT(or_id) AS ccount FROM ord";
                    $res = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($res);
                    ?>
                    <h3 class="card-title h2">
                        <?php echo $row['ccount']; ?>
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i> Total Order</span>
                </div>
            </div>
        </div>
    </div>
    <div style="
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 80px;">
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