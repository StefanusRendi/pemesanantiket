<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianTiketModel extends Model
{
    protected $table = 'pembelian_tiket'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_penumpang', 'tujuan', 'tanggal_berangkat', 'jumlah_tiket'];
}
