<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

session_start();

$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php'; // 
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user data from database
    $sql = "SELECT * FROM adminn WHERE user='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Compare passwords as plain text
        if ($password == $row['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: productform.php");
            exit;
        } else {
            $showError = "Invalid Password!";
        }
    } else {
        $showError = "Invalid Username!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

<div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl">Please Login</h2>

            <form class="mx-auto max-w-lg rounded-lg border" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="flex flex-col gap-4 p-4 md:p-8">
                    <div>
                        <label for="username" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Email</label>
                        <input name="username" id="username" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>

                    <div>
                        <label for="password" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Password</label>
                        <input type="password" name="password" id="password" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>

                    <button class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">Log in</button>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>