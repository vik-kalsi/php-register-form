<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST["nameField"]);
    $username = htmlspecialchars($_POST["usernameField"]);
    $password = $_POST['passwordField'];
    $confirmPassword = $_POST['confirmPasswordField'];

    $messageOutput = "";


    if ($password === $confirmPassword) {
        $messageOutput = "Welcome $name, you have been succesfully registered";
    } else {
        $messageOutput = "Passwords do not match, please try again";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Success or Fail</title>
</head>

<body class="grid justify-center bg-blue-200 font-bold mt-8">

    <?php 
    echo $messageOutput;
    ?>

    <br>

    <a class="border-2 mt-4 w-16" href="./">Home</a>
    
</body>

</html>