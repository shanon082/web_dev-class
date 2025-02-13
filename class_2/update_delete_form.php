<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <h1>Update Database</h1>
        <div class="username">
            <label for="username">UserName</label>
            <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="password">
            <label for="password">password</label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <div class="email">
            <label for="email">email</label>
            <input type="email" placeholder="email" name="email" required>
        </div>
        <div class="telephone">
            <label for="telephone">telephone</label>
            <input type="tel" placeholder="telephone" name="telephone" required>
        </div>
        <button type="submit">Update</button>
    </form>

    <form action="delete.php" method="post">
    <h1>Delete Database</h1>
        <div class="username">
            <label for="username">UserName</label>
            <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="password">
            <label for="password">password</label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <button type="submit">Delete</button>
    </form>
</body>
</html>