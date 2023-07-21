<?php
require_once '../functions/MY_model.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validasi input
    $group_id = 1; // Atur sesuai dengan group_id yang sesuai dengan kebutuhan Anda
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $last_login = date('Y-m-d H:i:s'); // Atur sesuai dengan logika yang diinginkan
    $created_at = date('Y-m-d H:i:s'); // Atur sesuai dengan logika yang diinginkan

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Persiapkan prepared statement
    $query = "INSERT INTO users (group_id, username, password, last_login, created_at) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameter pada prepared statement
    mysqli_stmt_bind_param($stmt, "issss", $group_id, $username, $hashed_password, $last_login, $created_at);

    // Eksekusi prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Pendaftaran berhasil, arahkan ke halaman login
        header("Location: login.php");
        exit; // Pastikan untuk keluar dari script setelah header redirect
    } else {
        // Show the specific error message from the database
        echo "Pendaftaran gagal. Error: " . mysqli_error($conn);
    }

    // Tutup prepared statement
    mysqli_stmt_close($stmt);
}
?>
