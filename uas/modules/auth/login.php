<?php
require_once __DIR__ . '/../../config/database.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* =========================
   TAMPILKAN FORM (GET)
   ========================= */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
?>
<div class="login-wrapper">
    <div class="card login-card">
        <div class="card-body">
            <h4 class="text-center mb-4">Login</h4>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
<?php
    exit;
}

/* =========================
   PROSES LOGIN (POST)
   ========================= */
$username = $_POST['username'];
$password = $_POST['password'];

/* PREPARED STATEMENT (AMAN) */
$stmt = mysqli_prepare(
    $koneksi,
    "SELECT * FROM users WHERE username = ? LIMIT 1"
);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user   = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['is_login'] = true;
    $_SESSION['user_id']  = $user['id'];
    $_SESSION['role']     = $user['role'];

    header("Location: index.php?page=user/list");
    exit;
}
?>

<div class="alert alert-danger text-center mt-3">
    Username atau password salah
</div>
