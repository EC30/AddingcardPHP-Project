
<?php
session_start();

// Function to generate a random OTP
function generateRandomNumber($length = 6) {
    $characters = '0123456789';
    $random_number = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $random_number .= $characters[random_int(0, $max)];
    }
    return $random_number;
}
$a=generateRandomNumber();
echo $a;

// Check if the random number is already generated and stored in the session
if (!isset($_SESSION['random_number'])) {
    // Generate a new random number and store it in the session
    $_SESSION['random_number'] = generateRandomNumber();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $userInput = $_POST['random_number'];

    // Check if the user input matches the stored random number
    if ($userInput === $_SESSION['random_number']) {
        echo "Random number is correct. You can now proceed.";
        // You can reset the random number here if needed.
        // unset($_SESSION['random_number']);
    } else {
        echo "Random number is incorrect. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Number Verification</title>
</head>
<body>
    <h1>Random Number Verification</h1>
    <form method="post">
        <label for="random_number">Enter Random Number:</label>
        <input type="text" id="random_number" name="random_number" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
