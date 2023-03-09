<?php

namespace App\Models;
use CodeIgniter\Model;

class Bukumodel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['id_buku', 'id_kategori','judul','penulis','penebit','tahun_terbit','harga','stok','gambar_sampul'];
    protected $useTimestamps = true;
}
