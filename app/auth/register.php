<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Form Pendaftaran Pengguna</h2>
    <form method="post" action="process_register.php">

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
