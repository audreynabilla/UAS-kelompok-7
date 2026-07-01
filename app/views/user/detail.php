<?php $s = $service; ?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="<?= baseUrl('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>

    <main class="container py-5">

        <!-- Tombol Kembali ke Home -->
        <a href="index.php?page=home" class="btn btn-outline-paw mb-4">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <!-- ========================================== -->
        <!-- CARD DETAIL LAYANAN                        -->
        <!-- ========================================== -->
        <div class="soft-card overflow-hidden">

            <!-- Gambar Layanan -->
            <img 
                src="<?= baseUrl('uploads/services/' . $s['image']) ?>" 
                class="w-100" 
                style="max-height:440px;object-fit:cover" 
                alt="<?= e($s['name']) ?>"
            >

            <!-- Konten Detail -->
            <div class="p-4">

                <!-- Badge Kategori -->
                <span class="badge-cat <?= $s['category'] === 'Kucing' ? 'badge-kucing' : 'badge-anjing' ?>">
                    <?= e($s['category']) ?>
                </span>

                <!-- Nama Layanan -->
                <h1 class="section-title mt-3"><?= e($s['name']) ?></h1>

                <!-- Deskripsi -->
                <p><?= e($s['description']) ?></p>

                <!-- Harga -->
                <p class="price"><?= rupiah($s['price']) ?></p>

                <!-- Durasi -->
                <p><i class="bi bi-clock"></i> <?= e((string) $s['duration']) ?> menit</p>

                <!-- Tombol Booking -->
                <a class="btn btn-primary-paw" href="index.php?page=booking&service_id=<?= (int) $s['id'] ?>">
                    Booking Sekarang
                </a>

            </div>
            <!-- /.p-4 -->

        </div>
        <!-- /.soft-card -->

    </main>

</body>
</html>