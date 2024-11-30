<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wilayah Lampung</title>
    <!-- Link to Bootstrap CSS (Online CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        h1 {
            color: #343a40;
            margin-bottom: 30px;
            text-align: center;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Card for general information -->
    <div class="card">
        <div class="card-header">
            <h2>Informasi Wilayah Lampung</h2>
        </div>
        <div class="card-body">
            <p>Berikut adalah data tentang wilayah-wilayah yang ada di Provinsi Lampung, termasuk nama kabupaten/kota, ibu kota, provinsi, dan luas area wilayah tersebut.</p>
            <p>Total wilayah yang ditampilkan: <strong><?= count($luaswilayah); ?></strong></p>
        </div>
    </div>

    <!-- Table to Display Data -->
    <h2 class="text-center mb-4">Data Wilayah</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adm</th>
                <th>Ibu Kota</th>
                <th>Provinsi</th>
                <th>Luas (km²)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($luaswilayah as $row): ?>
            <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->adm ?></td>
                <td><?= $row->ibu_kota ?></td>
                <td><?= $row->provinsi ?></td>
                <td><?= number_format($row->luas, 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
