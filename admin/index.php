<?php
session_start();

// KONFIGURASI PASSWORD SEDERHANA
$admin_pass = "baki2025"; // <--- GANTI PASSWORD INI NANTI

// 1. PROSES LOGIN
if (isset($_POST['login'])) {
    if ($_POST['password'] === $admin_pass) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Password Salah!";
    }
}

// 2. PROSES LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

// 3. JIKA BELUM LOGIN, TAMPILKAN FORM LOGIN
if (!isset($_SESSION['logged_in'])) {
?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <title>Login Admin Baki</title>
        <style>
            body { font-family: sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; }
            form { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            input { padding: 10px; width: 200px; margin-bottom: 10px; display: block; }
            button { padding: 10px 20px; background: #000; color: #fff; border: none; cursor: pointer; width: 100%; }
        </style>
    </head>
    <body>
        <form method="post">
            <h2 style="text-align:center;">Admin Login</h2>
            <?php if(isset($error)) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>
            <input type="password" name="password" placeholder="Password..." required>
            <button type="submit" name="login">Masuk</button>
        </form>
    </body>
    </html>
<?php
    exit;
}

// --- AREA ADMIN (JIKA SUDAH LOGIN) ---
$json_file = '../data/promos.json';
$data = json_decode(file_get_contents($json_file), true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Promos - Baki Resto</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #eee; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; }
        .promo-item { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; background: #fafafa; }
        input { width: 100%; padding: 8px; margin: 5px 0 15px; box-sizing: border-box; }
        label { font-weight: bold; font-size: 12px; text-transform: uppercase; }
        .btn-save { background: green; color: white; padding: 15px 30px; border: none; font-size: 16px; cursor: pointer; }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
        a.logout { color: red; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Kelola Promo</h1>
            <a href="?logout=true" class="logout">Logout</a>
        </div>

        <form action="save.php" method="POST">
            <?php foreach ($data as $index => $promo): ?>
                <div class="promo-item">
                    <h3>Promo #<?php echo $index + 1; ?></h3>
                    
                    <label>Judul Promo</label>
                    <input type="text" name="promos[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($promo['title']); ?>">
                    
                    <label>Sub-Judul (Waktu/Ketentuan)</label>
                    <input type="text" name="promos[<?php echo $index; ?>][subtitle]" value="<?php echo htmlspecialchars($promo['subtitle']); ?>">
                    
                    <label>Link Gambar (Contoh: images/promo1.jpg)</label>
                    <input type="text" name="promos[<?php echo $index; ?>][image]" value="<?php echo htmlspecialchars($promo['image']); ?>">
                    
                    <label>Link Tombol (WhatsApp/PDF)</label>
                    <input type="text" name="promos[<?php echo $index; ?>][link]" value="<?php echo htmlspecialchars($promo['link']); ?>">
                    
                    <label>Teks Tombol</label>
                    <input type="text" name="promos[<?php echo $index; ?>][button_text]" value="<?php echo htmlspecialchars($promo['button_text']); ?>">
                </div>
            <?php endforeach; ?>

            <button type="submit" class="btn-save">SIMPAN PERUBAHAN</button>
        </form>
    </div>
</body>
</html>