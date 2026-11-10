<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Pustakawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #e9ecef;">
    <div class="card shadow-lg p-4 border-0" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <div class="text-center mb-4">
            <h1 style="font-size: 3rem;">📚</h1>
            <h4 class="fw-bold">Login Pustakawan</h4>
        </div>
        <form action="/dashboard" method="GET">
            <div class="mb-3">
                <label class="form-label text-muted">Nama Pustakawan</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-4">
                <label class="form-label text-muted">Kata Sandi</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-success w-100 fw-bold">Masuk Sistem</button>
        </form>
    </div>
</body>
</html>