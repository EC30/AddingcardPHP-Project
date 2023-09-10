<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="/OnlineForumPHP/category.png" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                    <span class="h1 fw-bold mb-0"> Add Category</span>
                                </div>
                                <form action="categoryaddprocess.php" method="post" enctype="multipart/form-data"> <!-- Moved the form here and added enctype -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="cname" name="cname" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Category name</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea rows="4" cols="50" id="cdescription" name="cdescription" class="form-control form-control-lg"> Enter description </textarea>
                                        <label class="form-label" for="form2Example27">Description</label>
                                    </div>
                                    <div class="custom-file mb-4">
                                        <input type="file" class="custom-file-input" name="avatar" id="avatar" accept="image/*">
                                        <label class="custom-file-label" for="imageUpload">Choose file</label>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>




