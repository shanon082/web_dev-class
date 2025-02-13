<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="form_handle.php" method="post">
        <h1>Signup form</h1>
        <div class="username">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter UserName" required>
        </div>
        <div class="email">
            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="phone">
            <label for="tel">Telephone</label>
            <input type="tel" name="telephone" id="" placeholder="e.g 0786536821" required>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">SignUp</button>
        <a href="update_delete_form.php">Update/delete</a>
    </form>
</body>
</html>