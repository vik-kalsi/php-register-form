<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="grid justify-center bg-blue-200 font-bold mt-8">

<form method="POST" action="register.php" class="grid space-y-0.5">
    <label>Name: <input class="border-2" type="text" name="nameField" required pattern="[A-Za-z\s]+" required></label><br>
    <label>Username: <input class="border-2" type="text" name="usernameField" required></label><br>
    <label>Password: <input class="border-2" type="password" name="passwordField" required></label><br>
    <label>Confirm Password: <input class="border-2" type="password" name="confirmPasswordField" required></label><br>
    <input class="cursor-pointer border-2 w-20" type="submit" value="Register">
</form>
    
</body>

</html>