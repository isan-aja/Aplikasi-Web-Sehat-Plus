<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <!-- Tambahkan link ke file CSS kustom atau framework CSS yang Anda gunakan -->
    <!-- Misalnya, jika menggunakan Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Bagian header dapat diimpor dari file topbar.php (seperti yang telah Anda berikan sebelumnya) -->
    <?php include 'C:\xampp\htdocs\aplikasisehat\app\templates\topbar.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Edit Profile</h2>
                <form action="process_edit_profile.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['user']['username']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan link ke file JavaScript kustom atau framework JavaScript yang Anda gunakan -->
    <!-- Misalnya, jika menggunakan Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
