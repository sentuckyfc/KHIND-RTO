<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Dijumpai | KHIND RTO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background: #1a1a2e; color: #fff; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; text-align: center; }
        .error-container { padding: 2rem; }
        .error-code { font-size: 8rem; font-weight: 900; color: #F97316; line-height: 1; }
        .error-title { font-size: 1.5rem; margin: 1rem 0; }
        .error-msg { color: #aaa; margin-bottom: 2rem; }
        .btn-home { display: inline-block; padding: 0.75rem 2rem; background: #F97316; color: #fff; text-decoration: none; border-radius: 8px; font-weight: 600; }
        .btn-home:hover { background: #e06010; }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Halaman Tidak Dijumpai</h1>
        <p class="error-msg">Maaf, halaman yang anda cari tidak wujud.</p>
        <a href="<?= defined('SITE_URL') ? SITE_URL . '/' : '/' ?>" class="btn-home">
            <i class="fas fa-home"></i> Kembali ke Utama
        </a>
    </div>
</body>
</html>
