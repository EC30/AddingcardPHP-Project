<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Add View</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Card deck -->
        <div class="row">
            <?php
            include '../databaseconnect.php';
            session_start();
            $_SESSION['message'] = "";
            $emailToPost = $_SESSION["user"];

            // Fetch card data from the database using a query
            $query = "SELECT category_name, Description, image_data FROM Category WHERE email = '$emailToPost'";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $category_name = $row['category_name'];
                    $cdescription = $row['Description'];
                    $image_path = $row['image_data'];

                    // Generate HTML for each card
                    echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                    echo '<div class="card">';
                    echo '<div class="view overlay">';
                    echo '<img class="card-img-top" src="' . $image_path . '" alt="Card image cap">';
                    echo '<a href="#!"><div class="mask rgba-white-slight"></div></a></div>';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">' . $category_name . '</h4>';
                    echo '<p class="card-text">' . $cdescription . '</p>';
                    echo '</div></div></div>';
                }
            }
            ?>
        </div>
        <!-- Card deck -->
        <!-- Your form for adding new cards goes here -->
    </form>
</div>
<!-- Include Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>