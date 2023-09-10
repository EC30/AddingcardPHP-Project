<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card_add_View</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<form action ="" method="post" enctype="multipart/form-data">

    <!-- Card deck -->
    <div class="card-deck row">
        <?php
       
        include '../databaseconnect.php';
        $emailToFetch = $_SESSION["user"];
        $sql=mysqli_query($conn, "SELECT * FROM category WHERE email='$emailToFetch'");
        while($row=mysqli_fetch_assoc($sql)){
            $cname=$row['category_name'];
            $cdescription=$row['Description'];
            $image=$row['image_data'];
            echo '<div class="col-xs-12 col-sm-6 col-md-4">
           
            <div class="card">
    
                <!--Card image-->
                <div class="view overlay">
                <img class="card-img-top" src="'.$image.'" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>
                <div class="card-body">
                <h4 class="card-title"> '.$cname.'</h4>
                <p class="card-text"> '.$cdescription.'</p>
                </div>
            </div>
            <!-- Card -->
            </div>';
        }
        ?>


    
    </div>
    <!-- Card deck -->
</form> 
</div>
   <!-- Include Bootstrap JS and jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>