<?php

$conn = mysqli_connect('localhost', 'root', '', 'sehat_plus');

function get($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($query)) {
    $rows[] = $row;
  }

  return $rows;
}

function get_where($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($query);
  return $row;
}

function create($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// Fungsi untuk membersihkan input dari SQL injection
function sanitize_input($input) {
  global $conn;
  return htmlspecialchars(mysqli_real_escape_string($conn, trim($input)));
}
// Fungsi untuk pendaftaran pengguna
function register($group_id, $username, $password, $last_login, $created_at) {
  global $conn;

  // Membersihkan input
  $group_id = sanitize_input($group_id);
  $username = sanitize_input($username);
  $password = sanitize_input($password);
  $last_login = sanitize_input($last_login);
  $created_at = sanitize_input($created_at);


  // Hash password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query INSERT ke database
$query = "INSERT INTO users (group_id, username, password, last_login, created_at) 
VALUES ('$group_id', '$username', '$hashed_password', '$last_login', '$created_at')";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Mengembalikan hasil eksekusi query
return $result;
}
