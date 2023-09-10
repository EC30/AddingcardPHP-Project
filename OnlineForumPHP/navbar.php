<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar with Sign In and Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        session_start();
    ?>
    <!-- Navigation Bar
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient text-white">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav> -->

    <header>
	<!--- Navbar --->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i> <?php echo $_SESSION["user"]; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-th-list fa-fw mr-1"></i>Blog</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-info-circle fa-fw mr-1"></i>About</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-user-plus fa-fw mr-1"></i>Sign UP</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-sign-in fa-fw mr-1"></i>Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--# Navbar #-->
	</header>


    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
I