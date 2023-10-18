<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
</head>
<body>
    <h2>Customer Login</h2>
    <?php if (isset($error)) : ?>
        <p><?= esc($error) ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="name">Username:</label>
        <input type="text" name="name" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
