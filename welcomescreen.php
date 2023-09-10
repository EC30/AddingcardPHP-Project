<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Alert Messages</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <!-- Success Alert -->
        <div class="alert alert-success" role="alert">
            This is a success alert!
        </div>

        <!-- Info Alert -->
        <div class="alert alert-info" role="alert">
            This is an info alert!
        </div>

        <!-- Warning Alert -->
        <div class="alert alert-warning" role="alert">
            This is a warning alert!
        </div>

        <!-- Danger Alert -->
        <div class="alert alert-danger" role="alert">
            This is a danger alert!
        </div>

        <!-- Dismissible Alert -->
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            This is a dismissible alert!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

