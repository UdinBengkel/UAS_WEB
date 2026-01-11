<?php
// header.php - structure only, title set by modules
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manajemen Barang</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php if (isset($_SESSION['is_login'])): ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">Manajemen Barang</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
            </ul>

            <span class="navbar-text me-3">
                Login sebagai <b><?= htmlspecialchars($_SESSION['role']) ?></b>
            </span>

            <a href="index.php?page=auth/logout"
               class="btn btn-outline-danger btn-sm"
               onclick="return confirm('Yakin logout?')">
                Logout
            </a>
        </div>
    </div>
</nav>
<?php endif; ?>

<div class="container main-content">
