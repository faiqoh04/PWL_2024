<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Selamat Datang di Profil Anda!</h1>
    <p>Terima kasih telah masuk ke akun Anda. Berikut adalah informasi profil Anda:</p>
    <p><strong>ID Pengguna:</strong> {{ $id }}</p>
    <p><strong>Nama Lengkap:</strong> {{ $name }}</p>
    <a href="{{ route('home') }}">Kembali ke Beranda</a>
</body>
</html>