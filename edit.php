<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Pembelian Tiket</title>
    <style>
        body {
            background-color: #5bc0de; /* Warna biru langit */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #fff; /* Warna teks putih */
        }
        form {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333; /* Warna teks abu-abu tua */
        }
        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button[type="submit"] {
            background-color: #007bff; /* Warna biru */
            color: #fff; /* Warna teks putih */
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3; /* Warna biru tua saat hover */
        }
    </style>
</head>
<body>
    <h1>Form Edit Pembelian Tiket</h1>
    <form action="/pembelian-tiket/update/<?= $pembelian_tiket['id'] ?>" method="post">
        <label for="nama_penumpang">Nama Penumpang:</label><br>
        <input type="text" id="nama_penumpang" name="nama_penumpang" value="<?= $pembelian_tiket['nama_penumpang'] ?>" required><br><br>
        <label for="tujuan">Tujuan:</label><br>
        <input type="text" id="tujuan" name="tujuan" value="<?= $pembelian_tiket['tujuan'] ?>" required><br><br>
        <label for="tanggal_berangkat">Tanggal Berangkat:</label><br>
        <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" value="<?= $pembelian_tiket['tanggal_berangkat'] ?>" required><br><br>
        <label for="jumlah_tiket">Jumlah Tiket:</label><br>
        <input type="number" id="jumlah_tiket" name="jumlah_tiket" value="<?= $pembelian_tiket['jumlah_tiket'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
