<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembelian Tiket PO STEFANUS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
        }
        table td {
            background-color: #ffffff;
            color: #555;
        }
        table tr:nth-child(even) td {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #3498db;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Pembelian Tiket PO STEFANUS</h1>
    <a href="/pembelian-tiket/create" style="margin: 20px; display: block; text-align: center; font-size: 18px;">Buat Pembelian Tiket Baru</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Penumpang</th>
            <th>Tujuan</th>
            <th>Tanggal Berangkat</th>
            <th>Jumlah Tiket</th>
            <th>Actions</th>
        </tr>
        <?php foreach($pembelian_tiket as $tiket): ?>
        <tr>
            <td><?= $tiket['id'] ?></td>
            <td><?= $tiket['nama_penumpang'] ?></td>
            <td><?= $tiket['tujuan'] ?></td>
            <td><?= $tiket['tanggal_berangkat'] ?></td>
            <td><?= $tiket['jumlah_tiket'] ?></td>
            <td>
                <a href="/pembelian-tiket/edit/<?= $tiket['id'] ?>">Edit</a>
                <a href="/pembelian-tiket/delete/<?= $tiket['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
