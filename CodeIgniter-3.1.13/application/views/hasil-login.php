<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data</title>
</head>
<body>

<div class="card">
    <h2>Data Hasil Input</h2>

    <div class="data-item">
        <span class="label">Nama Lengkap : </span>
        <span class="value"><?= htmlspecialchars($user['nama']); ?></span>
    </div>

    <div class="data-item">
        <span class="label">Email : </span>
        <span class="value"><?= htmlspecialchars($user['email']); ?></span>
    </div>

    <div class="data-item">
        <span class="label">Password : </span>
        <span class="value hash-text"><?= $user['password']; ?></span>
    </div>

    <div class="data-item">
        <span class="label">No Telepon : </span>
        <span class="value"><?= htmlspecialchars($user['no_hp']); ?></span>
    </div>

    <div class="data-item">
        <span class="label">Jenis Kelamin : </span>
        <span class="value"><?= htmlspecialchars($user['jenis_kelamin']); ?></span>
    </div>

    
</div>

</body>
</html>