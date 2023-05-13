<?php
include('db_con.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
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
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Note</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
                        <?php
                        $sql = "SELECT * FROM `ord`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['or_id']; ?>
                                </td>

                                <td>
                                    <?php echo $row['or_name']; ?>
                                
                                <td>
                                    <?php echo $row['or_ph']; ?>
                                </td>
                                <td>
                                    <?php echo $row['or_email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['deli_add']; ?>
                                </td>
                                <td>
                                    <?php echo $row['or_date']; ?>
                                </td>
                                <td>
                                    <?php echo $row['or_text']; ?>
                                </td>
                                <td><a href="del_order.php?or_id=<?php echo $row['or_id']; ?>"
                                        class="btn btn-outline-danger">DELETE</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
    </table>
</body>
</html>