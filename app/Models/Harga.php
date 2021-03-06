<?php

namespace App\Models;

use CodeIgniter\Model;

class Harga extends Model
{
    protected $table      = 'harga';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'id_produk', 'id_ukuran', 'harga'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'id' => 'required',
        'id_produk' => 'required',
        'id_ukuran' => 'required',
        'harga' => 'required',
    ];
    protected $validationMessages = [
        'id' => [
            'required' => 'ID Tidak Boleh Kosong'
        ],

        'id_produk' => [
            'required' => 'ID Produk Tidak Boleh Kosong'
        ],
        'id_ukuran' => [
            'required' => 'ID Ukuran Tidak Boleh Kosong'
        ],
        'harga' => [
            'required' => 'Harga Harus DIisi'
        ]
    ];
    protected $skipValidation     = false;
}