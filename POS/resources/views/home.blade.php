<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Point of Sales!</h1>
    <p>Terima kasih telah mengunjungi website kami. Di sini Anda dapat menemukan berbagai produk yang kami tawarkan dengan mudah dan nyaman.</p>
    <p>Silakan gunakan menu navigasi di bawah ini untuk menjelajahi berbagai kategori produk dan layanan kami:</p>
    <nav>
        <ul>
            <li><a href="{{ route('products.food-beverage') }}">Makanan & Minuman</a></li>
            <li><a href="{{ route('products.beauty-health') }}">Kecantikan & Kesehatan</a></li>
            <li><a href="{{ route('products.home-care') }}">Perawatan Rumah</a></li>
            <li><a href="{{ route('products.baby-kid') }}">Bayi & Anak</a></li>
            <li><a href="{{ route('sales') }}">Penjualan</a></li>
        </ul>
    </nav>
    <p>Selamat berbelanja!</p>
</body>
</html>
