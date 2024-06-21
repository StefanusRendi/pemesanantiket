<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Tiket</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
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
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Form Pembelian Tiket</h1>
    <form action="/pembelian-tiket/store" method="post">
        <label for="nama_penumpang">Nama Penumpang:</label><br>
        <input type="text" id="nama_penumpang" name="nama_penumpang" required><br><br>
        <label for="tujuan">Tujuan:</label><br>
        <input type="text" id="tujuan" name="tujuan" required><br><br>
        <label for="tanggal_berangkat">Tanggal Berangkat:</label><br>
        <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" required><br><br>
        <label for="jumlah_tiket">Jumlah Tiket:</label><br>
        <input type="number" id="jumlah_tiket" name="jumlah_tiket" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
