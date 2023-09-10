
<?php
    include '../databaseconnect.php';
    session_start();
    $_SESSION['message'] = "";
    $emailToPost = $_SESSION["user"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cname = $_POST['cname'];
        $cdescription = $_POST['cdescription'];
        $image_path = 'image/' . $_FILES['avatar']['name'];
        $_SESSION['cname']=$cname;
        $_SESSION['cdescription']=$cdescription;
        $_SESSION['imagepath']=$image_path;

        if (empty($cname) || empty($cdescription) || empty($_FILES['avatar']['name'])) {
            $_SESSION['message'] = "All fields are required";
            header("location: index.php");
        } else {
            $image_type = exif_imagetype($_FILES['avatar']['tmp_name']);
            $allowed_types = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF];

            if (in_array($image_type, $allowed_types)) {
                if (copy($_FILES['avatar']['tmp_name'], $image_path)) {
                    $sqlInsertTable = "INSERT INTO Category (email, category_name, Description, image_data) VALUES ('$emailToPost', '$cname', '$cdescription', '$image_path')";
                    if ($conn->query($sqlInsertTable) === TRUE) {
                        $_SESSION['message'] = "Category Inserted successfully";
                        header("location: categoryafteradding.php");
                    } else {
                        echo "Error in category inserting process: " . $conn->error;
                    }
                } else {
                    echo "Error copying the image.";
                }
            } else {
                echo "Please upload only png, jpg or gif image";
            }
        }
    }

    
?>